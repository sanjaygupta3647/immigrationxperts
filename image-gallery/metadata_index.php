<?php
// Move session_start() to the very beginning of the script
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';

// Instantiate the Database class and get the connection
$database = new Database();
$mysqli = $database->getConnection();

// Initialize variables to store metadata details
$url = $title = $description = $keyword = '';  // Added keyword
$isEdit = false;

// Check if metadata ID is provided in the URL
if (isset($_GET['id'])) {
    $metadata_id = intval($_GET['id']);  // Ensure ID is an integer

    // Fetch the metadata details based on the ID
    $query = "SELECT `url`, `title`, `description`, `keyword` FROM `page_metadata` WHERE `id` = ?";
    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param('i', $metadata_id);
        $stmt->execute();
        $stmt->bind_result($url, $title, $description, $keyword);
        $stmt->fetch();
        $stmt->close();
        $isEdit = true;
    } else {
        echo "Error preparing statement: " . $mysqli->error;
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize inputs to prevent SQL injection
    $url = $mysqli->real_escape_string($_POST['url']);
    $title = $mysqli->real_escape_string($_POST['title']);
    $description = $mysqli->real_escape_string($_POST['description']);
    $keyword = $mysqli->real_escape_string($_POST['keyword']);  // Handle keyword

    if (isset($_POST['metadata_id']) && !empty($_POST['metadata_id'])) {
        // Update existing record
        $metadata_id = intval($_POST['metadata_id']);  // Ensure ID is an integer
        $query = "UPDATE `page_metadata` SET `url` = ?, `title` = ?, `description` = ?, `keyword` = ? WHERE `id` = ?";
        if ($stmt = $mysqli->prepare($query)) {
            $stmt->bind_param('ssssi', $url, $title, $description, $keyword, $metadata_id);
            if ($stmt->execute()) {
                echo "<script>alert('Metadata updated successfully'); window.location.href='metadata_index.php';</script>";
            } else {
                echo "<script>alert('Error: " . $stmt->error . "');</script>";
            }
            $stmt->close();
        } else {
            echo "<script>alert('Error: " . $mysqli->error . "');</script>";
        }
    } else {
        // Insert new record
        $query = "INSERT INTO `page_metadata` (`url`, `title`, `description`, `keyword`) VALUES (?, ?, ?, ?)";
        if ($stmt = $mysqli->prepare($query)) {
            $stmt->bind_param('ssss', $url, $title, $description, $keyword);
            if ($stmt->execute()) {
                echo "<script>alert('New metadata inserted successfully'); window.location.href='metadata_index.php';</script>";
            } else {
                echo "<script>alert('Error: " . $stmt->error . "');</script>";
            }
            $stmt->close();
        } else {
            echo "<script>alert('Error: " . $mysqli->error . "');</script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $isEdit ? 'Edit' : 'Add'; ?> Metadata</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="image-gallery/dist/css/lightbox.min.css">
    <script type="text/javascript" src="image-gallery/dist/js/lightbox-plus-jquery.min.js"></script>
    <script type="text/javascript" src="image-gallery/js/gallery.js"></script>
    <link type="text/css" rel="stylesheet" href="image-gallery/css/style.css" />
    <style type="text/css">
        .pagination {
            margin-top: 20px;
        }
        .pagination a {
            display: inline-block;
            padding: 5px 10px;
            margin-right: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-decoration: none;
            color: #333;
        }
        .pagination a.active,
        .pagination a:hover {
            background-color: #007bff;
            color: #fff;
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
        <!-- Form for inserting/updating a record -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="mt-5 mb-4"><?php echo $isEdit ? 'Edit' : 'Add New'; ?> Title, Description, and Keyword</h2>
                    <form method="post" action="">

                        <!-- Hidden field for metadata ID when editing -->
                        <input type="hidden" name="metadata_id" value="<?php echo $isEdit ? $metadata_id : ''; ?>">

                        <div class="mb-3">
                            <label for="url" class="form-label">URL: EX:- /about-us/</label>
                            <input type="text" class="form-control" id="url" name="url" value="<?php echo htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea class="form-control" id="description" name="description" required><?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="keyword" class="form-label">Keyword:</label>
                            <input type="text" class="form-control" id="keyword" name="keyword" value="<?php echo htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8'); ?>" required>
                        </div>

                        <!-- Submit button for form -->
                        <button type="submit" class="btn btn-primary"><?php echo $isEdit ? 'Update' : 'Submit'; ?></button>

                        <!-- Cancel button for editing -->
                        <?php if ($isEdit): ?>
                            <a href="metadata_index.php" class="btn btn-secondary">Cancel</a>
                        <?php endif; ?>

                    </form>
                </div>

                <!-- Column for view section -->
                <div class="col-md-6">
                    <div class="card mb-5">
                        <div class="card-header">
                            <h2 class="card-title">Title, Description, and Keyword List</h2>
                        </div>
                        <div class="card-body" id="portfolio-items">
                            <?php
                            // Include PHP code to fetch and display existing portfolio items
                            include 'metadata_view.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this metadata record?");
        }
    </script>
</body>
</html>
