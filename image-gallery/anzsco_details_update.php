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
$mysqli = $database->getConnection();

// Initialize variables
$record = null;

// Check if ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare and execute the query to fetch the record
    $stmt = $mysqli->prepare("SELECT * FROM anzsco_occupations_details WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $record = $result->fetch_assoc();
    } else {
        echo "Record not found.";
        exit();
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $anzsco_code = $_POST['anzsco_code'];
    $description = $_POST['description'];
    $skills_assessment_requirements = $_POST['skills_assessment_requirements'];
    $group_title = $_POST['group_title'];
    $group_description = $_POST['group_description'];
    $id = $_POST['id'];

    // Prepare and execute the update query
    $stmt = $mysqli->prepare("
        UPDATE anzsco_occupations_details
        SET anzsco_code = ?, description = ?, skills_assessment_requirements = ?, group_title = ?, group_description = ?
        WHERE id = ?
    ");
    $stmt->bind_param("sssssi", $anzsco_code, $description, $skills_assessment_requirements, $group_title, $group_description, $id);
    
    if ($stmt->execute()) {
        $_SESSION['success_message'] = 'Record updated successfully!';
        header("Location: anzsco_details_views.php");
        exit();
    } else {
        $_SESSION['error_message'] = 'Failed to update record.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- CKEditor 5 -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
</head>
<body>
    <?php include('include/container.php'); ?>
    <div class="container mt-5">
        <?php include("top_menu.php"); ?>
        <h1>Update ANZSCO Occupation Details</h1>

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

        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($record['id']); ?>">
            <div class="form-group">
                <label for="anzsco_code">ANZSCO Code:</label>
                <input type="text" class="form-control" id="anzsco_code" name="anzsco_code" value="<?php echo htmlspecialchars($record['anzsco_code']); ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description"><?php echo htmlspecialchars($record['description']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="skills_assessment_requirements">Skills Assessment Requirements:</label>
                <textarea class="form-control" id="skills_assessment_requirements" name="skills_assessment_requirements"><?php echo htmlspecialchars($record['skills_assessment_requirements']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="group_title">Group Title:</label>
                <input type="text" class="form-control" id="group_title" name="group_title" value="<?php echo htmlspecialchars($record['group_title']); ?>">
            </div>
            <div class="form-group">
                <label for="group_description">Group Description:</label>
                <textarea class="form-control" id="group_description" name="group_description"><?php echo htmlspecialchars($record['group_description']); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Record</button>
            <a href="anzsco_details_views.php" class="btn btn-default">Cancel</a>
        </form>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                ClassicEditor
                    .create(document.querySelector('#description'))
                    .catch(error => {
                        console.error(error);
                    });

                ClassicEditor
                    .create(document.querySelector('#skills_assessment_requirements'))
                    .catch(error => {
                        console.error(error);
                    });

                ClassicEditor
                    .create(document.querySelector('#group_description'))
                    .catch(error => {
                        console.error(error);
                    });
            });
        </script>
    </div>
</body>
</html>
