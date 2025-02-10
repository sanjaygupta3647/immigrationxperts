<?php
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';

// Check if the request method is GET and if the ID is set
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Validate ID
    if (filter_var($id, FILTER_VALIDATE_INT)) {
        // Delete the draw from the database
        $db = new Database();
        $conn = $db->getConnection();

        $sql = "DELETE FROM express_entry_draws WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $_SESSION['success_message'] = "Draw deleted successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to delete draw. Please try again.";
        }

        $stmt->close();
        $conn->close();
    } else {
        $_SESSION['error_message'] = "Invalid draw ID.";
    }
} else {
    $_SESSION['error_message'] = "Invalid request method.";
}

// Redirect to the main page
header("Location: express_entry_index.php");
exit();
?>
