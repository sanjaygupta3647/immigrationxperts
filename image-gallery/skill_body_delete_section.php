<?php
session_start();

if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

include_once 'config/Database.php';

$database = new Database();
$mysqli = $database->getConnection();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$tab_id = isset($_GET['tab_id']) ? (int)$_GET['tab_id'] : 0;

if ($id <= 0 || $tab_id <= 0) {
    die("Invalid Request.");
}

$query = "DELETE FROM skill_body_sections WHERE id = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: skill_body_view_sections.php?tab_id={$tab_id}");
    exit();
} else {
    die("Error deleting section: " . $stmt->error);
}
?>
