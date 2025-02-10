<?php
// Include the Database class file
require_once 'config/Database.php';

// Create an instance of the Database class
$database = new Database();

// Get the database connection
$conn = $database->getConnection();

// Retrieve ID of the record to delete from the form
$id = $_POST['delete-id'];

// Prepare and execute SQL query to delete a record from the portfolio_items table
$sql = "DELETE FROM portfolio_items WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    // Success message
    echo "<script>alert('Record deleted successfully');</script>";
    // Redirect to index page after 2 seconds
    echo "<script>setTimeout(function(){ window.location.href = 'abt_gall_ad_index.php'; }, 2000);</script>";
} else {
    // Error message
    echo "<script>alert('Error deleting record: " . $conn->error . "');</script>";
    // Redirect to index page after 2 seconds
    echo "<script>setTimeout(function(){ window.location.href = 'abt_gall_ad_index.php'; }, 2000);</script>";
}

// Close connection
$conn->close();
?>
