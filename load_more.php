<?php
if (isset($_GET['nextPageToken']) && isset($_GET['apiKey']) && isset($_GET['playlistId'])) {
    $apiKey = $_GET['apiKey'];
    $playlistId = $_GET['playlistId'];
    $nextPageToken = $_GET['nextPageToken'];

    // The YouTube API URL to fetch the next set of playlist items
    $apiUrl = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=6&pageToken=' . $nextPageToken . '&playlistId=' . $playlistId . '&key=' . $apiKey . '&order=date';

    // Fetch the API response
    $response = file_get_contents($apiUrl);

    // Decode the JSON response
    $data = json_decode($response, true);

    // Prepare the HTML to return
    $html = '';

    if ($data && isset($data['items'])) {
        foreach ($data['items'] as $item) {
            $title = $item['snippet']['title'];
            $videoId = $item['snippet']['resourceId']['videoId'];
            $videoUrl = "https://www.youtube.com/embed/$videoId";
            $html .= '<div class="col-md-4 mb-4">';
            $html .= '<div class="video-frame">';
            $html .= '<iframe src="' . $videoUrl . '" title="' . htmlspecialchars($title) . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
            $html .= '</div></div>';
        }
        $nextPageToken = isset($data['nextPageToken']) ? $data['nextPageToken'] : null;
    } else {
        $nextPageToken = null;
    }

    // Return the JSON response
    echo json_encode(['html' => $html, 'nextPageToken' => $nextPageToken]);
} else {
    echo json_encode(['html' => '', 'nextPageToken' => null]);
}
?>
