<?php
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';

// Create a new instance of the Database class
$database = new Database();
$mysqli = $database->getConnection();

// Check if ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare and execute the deletion query
    $stmt = $mysqli->prepare("DELETE FROM anzsco_occupations_details WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        $_SESSION['success_message'] = 'Record deleted successfully!';
    } else {
        $_SESSION['error_message'] = 'Failed to delete record.';
    }

    header("Location: anzsco_details_views.php");
    exit();
} else {
    echo "No ID provided.";
}
?>
