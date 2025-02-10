<?php
// suggestions.php
include_once('db_connection.php'); // Include your database connection file

$searchTerm = $_GET['term']; // Get the search term from the AJAX request

// Query to fetch suggestions from the database
$query = "SELECT DISTINCT occupation FROM user_gallery WHERE occupation LIKE '%$searchTerm%' ORDER BY occupation ASC";
$result = $db->query($query);

$suggestions = array();
while ($row = $result->fetch_assoc()) {
    $suggestions[] = $row['occupation'];
}

// Output the suggestions as a JSON array
echo json_encode($suggestions);
?>
