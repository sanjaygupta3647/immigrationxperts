<?php
// Include the database connection
include 'config/db.php';

// Check if the form is submitted and the 'add_job' button is clicked
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_job"])) {
    // Process form submission and database insertion
    $job_title = $_POST["job_title"];
    $location = $_POST["location"];
    $openings = $_POST["openings"];
    $job_type = $_POST["job_type"];
    $description = $_POST["description"];
    $tab_id = $_POST["tab_id"];
    
    // Database connection and insertion code here
    $database = new Database(); // Create a new instance of the Database class
    $conn = $database->getConnection(); // Get a database connection

    // Prepare the SQL statement
    $sql_insert = "INSERT INTO job_listings (job_title, location, openings, job_type, description, tab_id) 
                   VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql_insert);

    // Bind parameters and execute the statement
    $stmt->bind_param("ssisss", $job_title, $location, $openings, $job_type, $description, $tab_id);
    if ($stmt->execute()) {       
        // If insertion is successful, redirect with a success alert
        echo "<script>alert('New job listing added successfully!'); window.location.replace('job_index.php');</script>";
        exit(); // Exit to prevent further execution of PHP code
    } else {
        // If insertion fails, display error message
        echo "Error adding job listing: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Handle cases where form is not submitted properly
    echo "Invalid request";
}
?>
