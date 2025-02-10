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
$conn = $database->getConnection(); // Correctly initialize $conn

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if the `id` parameter is provided
if (!isset($_GET['id']) || empty($_GET['id'])) {
    $_SESSION['error_message'] = 'Invalid request. No link ID specified.';
    header('Location: important_links_index.php');
    exit();
}

$id = intval($_GET['id']); // Get the ID and ensure it's an integer

// Fetch the existing data for the link
$query = "SELECT * FROM important_links WHERE id = $id";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) === 0) {
    $_SESSION['error_message'] = 'Link not found.';
    header('Location: important_links_index.php');
    exit();
}

$link = mysqli_fetch_assoc($result);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $slug = mysqli_real_escape_string($conn, $_POST['slug']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $updated_at = date('Y-m-d H:i:s');

    // Update the record in the database
    $update_query = "UPDATE important_links 
                     SET title = '$title', slug = '$slug', content = '$content', updated_at = '$updated_at' 
                     WHERE id = $id";

    if (mysqli_query($conn, $update_query)) {
        $_SESSION['success_message'] = 'Link updated successfully.';
        header('Location: important_links_index.php');
        exit();
    } else {
        $_SESSION['error_message'] = 'Error: ' . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Important Link</title>
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
            <h1>Edit Important Link</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" value="<?php echo htmlspecialchars($link['title']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="slug">Slug:</label>
                    <input type="text" class="form-control" name="slug" value="<?php echo htmlspecialchars($link['slug']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea class="form-control" name="content" id="content" required><?php echo htmlspecialchars($link['content']); ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update Link</button>
                <a href="important_links_index.php" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>

    <!-- Include Bootstrap and Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Initialize CKEditor 5
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>
</html>
