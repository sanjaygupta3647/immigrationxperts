<?php
// Include the Database class file
require_once 'config/Database.php';

// Create an instance of the Database class
$database = new Database();

// Get the database connection
$conn = $database->getConnection();

// Define number of items per page
$itemsPerPage = 10;

// Retrieve page number from query string, default to 1 if not set
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// Calculate offset for pagination
$offset = ($page - 1) * $itemsPerPage;

// Fetch data from the database with pagination
$sql = "SELECT * FROM portfolio_items ORDER BY id DESC LIMIT $offset, $itemsPerPage";
$result = $conn->query($sql);

// Start table markup
echo "<table class='table'>";
echo "<thead><tr><th>Serial No</th><th>Category</th><th>Title</th><th>Image</th><th>Action</th></tr></thead>";
echo "<tbody>";

// Display existing portfolio items
if ($result->num_rows > 0) {
    // Initialize serial number
    $serialNo = ($page - 1) * $itemsPerPage + 1;
    while ($row = $result->fetch_assoc()) {
        // Output table rows with data
        echo "<tr>";
        echo "<td>" . $serialNo . "</td>";
        echo "<td>" . $row["category"] . "</td>";
        echo "<td>" . $row["title"] . "</td>";
        // Display image in table cell
        echo "<td><img src='uploads/gall/" . $row["image"] . "' alt='" . $row["title"] . "' style='max-width: 100px;'></td>";
        // Add delete button
        echo "<td><form action='abt_gall_ad_delete.php' method='POST'><input type='hidden' name='delete-id' value='" . $row["id"] . "'><button type='submit'>Delete</button></form></td>";
        echo "</tr>";
        // Increment serial number
        $serialNo++;
    }
} else {
    // Display message if no results found
    echo "<tr><td colspan='6'>No results found</td></tr>";
}

// End table markup
echo "</tbody></table>";

// Count total number of rows in the table for pagination
$sql_total = "SELECT COUNT(*) AS total FROM portfolio_items";
$result_total = $conn->query($sql_total);
$totalRows = $result_total->fetch_assoc()['total'];

// Calculate total number of pages
$totalPages = ceil($totalRows / $itemsPerPage);

// Display total portfolio items count
echo "<p>Total Gallery Items: $totalRows</p>";

// Display pagination links
echo "<div class='pagination'>";
if ($page > 1) {
    // Output "Previous" button if not on the first page
    echo "<a href='?page=" . ($page - 1) . "' class='prev'>Previous</a>";
}

for ($i = 1; $i <= $totalPages; $i++) {
    // Check if the current page is the active page
    $isActive = ($i === $page) ? 'active' : '';

    // Output the pagination link with the active class if applicable
    echo "<a href='?page=$i' class='$isActive'>$i</a>";
}

// Output "Next" button if there are more pages
if ($page < $totalPages) {
    echo "<a href='?page=" . ($page + 1) . "' class='next'>Next</a>";
}

echo "</div>";


// Close connection
$conn->close();
?>
