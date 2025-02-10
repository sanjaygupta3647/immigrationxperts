<?php
// Include the database connection
$database = new Database();
// Get a database connection
$conn = $database->getConnection();

// Define how many records you want to display per page
$records_per_page = 10;

// Check if page number is specified, otherwise default to page 1
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the offset for the query based on current page number
$offset = ($current_page - 1) * $records_per_page;

// Fetch job applications data with pagination
$sql = "SELECT *, DATE(created_at) AS submission_date FROM job_applications ORDER BY created_at DESC LIMIT $offset, $records_per_page";
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    echo "Error executing the query: " . $conn->error;
} else {
    // Display job applications data in a table
    if ($result->num_rows > 0) {
        // Output the table structure with Bootstrap classes for styling
        echo "<div class='table-responsive'>";
        echo "<table class='table table-bordered table-striped'>";
        echo "<thead><tr><th>S.No.</th><th>Name</th><th>Email</th><th>Phone</th><th>Location</th><th>Job Title</th><th>Submission Date</th><th>Resume</th></tr></thead>";
        echo "<tbody>";

        // Variable to keep track of serial number
        $serial = $offset + 1;

        // Loop through the fetched rows
        while ($row = $result->fetch_assoc()) {
            // Output each row as a table row
            echo "<tr>";
            echo "<td>".$serial."</td>"; // Display serial number
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "<td>" . $row["location"] . "</td>";
            echo "<td>" . $row["job_title"] . "</td>";
            echo "<td>" . $row["submission_date"] . "</td>"; // Display submission date (date only)
            // Display resume download link
            echo "<td><a href='../" . $row["resume_path"] . "' download>Download Resume</a></td>";
            echo "</tr>";

            // Increment the serial number for the next row
            $serial++;
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";

        // Add pagination links (Bootstrap)
        echo "<ul class='pagination justify-content-center'>";
        // Pagination code here...
        echo "</ul>";
    } else {
        echo "No job applications found";
    }
}

// Close the database connection
$conn->close();
?>
