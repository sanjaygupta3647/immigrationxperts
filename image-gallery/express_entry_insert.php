<?php
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize inputs
    $year = $_POST['year'];
    $draw_no = $_POST['draw_no'];
    $draw_date = $_POST['draw_date'];
    $crs_cut_off = $_POST['crs_cut_off'];
    $itas_issued = $_POST['itas_issued'];
    $reference_url = isset($_POST['reference_url']) ? $_POST['reference_url'] : '';

    // Insert into database
    $db = new Database();
    $conn = $db->getConnection();

    $sql = "INSERT INTO express_entry_draws (year, draw_no, draw_date, crs_cut_off, itas_issued, reference_url) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iissss", $year, $draw_no, $draw_date, $crs_cut_off, $itas_issued, $reference_url);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION['success_message'] = "Draw inserted successfully.";
    } else {
        $_SESSION['error_message'] = "Failed to insert draw. Please try again.";
    }

    $stmt->close();
    $conn->close();

    // Redirect after insertion
    header('Location: express_entry_index.php');
    exit;
} else {
    $_SESSION['error_message'] = "Invalid request method.";
    header('Location: express_entry_index.php'); // Redirect if accessed directly without POST data
    exit;
}
?>
