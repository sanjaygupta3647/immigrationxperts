<?php
// Start session
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';  // Include your database connection

// Instantiate the Database class and get the connection
$database = new Database();
$mysqli = $database->getConnection();

// Define variables and initialize with empty values
$title = $internalNav = "";
$title_err = $internalNav_err = "";

// Process form data when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validate title
    if (empty(trim($_POST["title"]))) {
        $title_err = "Please enter a title.";
    } else {
        $title = trim($_POST["title"]);
    }
    
    // Validate internal navigation
    if (isset($_POST["internalNav"])) {
        $internalNav = 1;  // Yes
    } else {
        $internalNav = 0;  // No
    }

    // Check for errors before inserting into the database
    if (empty($title_err)) {
        // Prepare an insert statement
        $query = "INSERT INTO skill_body_tabs (title, internalNav) VALUES (?, ?)";
        
        if ($stmt = $mysqli->prepare($query)) {
            $stmt->bind_param("si", $title, $internalNav);
            
            if ($stmt->execute()) {
                // Redirect to the admin dashboard or tab management page
                header("Location: skill_body_view_tabs.php");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert New Tab</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

    <!-- Include the container or top menu first -->
    <?php include('include/container.php'); ?>  <!-- Ensure your top menu is included here -->

    <div class="container mt-5">
        <h2>Create a New Tab</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <!-- Title Input -->
            <div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                <label for="title">Tab Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $title; ?>" required>
                <span class="help-block"><?php echo $title_err; ?></span>
            </div>

            <!-- Internal Navigation Input -->
            <div class="form-group <?php echo (!empty($internalNav_err)) ? 'has-error' : ''; ?>">
                <label for="internalNav">Internal Navigation (Sticky Navigation)</label><br>
                <label class="radio-inline">
                    <input type="radio" name="internalNav" value="1" <?php echo ($internalNav == 1) ? 'checked' : ''; ?>> Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="internalNav" value="0" <?php echo ($internalNav == 0) ? 'checked' : ''; ?>> No
                </label>
                <span class="help-block"><?php echo $internalNav_err; ?></span>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Create Tab</button>
            <a href="skill_body_view_tabs.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

</body>
</html>
