<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection code here
    	$servername = "localhost";
		$username = 'immigrationxpert_immi'; // Database username
		$password = "HB1]KU17O;Jg"; // Database password
		$dbname = "immigrationxpert_newimmi"; // Database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare data for update
    $tabId = $_POST["edit_tab_id"];
    $tabName = $_POST["tab_name"];

    // SQL to update the tab name
    $sql = "UPDATE tabs SET tab_name='$tabName' WHERE tab_id='$tabId'";

    if ($conn->query($sql) === TRUE) {
		 echo '<script>
            setTimeout(function() {
                window.location.href = "job_tab_index.php"; // Replace "index.php" with your desired home page URL
            }, 300); // 3000 milliseconds (3 seconds) delay before redirecting
         </script>';
    } else {
        echo "Error updating tab: " . $conn->error;
    }

    $conn->close();
}
?>
