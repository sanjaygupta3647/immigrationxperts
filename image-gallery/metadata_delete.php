<?php
// Start the session
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';

// Instantiate the Database class and get the connection
$database = new Database();
$mysqli = $database->getConnection();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $metadata_id = intval($_POST['metadata_id']);

    // Delete the record from the database
    $query = "DELETE FROM `page_metadata` WHERE `id` = $metadata_id";
    if ($mysqli->query($query) === TRUE) {
        header("Location: metadata_index.php?delete=success");
        exit();
    } else {
        echo "<script>alert('Error: " . $mysqli->error . "'); window.history.back();</script>";
    }
}
?>
