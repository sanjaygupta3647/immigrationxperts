<?php
include 'config/db.php';
// Check if the form was submitted and the delete_tab_id parameter is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_tab_id'])) {
    // Connect to the database (replace database credentials as needed)
  

    // Get the tab ID to be deleted
    $tabId = $_POST['delete_tab_id'];

    // SQL to delete the tab
    $sql = "DELETE FROM tabs WHERE tab_id = $tabId";

    // Attempt to execute the SQL query
    if ($conn->query($sql) === TRUE) {
        echo '<script>
            setTimeout(function() {
                window.location.href = "job_tab_index.php"; // Replace "index.php" with your desired home page URL
            }, 300); // 3000 milliseconds (3 seconds) delay before redirecting
         </script>';
    } else {
        echo "Error deleting tab: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
