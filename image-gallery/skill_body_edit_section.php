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
if ($id <= 0) {
    die("Invalid Section ID.");
}

$query = "SELECT * FROM skill_body_sections WHERE id = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$section = $result->fetch_assoc();

if (!$section) {
    die("Section not found.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $anchor = strtolower(str_replace(' ', '-', trim($_POST['anchor'])));
    $content = trim($_POST['content']);

    if (empty($title) || empty($anchor) || empty($content)) {
        die("All fields are required.");
    }

    $updateQuery = "UPDATE skill_body_sections SET title = ?, anchor = ?, content = ? WHERE id = ?";
    $updateStmt = $mysqli->prepare($updateQuery);
    $updateStmt->bind_param("sssi", $title, $anchor, $content, $id);

    if ($updateStmt->execute()) {
        header("Location: skill_body_view_sections.php?tab_id={$section['tab_id']}");
        exit();
    } else {
        die("Error updating section: " . $updateStmt->error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Section</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>
<body>
    <!-- Include the container or top menu first -->
    <?php include('include/container.php'); ?>  <!-- Make sure your top menu is included here -->

<div class="container">
    <h2>Edit Section</h2>
    <form method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($section['title']); ?>" required>
        </div>
        <div class="form-group">
            <label for="anchor">Anchor</label>
            <input type="text" class="form-control" id="anchor" name="anchor" value="<?php echo htmlspecialchars($section['anchor']); ?>" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5"><?php echo htmlspecialchars($section['content']); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Section</button>
    </form>
</div>
<script>CKEDITOR.replace('content');</script>
</body>
</html>
