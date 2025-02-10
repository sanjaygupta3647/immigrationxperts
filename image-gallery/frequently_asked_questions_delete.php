<?php
// Include the Database configuration file
include_once 'config/Database.php';

// Create a new instance of the Database class
$database = new Database();

// Get the database connection
$conn = $database->getConnection(); // Make sure this method returns a valid mysqli connection

// Check if the ID is set and is a valid integer
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize the ID as an integer
    
    // Prepare the DELETE query
    $query = "DELETE FROM faqs WHERE id = $id";
    
    // Execute the query
    if (mysqli_query($conn, $query)) {
        // Redirect back to the dashboard on success
        header('Location: frequently_asked_questions_index.php?status=faq_deleted');
        exit();
    } else {
        // Output the error if the query fails
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Handle the case where the ID is not valid or not set
    echo "Invalid FAQ ID.";
}

// Close the connection
mysqli_close($conn);
?>
