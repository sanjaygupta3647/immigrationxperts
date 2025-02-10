<?php
// Start session
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';  // Database connection

// Instantiate Database class
$database = new Database();
$mysqli = $database->getConnection();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $internalNav = isset($_POST['internalNav']) ? 1 : 0;  // If checkbox is checked, set to 1, otherwise 0

    // Insert new tab into the database
    try {
        $query = "INSERT INTO skill_body_tabs (title, internalNav) VALUES (?, ?)";
        $stmt = $mysqli->prepare($query);
        if ($stmt === false) {
            echo "Error preparing the SQL query: " . $mysqli->error;
            exit();
        }

        // Bind the parameters and execute the statement
        $stmt->bind_param("si", $title, $internalNav);

        if ($stmt->execute()) {
            // Redirect after inserting the tab
            header("Location: skill_body_index.php");
            exit();
        } else {
            echo "Error executing query: " . $stmt->error;
            exit();
        }
    } catch (Exception $e) {
        echo "Error inserting tab: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Tab</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<?php include('include/container.php'); ?>  <!-- Top Menu -->

<div class="container mt-5">
    <h2>Add New Tab</h2>
    <form method="POST" action="skill_body_insert_tab.php">
        <div class="form-group">
            <label for="title">Tab Title:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="internalNav">Enable Internal Navigation:</label>
            <input type="checkbox" name="internalNav" id="internalNav">
        </div>

        <button type="submit" class="btn btn-success">Add Tab</button>
    </form>
</div>

</body>
</html>
