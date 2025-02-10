<?php
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';
//include('include/header.php');

// Initialize variables for form values
$id = '';
$year = '';
$title = '';
$content = '';
$image = '';
$current_image = '';

// Check if editing an existing item
if (isset($_GET['id'])) {
    $database = new Database();
    $conn = $database->getConnection();

    $id = $_GET['id'];

    $sql = "SELECT * FROM about_timeline WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $year = $row['year'];
        $title = $row['title'];
        $content = $row['content'];
        $current_image = $row['image'];
    } else {
        echo "Timeline item not found.";
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="image-gallery/dist/css/lightbox.min.css">
    <script type="text/javascript" src="image-gallery/dist/js/lightbox-plus-jquery.min.js"></script>
    <script type="text/javascript" src="image-gallery/js/gallery.js"></script>
    <link type="text/css" rel="stylesheet" href="image-gallery/css/style.css" />
    <style type="text/css">
        /* Custom CSS for pagination */
        .pagination {
            margin-top: 20px; /* Add top margin for spacing */
        }

        .pagination a {
            display: inline-block;
            padding: 5px 10px; /* Add padding to each pagination link */
            margin-right: 5px; /* Add right margin for spacing between links */
            border: 1px solid #ccc; /* Add border for styling */
            border-radius: 5px; /* Add border-radius for rounded corners */
            text-decoration: none; /* Remove default underline */
            color: #333; /* Default text color */
        }

        .pagination a.active,
        .pagination a:hover {
            background-color: #007bff; /* Change background color for active and hover states */
            color: #fff; /* Change text color for active and hover states */
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
    <?php include('include/container.php'); ?>
    <div class="container mt-5">
     <?php include("top_menu.php"); ?>
        <h1 class="text-center mb-5">About / Gallery Management</h1>

        <?php if (isset($_SESSION['success_message'])): ?>
            <div class="alert alert-success">
                <?php echo $_SESSION['success_message']; unset($_SESSION['success_message']); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['error_message'])): ?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['error_message']; unset($_SESSION['error_message']); ?>
            </div>
        <?php endif; ?>

        <!-- Form for inserting a new record -->
        <div class="row">
            <!-- Column for insertion form -->
            <div class="col-md-6">
                <div class="card mb-5">
                    <div class="card-header">
                        <h2 class="card-title"><?php echo isset($id) && $id ? 'Edit Timeline Item' : 'Add Timeline Item'; ?></h2>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo isset($id) && $id ? 'about_timeline_edit.php' : 'about_timeline_insert.php'; ?>" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="year" class="form-label">Year:</label>
                                <input type="text" id="year" name="year" class="form-control" value="<?php echo isset($year) ? htmlspecialchars($year) : ''; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title:</label>
                                <input type="text" id="title" name="title" class="form-control" value="<?php echo isset($title) ? htmlspecialchars($title) : ''; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Content:</label>
                                <textarea id="content" name="content" class="form-control" rows="5" required><?php echo isset($content) ? htmlspecialchars($content) : ''; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image Upload:</label>
                                <input type="file" id="image" name="image" class="form-control" accept="image/*" <?php echo isset($id) ? '' : 'required'; ?>>
                            </div>
                            <?php if (isset($id) && $id) : ?>
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                                <input type="hidden" name="current_image" value="<?php echo htmlspecialchars($current_image); ?>">
                                <button type="submit" class="btn btn-primary">Update Timeline Item</button>
                                <button type="button" class="btn btn-secondary" onclick="window.location.href='about_timeline_index.php'">Cancel</button>
                            <?php else : ?>
                                <button type="submit" class="btn btn-primary">Add Timeline Item</button>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Column for view section -->
            <div class="col-md-6">
                <div class="card mb-5">
                    <div class="card-header">
                        <h2 class="card-title">Gallery Items</h2>
                    </div>
                    <div class="card-body" id="portfolio-items">
                        <?php
                        // Include PHP code to fetch and display existing portfolio items
                        include 'about_timeline_view.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
