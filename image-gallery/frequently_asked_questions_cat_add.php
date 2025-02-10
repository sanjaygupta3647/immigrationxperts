<?php
// Include necessary files
include_once 'config/Database.php';

// Create a new instance of the Database class
$database = new Database();
$mysqli = $database->getConnection(); // Correct variable $mysqli

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Use $mysqli instead of $conn for the connection
    $name = mysqli_real_escape_string($mysqli, $_POST['name']); 
    $id = isset($_POST['id']) ? intval($_POST['id']) : null;

    if ($id) {
        // Update existing category
        $update_query = "UPDATE faqs_categories SET name='$name' WHERE id=$id";
        if (mysqli_query($mysqli, $update_query)) {
            header("Location: frequently_asked_questions_cat_index.php?success=1");
        } else {
            header("Location: frequently_asked_questions_cat_index.php?error=" . mysqli_error($mysqli));
        }
    } else {
        // Insert new category
        $insert_query = "INSERT INTO faqs_categories (name) VALUES ('$name')";
        if (mysqli_query($mysqli, $insert_query)) {
            header("Location: frequently_asked_questions_cat_index.php?success=1");
        } else {
            header("Location: frequently_asked_questions_cat_index.php?error=" . mysqli_error($mysqli));
        }
    }
} else {
    // Redirect if the request method is not POST
    header("Location: frequently_asked_questions_cat_index.php");
}
?>
