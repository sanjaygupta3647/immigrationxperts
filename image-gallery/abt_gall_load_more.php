<?php
// Include the Database class file
require_once 'config/Database.php';

// Create an instance of the Database class
$database = new Database();

// Get the database connection
$conn = $database->getConnection();

// Define variables for pagination
$limit = 8; // Number of items to display per page
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number

// Calculate the offset
$offset = ($page - 1) * $limit;

// Fetch data from the database with pagination
$sql = "SELECT * FROM portfolio_items LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

$portfolio_data = array();

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $portfolio_data[] = $row;
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();

// Convert data to JSON format and output
echo json_encode($portfolio_data);
?>

