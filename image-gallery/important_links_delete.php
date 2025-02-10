<?php
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';

// Create a new instance of the Database class and get the connection
$database = new Database();
$conn = $database->getConnection(); // Ensure $conn is a valid mysqli object

if (!$conn) {
    $_SESSION['error_message'] = "Database connection failed.";
    header("Location: important_links_index.php");
    exit();
}

// Get the ID of the link to delete securely
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id > 0) {
    // Prepare the delete query using ? placeholder for parameter
    $query = "DELETE FROM important_links WHERE id = ?";
    
    if ($stmt = $conn->prepare($query)) {
        // Bind the parameter (integer type)
        $stmt->bind_param("i", $id); // "i" means integer
        
        // Execute the query
        if ($stmt->execute()) {
            $_SESSION['success_message'] = 'Link deleted successfully.';
        } else {
            $_SESSION['error_message'] = 'Failed to delete the link.';
        }

        // Close the statement
        $stmt->close();
    } else {
        $_SESSION['error_message'] = 'Error preparing the query: ' . $conn->error;
    }
} else {
    $_SESSION['error_message'] = 'Invalid link ID.';
}

// Redirect back to the index page
header('Location: important_links_index.php');
exit();
?>
