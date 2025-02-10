<?php
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';

// Create a new instance of the Database class
$database = new Database();
$mysqli = $database->getConnection(); // Use this connection

// Handle the form submission
if (isset($_POST['add_link'])) {
    $title = mysqli_real_escape_string($mysqli, $_POST['title']); // Escape special characters in title
    $slug = mysqli_real_escape_string($mysqli, $_POST['slug']);  // Escape special characters in slug
    $content = mysqli_real_escape_string($mysqli, $_POST['content']); // Escape special characters in content
    $created_at = date('Y-m-d H:i:s');

    // Validate slug format
    if (!preg_match('/^[a-z0-9-]+$/', $slug)) {
        $_SESSION['error_message'] = 'Invalid slug format. Use only lowercase letters, numbers, and hyphens.';
        header('Location: important_links_add.php');
        exit();
    }

    // Check for duplicate slug
    $slug_query = "SELECT id FROM important_links WHERE slug = ?";
    $stmt = $mysqli->prepare($slug_query);
    $stmt->bind_param('s', $slug);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['error_message'] = 'Slug already exists. Please choose a different one.';
        header('Location: important_links_add.php');
        exit();
    }
    $stmt->close();

    // Insert record into important_links table
    $query = "INSERT INTO important_links (title, slug, content, created_at) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('ssss', $title, $slug, $content, $created_at);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = 'Link added successfully.';
        header('Location: important_links_index.php');
        exit();
    } else {
        $_SESSION['error_message'] = 'Error: ' . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Important Link</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- CKEditor 5 -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
</head>
<body>
    <?php include('include/container.php'); ?>
    <?php include("top_menu.php"); ?>

    <div class="container mt-5">
        <?php if (isset($_SESSION['success_message'])): ?>
            <div class="alert alert-success">
                <?php echo htmlspecialchars($_SESSION['success_message']); unset($_SESSION['success_message']); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['error_message'])): ?>
            <div class="alert alert-danger">
                <?php echo htmlspecialchars($_SESSION['error_message']); unset($_SESSION['error_message']); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="container card-body">
        <div class="card-header">
            <h1>Add New Important Link</h1>
        </div>
        <div class="card-body">
            <form id="link-form" method="POST" action="">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                    <label for="slug">Slug:</label>
                    <input type="text" class="form-control" name="slug" placeholder="example-slug" required>
                </div>
                <div class="form-group">
                    <label for="content">Content:</label>
                    <!-- CKEditor content -->
                    <textarea id="content" class="form-control" name="content"></textarea>
                </div>
                <button type="submit" name="add_link" class="btn btn-primary">Add Link</button>
                <a href="important_links_index.php" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>

    <!-- Include Bootstrap and Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Initialize CKEditor
        document.addEventListener('DOMContentLoaded', () => {
            ClassicEditor
                .create(document.querySelector('#content'))
                .then(editor => {
                    const form = document.querySelector('#link-form');

                    // Sync CKEditor content with textarea on form submission
                    form.addEventListener('submit', (e) => {
                        document.querySelector('#content').value = editor.getData();

                        // Validate content field
                        if (editor.getData().trim() === '') {
                            e.preventDefault(); // Prevent submission
                            alert('Content field is required.');
                        }
                    });
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
</body>
</html>
