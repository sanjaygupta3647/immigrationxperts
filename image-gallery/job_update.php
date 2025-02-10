<?php
include 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_job"])) {
    // Database connection details
    $database = new Database();
    $conn = $database->getConnection();

    // Get form data
    $id = $_POST["edit_id"];
    $job_title = $_POST["job_title"];
    $location = $_POST["location"];
    $openings = $_POST["openings"];
    $description = $_POST["description"];
    $tab_id = $_POST["tab_id"];
    $job_type = $_POST["job_type"];

    // Prepare update statement
    $stmt = $conn->prepare("UPDATE job_listings SET job_title=?, location=?, openings=?, job_type=?, description=?, tab_id=? WHERE id=?");
    $stmt->bind_param("ssisssi", $job_title, $location, $openings, $job_type, $description, $tab_id, $id);

    // Execute the update statement
    if ($stmt->execute()) {
        // Close statement
        $stmt->close();
        // Close connection
        $conn->close();
        
        // Redirect with a success alert
        echo "<script>alert('Job listing updated successfully!'); window.location.replace('job_index.php');</script>";
        exit(); // Exit to prevent further execution of PHP code
    } else {
        // Display error message
        echo "Error updating job listing: " . $stmt->error;
    }
} else {
    echo "Invalid request";
}
?>
