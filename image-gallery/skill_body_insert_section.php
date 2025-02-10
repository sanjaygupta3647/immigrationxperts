<?php
session_start();

if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

include_once 'config/Database.php';

$database = new Database();
$mysqli = $database->getConnection();

$tab_id = isset($_GET['tab_id']) ? (int)$_GET['tab_id'] : 0;
if ($tab_id <= 0) {
    die("Invalid Tab ID.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $anchor = strtolower(str_replace(' ', '-', trim($_POST['anchor'])));
    $content = trim($_POST['content']);

    if (empty($title) || empty($anchor) || empty($content)) {
        die("All fields are required.");
    }

    $query = "INSERT INTO skill_body_sections (tab_id, title, anchor, content) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("isss", $tab_id, $title, $anchor, $content);

    if ($stmt->execute()) {
        $updateQuery = "UPDATE skill_body_tabs SET section_added = 1 WHERE id = ?";
        $updateStmt = $mysqli->prepare($updateQuery);
        $updateStmt->bind_param("i", $tab_id);
        $updateStmt->execute();

        header("Location: skill_body_view_sections.php?tab_id={$tab_id}");
        exit();
    } else {
        die("Error inserting section: " . $stmt->error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Section</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>
<body>
    <!-- Include the container or top menu first -->
    <?php include('include/container.php'); ?>  <!-- Make sure your top menu is included here -->

<div class="container">
    <h2>Add New Section</h2>
    <form method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="anchor">Anchor</label>
            <input type="text" class="form-control" id="anchor" name="anchor" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Section</button>
    </form>
</div>
<script>CKEDITOR.replace('content');</script>
</body>
</html>
