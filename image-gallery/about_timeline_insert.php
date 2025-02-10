<?php
session_start();

// Ensure user is logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include necessary files
include_once 'config/Database.php';
include_once 'about_timeline_ImageUploader.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Trim and retrieve form data
    $year = trim($_POST['year']);
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    // Validate input lengths
    if (strlen($year) > 4) {
        $_SESSION['error_message'] = "Error: The year must be 4 characters or less.";
        header("Location: about_timeline_index.php");
        exit();
    }
    if (strlen($title) > 255) {
        $_SESSION['error_message'] = "Error: The title must be 255 characters or less.";
        header("Location: about_timeline_index.php");
        exit();
    }
    if (strlen($content) > 65535) {
        $_SESSION['error_message'] = "Error: The content must be 65535 characters or less.";
        header("Location: about_timeline_index.php");
        exit();
    }

    // Handle image upload
    $imagePath = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageUploader = new ImageUploader('../assets/images/office/');
        try {
            $imageFileName = $imageUploader->upload($_FILES['image']);
            $imagePath = '/assets/images/office/' . $imageFileName;
        } catch (Exception $e) {
            $_SESSION['error_message'] = "Error uploading image: " . $e->getMessage();
            header("Location: about_timeline_index.php");
            exit();
        }
    } else {
        $_SESSION['error_message'] = "Error: Image upload failed.";
        header("Location: about_timeline_index.php");
        exit();
    }

    // Insert into database
    $database = new Database();
    $conn = $database->getConnection();

    $sql = "INSERT INTO about_timeline (year, title, content, image) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        $_SESSION['error_message'] = "Error preparing statement: " . $conn->error;
        header("Location: about_timeline_index.php");
        exit();
    }

    $stmt->bind_param("isss", $year, $title, $content, $imagePath);
    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Timeline item inserted successfully!";
    } else {
        $_SESSION['error_message'] = "Error executing statement: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
    header("Location: about_timeline_index.php");
    exit();
} else {
    $_SESSION['error_message'] = "Invalid request method.";
    header("Location: about_timeline_index.php");
    exit();
}
?>
