<?php
// Include necessary files and initialize database connection
include_once 'image-gallery/config/Database.php';
include_once 'image-gallery/class/User.php';
include_once 'image-gallery/class/Gallery.php';
include_once 'image-gallery/gallery_action.php';

// Retrieve page number from the AJAX request
$page = isset($_POST['page']) ? $_POST['page'] : 1;

// Count total number of gallery items
$totalItemsQuery = "SELECT COUNT(*) AS total FROM gallery_items";
$totalItemsResult = $db->query($totalItemsQuery);
$totalItems = $totalItemsResult->fetch_assoc()['total'];

// Calculate total number of pages
$itemsPerPage = 10;
$totalPages = ceil($totalItems / $itemsPerPage);

// Output pagination links
echo "<ul class='pagination'>";
for ($i = 1; $i <= $totalPages; $i++) {
    // Add active class to the current page
    $activeClass = ($i == $page) ? 'active' : '';

    // Output pagination link
    echo "<li class='pagination-link $activeClass' data-page='$i'><a href='#'>$i</a></li>";
}
echo "</ul>";

// Close database connection if necessary
$db->close();
?>
