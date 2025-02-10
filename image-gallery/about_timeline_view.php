<?php
include_once 'config/Database.php';

$database = new Database();
$conn = $database->getConnection();

$sql = "SELECT * FROM about_timeline ORDER BY year DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table class="table table-bordered">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Year</th>';
    echo '<th>Title</th>';
    echo '<th>Content</th>';
    echo '<th>Image</th>';
    echo '<th>Action</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['year']) . '</td>';
        echo '<td>' . htmlspecialchars($row['title']) . '</td>';
        echo '<td>' . htmlspecialchars($row['content']) . '</td>';
        echo '<td><img src="' . htmlspecialchars($row['image']) . '" style="max-width: 100px; max-height: 100px;"></td>';
        echo '<td>';
        echo '<a href="about_timeline_index.php?id=' . $row['id'] . '" class="btn btn-primary btn-sm">Edit</a>';
        echo ' ';
        echo '<a href="about_timeline_delete.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this item?\')">Delete</a>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo '<p>No data found</p>';
}

$conn->close();
?>
