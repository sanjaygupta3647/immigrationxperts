<?php
// Database connection parameters
$servername = "localhost"; // Your database server name or IP address
$username = "apicalvisaexpert_apicals"; // Your database username
$password = "apicals@123#"; // Your database password
$database = "apicalvisaexpert_apical"; // Your database name

// Create a connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Set character set to UTF-8 (if needed)
$mysqli->set_charset("utf8");
?>
