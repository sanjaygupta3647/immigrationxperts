<?php
// Assuming you have a database connection established already

include_once 'image-gallery/config/Database.php';
include_once 'image-gallery/class/User.php';
include_once 'image-gallery/class/Gallery.php';
include_once 'image-gallery/gallery_action.php';
//include_once 'image-gallery/include/suggestions.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the search term is set and not empty
if (isset($_POST['searchTerm']) && !empty($_POST['searchTerm'])) {
    // Sanitize the search term to prevent SQL injection
    $searchTerm = mysqli_real_escape_string($db, $_POST['searchTerm']);

    // Perform a database query to retrieve suggestions based on the search term
    $query = "SELECT DISTINCT occupation_name, ANZSCO FROM occupations WHERE occupation_name LIKE '%$searchTerm%' OR ANZSCO LIKE '%$searchTerm%'";

    $result = mysqli_query($db, $query);

    if ($result) {
        // Check if there are any suggestions
        if (mysqli_num_rows($result) > 0) {
            // Output the suggestions as an unordered list
            echo "<ul class='suggestions-list'>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>" . $row['ANZSCO'] . " - " . $row['occupation_name'] . "</li>";
            }
            echo "</ul>";
        } else {
            "No suggestions found.";
        }
    } else {
        echo "Error: " . mysqli_error($db);
    }
} else {
    echo "Invalid search term.";
}
?>
