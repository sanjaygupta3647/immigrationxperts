<?php
include 'config/db.php';
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection code here
   

    // Prepare data for insertion
    $tabName = $_POST["tab_name"];

    // SQL to insert a new tab
    $sql = "INSERT INTO tabs (tab_name) VALUES ('$tabName')";

    if ($conn->query($sql) === TRUE) {
         echo '<script>
            setTimeout(function() {
                window.location.href = "job_tab_index.php"; // Replace "index.php" with your desired home page URL
            }, 300); // 3000 milliseconds (3 seconds) delay before redirecting
         </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
