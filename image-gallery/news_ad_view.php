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
		$sql = "SELECT * FROM news ORDER BY id DESC LIMIT $offset, $itemsPerPage";
		$result = $conn->query($sql);

		// Start table markup
		echo "<table class='table'>";
		echo "<thead><tr> <th>S.No.</th>
					<th>Image</th>
					<th>Logo</th>
					<th>Title</th>
					<th>Link</th>
					<th>Action</th></tr></thead>";
		echo "<tbody>";

		// Display existing portfolio items
		if ($result->num_rows > 0) {
			// Initialize serial number
			$serialNo = ($page - 1) * $itemsPerPage + 1;
			while ($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $serialNo++ . "</td>";
				echo "<td><img src='" . $row["image"] . "' alt='' style='height: 100px;'></td>";
				echo "<td><img src='" . $row["logo"] . "' alt='' style='height: 100px;'></td>";
				echo "<td>" . $row["title"] . "</td>";
				echo "<td><a href='" . $row["link"] . "' target='_blank'>" . $row["link"] . "</a></td>";
				echo "<td><a href='news_ad_delete.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>Delete</a></td>";
				echo "</tr>";
			}
		}

		// End table markup
		echo "</tbody></table>";

		// Count total number of rows in the table for pagination
		$sql_total = "SELECT COUNT(*) AS total FROM news";
		$result_total = $conn->query($sql_total);
		$totalRows = $result_total->fetch_assoc()['total'];

		// Calculate total number of pages
		$totalPages = ceil($totalRows / $itemsPerPage);
		$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

		// Display total news items count
		echo "<p>Total News Items: $totalRows</p>";

		// Display pagination links
		echo "<div class='pagination'>";

		// Home button
		echo "<a href='?page=1' class='page-link'>Home</a>";

		// Previous button
		if ($current_page > 1) {
			echo "<a href='?page=" . ($current_page - 1) . "' class='page-link'>Previous</a>";
		}

		// Pagination links
		$max_pages_display = 3; // Maximum number of page links to display
		$start_page = max(1, $current_page - floor($max_pages_display / 2));
		$end_page = min($start_page + $max_pages_display - 1, $totalPages);

		for ($i = $start_page; $i <= $end_page; $i++) {
			// Check if the current page is the active page
			$isActive = ($i === $current_page) ? 'active' : '';

			// Output the pagination link with the active class if applicable
			echo "<a href='?page=$i' class='page-link $isActive'>$i</a>";
		}

		// Next button
		if ($current_page < $totalPages) {
			echo "<a href='?page=" . ($current_page + 1) . "' class='page-link'>Next</a>";
		}

		// Last button
		echo "<a href='?page=$totalPages' class='page-link'>Last</a>";

		echo "</div>";

		// Close connection
		$conn->close();
?>
