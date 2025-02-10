<?php
//$servername = "localhost"; // Replace with your database server name or IP address
//$username = "root"; // Replace with your database username
//$password = ""; // Replace with your database password
//$database = "apical"; // Replace with your database name

$servername = "localhost"; // Replace with your database server name or IP address
$username = "apicalvisaexpert_apicals"; // Replace with your database username
$password = "apicals@123#"; // Replace with your database password
$database = "apicalvisaexpert_apical"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character set to UTF-8 (if needed)
$conn->set_charset("utf8");

// You can now use the $conn variable to perform database operations.
// Make sure to close the connection when you're done with your database operations.

// Example query:
// $sql = "SELECT * FROM your_table_name";
// $result = $conn->query($sql);

// Close the connection when you're done with database operations:
// $conn->close();
?>
