<?php
session_start();

if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    include_once 'config/Database.php';

    // Database connection
    $database = new Database();
    $conn = $database->getConnection();

    // Prepare SQL statement
    $sql = "DELETE FROM about_timeline WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        $_SESSION['error_message'] = "Error: " . $conn->error;
        header("Location: about_timeline_index.php");
        exit();
    }

    // Bind parameters and execute
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Timeline item deleted successfully!";
    } else {
        $_SESSION['error_message'] = "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
    header("Location: about_timeline_index.php");
    exit();
} else {
    $_SESSION['error_message'] = "Invalid request method or missing ID.";
    header("Location: about_timeline_index.php");
    exit();
}
?>
