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

// Initialize variables for form fields
$anzsco_code = $description = $skills_assessment_requirements = $group_title = $group_description = "";
$message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $anzsco_code = $_POST['anzsco_code'];
    $description = $_POST['description'];
    $skills_assessment_requirements = $_POST['skills_assessment_requirements'];
    $group_title = $_POST['group_title'];
    $group_description = $_POST['group_description'];

    // Check if the anzsco_code exists in anzsco_occupations table
    $checkSql = "SELECT anzsco_code FROM anzsco_occupations WHERE anzsco_code = ?";
    $checkStmt = $mysqli->prepare($checkSql);
    $checkStmt->bind_param('s', $anzsco_code);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        // Prepare an SQL statement to insert data into the database
        $sql = "INSERT INTO anzsco_occupations_details (anzsco_code, description, skills_assessment_requirements, group_title, group_description) VALUES (?, ?, ?, ?, ?)";
        
        // Use mysqli prepare
        $stmt = $mysqli->prepare($sql);
        if ($stmt === false) {
            // Output the error info if prepare fails
            die("Prepare failed: " . $mysqli->error);
        }

        // Bind parameters
        $stmt->bind_param('sssss', $anzsco_code, $description, $skills_assessment_requirements, $group_title, $group_description);

        // Execute the statement and check if the insertion was successful
        if ($stmt->execute()) {
            $_SESSION['success_message'] = "Record inserted successfully!";
            header("Location: anzsco_details_views.php");
            exit();
        } else {
            $_SESSION['error_message'] = "Error inserting record: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        // Error: anzsco_code does not exist in parent table
        $_SESSION['error_message'] = "Error: ANZSCO code does not exist in the anzsco_occupations table.";
    }

    // Close the check statement
    $checkStmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert ANZSCO Occupation Detail</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- CKEditor 5 -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
</head>
<body>
    <?php include('include/container.php'); ?>
    <div class="container mt-5">
        <?php include("top_menu.php"); ?>
        <div class="mt-3">
            <a href="anzsco_details_views.php" class="btn btn-info">View All Records</a>
        </div>
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

        <h1 class="mt-5">Insert ANZSCO Occupation Detail</h1>
        <form action="" method="post" class="mt-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="anzsco_code">ANZSCO Code:</label>
                        <input type="text" class="form-control" id="anzsco_code" name="anzsco_code" value="<?php echo htmlspecialchars($anzsco_code); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description"><?php echo htmlspecialchars($description); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="skills_assessment_requirements">Skills Assessment Requirements:</label>
                        <textarea class="form-control" id="skills_assessment_requirements" name="skills_assessment_requirements"><?php echo htmlspecialchars($skills_assessment_requirements); ?></textarea>
                    </div>                    
                </div>
                <div class="col-md-6">
					<div class="form-group">
                        <label for="group_title">Group Title:</label>
                        <input type="text" class="form-control" id="group_title" name="group_title" value="<?php echo htmlspecialchars($group_title); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="group_description">Group Description:</label>
                        <textarea class="form-control" id="group_description" name="group_description"><?php echo htmlspecialchars($group_description); ?></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Insert Record</button>
            <a href="anzsco_details_views.php" class="btn btn-default">Cancel</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Initialize CKEditor -->
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
</body>
</html>
