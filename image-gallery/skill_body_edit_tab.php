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

// Get the tab ID from URL
$tab_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Fetch the tab details
if ($tab_id > 0) {
    $query = "SELECT * FROM skill_body_tabs WHERE id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("i", $tab_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $tab = $result->fetch_assoc();

    if (!$tab) {
        echo "Tab not found!";
        exit();
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $internalNav = isset($_POST['internalNav']) ? 1 : 0;  // If checkbox is checked, set to 1, otherwise 0

    // Update the tab in the database
    try {
        $query = "UPDATE skill_body_tabs SET title = ?, internalNav = ? WHERE id = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("sii", $title, $internalNav, $tab_id);
        $stmt->execute();

        // Redirect after updating the tab
        header("Location: skill_body_index.php");
        exit();
    } catch (PDOException $e) {
        echo "Error updating tab: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tab</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<?php include('include/container.php'); ?>  <!-- Top Menu -->

<div class="container mt-5">
    <h2>Edit Tab</h2>
    <form method="POST" action="skill_body_edit_tab.php?id=<?php echo $tab_id; ?>">
        <div class="form-group">
            <label for="title">Tab Title:</label>
            <input type="text" name="title" id="title" class="form-control" value="<?php echo htmlspecialchars($tab['title']); ?>" required>
        </div>

        <div class="form-group">
            <label for="internalNav">Enable Internal Navigation:</label>
            <input type="checkbox" name="internalNav" id="internalNav" <?php echo $tab['internalNav'] ? 'checked' : ''; ?>>
        </div>

        <button type="submit" class="btn btn-warning">Update Tab</button>
		<a href="skill_body_index.php" class="btn btn-info btn-sm">Cancel</a>
    </form>
</div>

</body>
</html>
