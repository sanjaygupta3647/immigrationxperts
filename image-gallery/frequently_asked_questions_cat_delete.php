<?php
// Include necessary files
include_once 'config/Database.php';

// Create a new instance of the Database class
$database = new Database();
$mysqli = $database->getConnection(); // Correct variable $mysqli


if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $delete_query = "DELETE FROM faqs_categories WHERE id=$id";

    // Use $mysqli instead of $conn for the connection
    if (mysqli_query($mysqli, $delete_query)) {
        header("Location: frequently_asked_questions_cat_index.php?success=1");
    } else {
        header("Location: frequently_asked_questions_cat_index.php?error=" . mysqli_error($mysqli));
    }
} else {
    // Redirect or show an error if no ID is provided
    header("Location: frequently_asked_questions_cat_index.php");
}
?>
