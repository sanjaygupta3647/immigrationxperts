<?php
// Start the session
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';

// Initialize variables to avoid warnings
$edit = false;
$id = $anzsco_code = $name = $list = $assessing_authority = $skill_level = "";

// Check if an edit request is made
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];

    $database = new Database();
    $conn = $database->getConnection();

    $stmt = $conn->prepare("SELECT * FROM anzsco_occupations WHERE id = ?");
    $stmt->bind_param("i", $edit_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $edit = true;
        $id = $row['id'];
        $anzsco_code = $row['anzsco_code'];
        $name = $row['name'];
        $list = $row['list'];
        $assessing_authority = $row['assessing_authority'];
        $skill_level = $row['skill_level'];
    } else {
        $_SESSION['error_message'] = "Record not found.";
    }

    $stmt->close();
    $conn->close();
}

// Handle insert or update requests
if (isset($_POST['insert']) || isset($_POST['update'])) {
    $anzsco_code = $_POST['anzsco_code'];
    $name = $_POST['name'];
    $list = $_POST['list'];
    $assessing_authority = $_POST['assessing_authority'];
    $skill_level = $_POST['skill_level'];

    $database = new Database();
    $conn = $database->getConnection();

    if (isset($_POST['insert'])) {
        $stmt = $conn->prepare("INSERT INTO anzsco_occupations (anzsco_code, name, list, assessing_authority, skill_level) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $anzsco_code, $name, $list, $assessing_authority, $skill_level);
        $action = "inserted";
    } elseif (isset($_POST['update'])) {
        $id = $_POST['id'];
        $stmt = $conn->prepare("UPDATE anzsco_occupations SET anzsco_code = ?, name = ?, list = ?, assessing_authority = ?, skill_level = ? WHERE id = ?");
        $stmt->bind_param("sssssi", $anzsco_code, $name, $list, $assessing_authority, $skill_level, $id);
        $action = "updated";
    }

    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Record {$action} successfully!";
    } else {
        $_SESSION['error_message'] = "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    // Redirect after successful execution
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Handle delete request
if (isset($_POST['delete'])) {
    $id = $_POST['delete_id'];

    $database = new Database();
    $conn = $database->getConnection();

    $stmt = $conn->prepare("DELETE FROM anzsco_occupations WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Record deleted successfully!";
    } else {
        $_SESSION['error_message'] = "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    // Redirect after deletion
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Fetch existing records for display
function fetchRecords() {
    $database = new Database();
    $conn = $database->getConnection();

    $sql = "SELECT id, anzsco_code, name, list, assessing_authority, skill_level FROM anzsco_occupations";
    $result = $conn->query($sql);

    $records = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $records[] = $row;
        }
    }

    $conn->close();
    return $records;
}
?>
