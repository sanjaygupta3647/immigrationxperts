<?php
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Check if job ID is provided in the URL
if (!isset($_GET['id'])) {
    $_SESSION['error_message'] = "No job ID provided.";
    header("Location: canada_job_index.php");
    exit();
}

$job_id = $_GET['id'];

// Include the database configuration file
include_once 'config/Database1.php';

// Create a new instance of the Database class
$database = new Database();

// Get the PDO connection
$pdo = $database->getConnection();

try {
    // Prepare the SQL delete statement
    $stmt = $pdo->prepare("DELETE FROM jobs WHERE id = :id");
    $stmt->bindParam(':id', $job_id, PDO::PARAM_INT);

    // Execute the statement
    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Job deleted successfully.";
    } else {
        $_SESSION['error_message'] = "Failed to delete job.";
    }
} catch (PDOException $e) {
    $_SESSION['error_message'] = "Query failed: " . $e->getMessage();
}

// Redirect back to job index page
header("Location: canada_job_view.php");
exit();
?>
