<?php
// Database configuration
// Include the Database class file
require_once 'config/Database.php';

// Create an instance of the Database class
$database = new Database();

// Get the database connection
$conn = $database->getConnection();

// SQL query to fetch news data
$sql = "SELECT * FROM news";

// Execute SQL query
$result = $conn->query($sql);

// Check if the query executed successfully
if (!$result) {
    die("Error executing the query: " . $conn->error);
}

// Fetch the data
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Close connection
$conn->close();

// Return the fetched data
return $data;
?>
