<?php
// Include the Database class file
require_once 'config/Database.php';

// Create an instance of the Database class
$database = new Database();

// Get the database connection
$conn = $database->getConnection();

// Retrieve ID of the record to delete from the URL parameters
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Check if the ID parameter is missing
if ($id === null) {
    // Handle the case where the 'id' parameter is not set
    echo "ID parameter is missing.";
} else {
    // Prepare and execute SQL query to delete a record from the news table
    $sql = "DELETE FROM news WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        // Success message
        echo "<script>alert('Record deleted successfully');</script>";
        // Redirect to index page after 2 seconds
        echo "<script>setTimeout(function(){ window.location.href = 'news_ad_index.php'; }, 200);</script>";
    } else {
        // Error message
        echo "<script>alert('Error deleting record: " . $conn->error . "');</script>";
        // Redirect to index page after 2 seconds
        echo "<script>setTimeout(function(){ window.location.href = 'news_ad_index.php'; }, 200);</script>";
    }
}

// Close connection
$conn->close();
?>
