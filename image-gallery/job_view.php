<?php
// Include the database connection

// Define how many records you want to display per page
$records_per_page = 10;

// Check if page number is specified, otherwise default to page 1
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the offset for the query based on current page number
$offset = ($current_page - 1) * $records_per_page;

// Get a database connection
$database = new Database();
$conn = $database->getConnection();

// Fetch job listings with tab names from the database using a JOIN query with pagination
$sql = "SELECT job_listings.id, job_listings.tab_id, job_listings.job_title, job_listings.location, job_listings.openings, job_listings.job_type, job_listings.description, tabs.tab_name 
        FROM job_listings
        INNER JOIN tabs ON job_listings.tab_id = tabs.tab_id
        ORDER BY job_listings.id DESC
        LIMIT $offset, $records_per_page";
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    echo "Error executing the query: " . $conn->error;
} else {
    // Display job listings in a table with edit and delete actions
    if ($result->num_rows > 0) {
        // Output the table structure with headers
        echo "<table class='table'>";
        echo "<thead><tr><th>S.No.</th><th>Job Title</th><th>Location</th><th>Openings</th><th>Job Type</th><th>Description</th><th>Tab Name</th><th>Actions</th></tr></thead>";
        echo "<tbody>";

        // Variable to keep track of serial number
        $serial = $offset + 1;

        // Loop through the fetched rows
        while ($row = $result->fetch_assoc()) {
            // Output each row as a table row
            echo "<tr>";
            echo "<td>".$serial."</td>"; // Display serial number
            echo "<td>".$row["job_title"]."</td>";
            echo "<td>".$row["location"]."</td>";
            echo "<td>".$row["openings"]."</td>";
            echo "<td>".$row["job_type"]."</td>";
            echo "<td style='max-width: 300px;'>";
            echo "<div class='description-container' style='height: 100px; overflow: auto;'>";
            $description = $row["description"];
            echo $description;
            echo "</div>";
            echo "</td>";
            echo "<td>".$row["tab_name"]."</td>";
            echo "<td>
                    <a href='job_edit.php?id=".$row["id"]."' class='btn btn-sm btn-primary'>Edit</a>
                    <form action='job_delete.php' method='post' style='display: inline;'>
                        <input type='hidden' name='id' value='".$row["id"]."'>
                        <button type='submit' class='btn btn-sm btn-danger' onclick='return confirm(\"Are you sure you want to delete this job listing?\")'>Delete</button>
                    </form>
                </td>";
            echo "</tr>";

            // Increment the serial number for the next row
            $serial++;
        }
        echo "</tbody>";
        echo "</table>";

        // Add pagination links
        $sql_count = "SELECT COUNT(*) AS total FROM job_listings";
        $result_count = $conn->query($sql_count);
        $row_count = $result_count->fetch_assoc();
        $total_records = $row_count['total'];
        $total_pages = ceil($total_records / $records_per_page);

        // Display pagination links
        echo "<ul class='pagination'>";
        // Display "Home" and "Previous" links
        if ($current_page > 1) {
            echo "<li class='page-item'><a class='page-link' href='?page=1'>Home</a></li>";
            $prev_page = $current_page - 1;
            echo "<li class='page-item'><a class='page-link' href='?page=".$prev_page."'>Previous</a></li>";
        }
        // Display page numbers
        for ($i = max(1, $current_page - 2); $i <= min($current_page + 2, $total_pages); $i++) {
            echo "<li class='page-item'><a class='page-link' href='?page=".$i."'>".$i."</a></li>";
        }
        // Display "Next" and "Last" links
        if ($current_page < $total_pages) {
            $next_page = $current_page + 1;
            echo "<li class='page-item'><a class='page-link' href='?page=".$next_page."'>Next</a></li>";
            echo "<li class='page-item'><a class='page-link' href='?page=".$total_pages."'>Last</a></li>";
        }
        echo "</ul>";

    } else {
        echo "No job listings found";
    }
}

// Close connection
$conn->close();
?>
