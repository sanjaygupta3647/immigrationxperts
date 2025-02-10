<?php
// Start session
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';  // Database connection

// Instantiate Database class
$database = new Database();
$mysqli = $database->getConnection();

// Get the tab ID from URL
$tab_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Proceed with deletion if tab ID is valid
if ($tab_id > 0) {
    try {
        // Delete all sections related to the tab (Optional: if there are sections associated with the tab)
        $deleteSectionsQuery = "DELETE FROM skill_body_sections WHERE tab_id = ?";
        $deleteSectionsStmt = $mysqli->prepare($deleteSectionsQuery);
        $deleteSectionsStmt->bind_param("i", $tab_id);
        $deleteSectionsStmt->execute();

        // Delete the tab
        $query = "DELETE FROM skill_body_tabs WHERE id = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("i", $tab_id);
        $stmt->execute();

        // Redirect after deletion
        header("Location: skill_body_index.php");
        exit();
    } catch (PDOException $e) {
        echo "Error deleting tab: " . $e->getMessage();
    }
} else {
    echo "Invalid tab ID!";
}
?>
