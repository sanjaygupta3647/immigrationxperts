<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the ID parameter is present
    if(isset($_POST['id'])) {
        // Sanitize and validate the ID parameter
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

        // Validate ID
        if ($id === false) {
            // Handle invalid ID
            echo "Invalid job ID.";
            exit;
        }

        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "apical";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the delete statement
        $sql = "DELETE FROM job_listings WHERE id = ?";

        if ($stmt = $conn->prepare($sql)) {
            // Bind parameters
            $stmt->bind_param("i", $id);

            // Attempt to execute the statement
            if ($stmt->execute()) {
                // Job listing deleted successfully
                echo "Job listing deleted successfully!";
				 echo "<script>alert('Job listing deleted successfully!'); window.location.replace('job_index.php');</script>";
				exit(); // Exit to prevent further execution of PHP code
            } else {
                // Error executing the statement
                echo "Error deleting job listing: " . $stmt->error;
            }

            // Close statement
            $stmt->close();
        } else {
            // Error preparing statement
            echo "Error preparing statement: " . $conn->error;
        }

        // Close connection
        $conn->close();
    } else {
        // ID parameter is missing
        echo "Job ID parameter is missing.";
    }
} else {
    // Form is not submitted via POST method
    echo "Form is not submitted.";
}
?>
