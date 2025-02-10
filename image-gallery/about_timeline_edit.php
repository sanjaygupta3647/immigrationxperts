<?php
session_start();

if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

include_once 'config/Database.php';
include_once 'about_timeline_ImageUploader.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize inputs
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $year = trim($_POST['year'] ?? '');
    $title = trim($_POST['title'] ?? '');
    $content = trim($_POST['content'] ?? '');
    $currentImage = trim($_POST['current_image'] ?? ''); // Existing image path

    // Validate the input lengths
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

    // Database connection
    $database = new Database();
    $conn = $database->getConnection();

    // Image upload handling
    $imagePath = $currentImage; // Default to current image path
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageUploader = new ImageUploader('../assets/images/office/');
        try {
            $imageFileName = $imageUploader->upload($_FILES['image']);
            $imagePath = '/assets/images/office/' . $imageFileName;
        } catch (Exception $e) {
            $_SESSION['error_message'] = "Error: " . $e->getMessage();
            header("Location: about_timeline_edit.php?id=" . $id);
            exit();
        }
    }

    // Update record in database
    $sql = "UPDATE about_timeline SET year = ?, title = ?, content = ?, image = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        $_SESSION['error_message'] = "Error: " . $conn->error;
        header("Location: about_timeline_edit.php?id=" . $id);
        exit();
    }

    $stmt->bind_param("isssi", $year, $title, $content, $imagePath, $id);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Timeline item updated successfully!";
    } else {
        $_SESSION['error_message'] = "Error: " . $stmt->error;
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
