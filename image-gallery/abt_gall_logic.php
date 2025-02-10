<?php
// Initialize variables
$current_page = 1;
$total_pages = 0;

// Include the Database class file
require_once 'config/Database.php';

// Create an instance of the Database class
$database = new Database();

// Get the database connection
$conn = $database->getConnection();

// Define number of items per page
$itemsPerPage = 10;

// Retrieve page number from query string, default to 1 if not set
$page = isset($_GET['page']) ? intval($_GET['page']) : $current_page;

// Calculate offset for pagination
$offset = ($page - 1) * $itemsPerPage;

// Fetch data from the database with pagination, ordered by ID in descending order
$sql = "SELECT * FROM portfolio_items ORDER BY id DESC LIMIT $offset, $itemsPerPage";
$result = $conn->query($sql);

// Initialize $portfolio_data array
$portfolio_data = array();

// Check if there are rows returned from the query
if ($result && $result->num_rows > 0) {
    // Fetch all rows and store them in $portfolio_data array
    while ($row = $result->fetch_assoc()) {
        $portfolio_data[] = $row;
    }

    // Count total number of rows in the table for pagination
    $sql_total = "SELECT COUNT(*) AS total FROM portfolio_items";
    $result_total = $conn->query($sql_total);
    $totalRows = $result_total->fetch_assoc()['total'];

    // Calculate total number of pages
    $totalPages = ceil($totalRows / $itemsPerPage);

    // Update $total_pages variable
    $total_pages = $totalPages;
} else {
    // No data found
    $portfolio_data = array();
    $totalRows = 0;
    $totalPages = 0;
}

// Close connection
$conn->close();
?>
