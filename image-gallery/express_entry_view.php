<?php
include_once 'config/Database.php';

$database = new Database();
$conn = $database->getConnection();

// Set the number of items per page
$itemsPerPage = 10;

// Get the current page from the URL, default is 1
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($current_page < 1) {
    $current_page = 1;
}

// Calculate the offset for the SQL query
$offset = ($current_page - 1) * $itemsPerPage;

// Count total number of rows in the table for pagination
$sql_total = "SELECT COUNT(*) AS total FROM express_entry_draws";
$result_total = $conn->query($sql_total);
$totalRows = $result_total->fetch_assoc()['total'];

// Calculate total number of pages
$totalPages = ceil($totalRows / $itemsPerPage);

// Fetch data for the current page
$sql = "SELECT * FROM express_entry_draws ORDER BY id DESC LIMIT $offset, $itemsPerPage";
$result = $conn->query($sql);

// Display total news items count
echo "<p>Total Draws: $totalRows</p>";

// Ensure $result variable is set and contains data fetched from database
if ($result && $result->num_rows > 0) {
    ?>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Year</th>
                    <th scope="col">Draw No</th>
                    <th scope="col">Draw Date</th>
                    <th scope="col">CRS Cut Off</th>
                    <th scope="col">ITAs Issued</th>
                    <th scope="col">Reference URL</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($drawRow = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $drawRow['year']; ?></td>
                        <td><?php echo $drawRow['draw_no']; ?></td>
                        <td><?php echo $drawRow['draw_date']; ?></td>
                        <td><?php echo $drawRow['crs_cut_off']; ?></td>
                        <td><?php echo $drawRow['itas_issued']; ?></td>
                        <td><?php echo !empty($drawRow['reference_url']) ? '<a href="' . $drawRow['reference_url'] . '" target="_blank">View</a>' : ''; ?></td>
                        <td>
                            <a href="express_entry_index.php?id=<?php echo $drawRow['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="express_entry_delete.php?id=<?php echo $drawRow['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this draw?')">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <?php
    // Display pagination links
    echo "<nav aria-label='Page navigation'>";
    echo "<ul class='pagination'>";

    // Home button
    echo "<li><a href='?page=1' class='page-link'>Home</a></li>";

    // Previous button
    if ($current_page > 1) {
        echo "<li><a href='?page=" . ($current_page - 1) . "' class='page-link'>Previous</a></li>";
    }

    // Pagination links
    $max_pages_display = 3; // Maximum number of page links to display
    $start_page = max(1, $current_page - floor($max_pages_display / 2));
    $end_page = min($start_page + $max_pages_display - 1, $totalPages);

    for ($i = $start_page; $i <= $end_page; $i++) {
        // Check if the current page is the active page
        $isActive = ($i === $current_page) ? 'active' : '';

        // Output the pagination link with the active class if applicable
        echo "<li class='$isActive'><a href='?page=$i' class='page-link'>$i</a></li>";
    }

    // Next button
    if ($current_page < $totalPages) {
        echo "<li><a href='?page=" . ($current_page + 1) . "' class='page-link'>Next</a></li>";
    }

    // Last button
    echo "<li><a href='?page=$totalPages' class='page-link'>Last</a></li>";

    echo "</ul>";
    echo "</nav>";
} else {
    echo "<p>No draws found.</p>";
}
?>
