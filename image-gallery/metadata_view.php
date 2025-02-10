<?php
// Include the Database class file
require_once 'config/Database.php';

// Create an instance of the Database class
$database = new Database();
$mysqli = $database->getConnection();

// Define number of items per page
$itemsPerPage = 10;

// Retrieve page number from query string, default to 1 if not set
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// Retrieve search query from query string, if set
$searchQuery = isset($_GET['search']) ? $mysqli->real_escape_string($_GET['search']) : '';

// Calculate offset for pagination
$offset = ($page - 1) * $itemsPerPage;

// Fetch metadata records from the database with pagination and optional search filter
$sql = "SELECT `id`, `url`, `title`, `description`, `keyword`
        FROM `page_metadata` 
        WHERE `title` LIKE '%$searchQuery%' 
        OR `description` LIKE '%$searchQuery%' 
        OR `url` LIKE '%$searchQuery%' 
        OR `keyword` LIKE '%$searchQuery%'
        ORDER BY `id` DESC 
        LIMIT $offset, $itemsPerPage";
$result = $mysqli->query($sql);
?>

<!-- Search Form -->
<form class="form-inline mb-3" method="GET" action="">
    <input type="text" name="search" class="form-control mr-2" placeholder="Search" value="<?php echo htmlspecialchars($searchQuery); ?>">
    <button type="submit" class="btn btn-primary">Search</button>
</form>

<?php
// Check if there are any metadata records
if ($result->num_rows > 0) {
    // Output table markup
    echo "<table class='table'>";
    echo "<thead><tr><th>Serial No</th><th>URL</th><th>Title</th><th>Description</th><th>Keywords</th><th>Action</th></tr></thead>";
    echo "<tbody>";

    // Initialize serial number
    $serialNo = $offset + 1;

    // Loop through each metadata record
    while ($row = $result->fetch_assoc()) {
        // Handle description
        $description = explode(' ', htmlspecialchars($row["description"] ?? ''));
        $truncatedDescription = implode(' ', array_slice($description, 0, 15));
        $isTruncated = count($description) > 15;
    
        // Handle keywords
        $keywords = explode(' ', htmlspecialchars($row["keyword"] ?? ''));
        $truncatedKeywords = implode(' ', array_slice($keywords, 0, 10));
        $isKeywordsTruncated = count($keywords) > 10;
    
        // Output table rows with data
        echo "<tr>";
        echo "<td>" . $serialNo . "</td>";
        echo "<td><a href='https://www.immigrationxperts.com" . htmlspecialchars($row["url"] ?? '') . "' target='_blank'>" . htmlspecialchars($row["url"] ?? '') . "</a></td>";
        echo "<td>" . htmlspecialchars($row["title"] ?? '') . "</td>";
        echo "<td class='description-cell'>";
        echo "<span class='truncated-text'>" . $truncatedDescription . "</span>";
        if ($isTruncated) {
            echo "... <a href='#' class='toggle-text read-more' data-full-text='" . htmlspecialchars($row["description"] ?? '') . "' data-truncated-text='" . $truncatedDescription . "'>Read More</a>";
        }
        echo "</td>";
        echo "<td class='keywords-cell'>";
        echo "<span class='truncated-keywords'>" . $truncatedKeywords . "</span>";
        if ($isKeywordsTruncated) {
            echo "... <a href='#' class='toggle-keywords read-more' data-full-text='" . htmlspecialchars($row["keyword"] ?? '') . "' data-truncated-text='" . $truncatedKeywords . "'>Read More</a>";
        }
        echo "</td>";
        // Add edit and delete buttons
        echo "<td>
                <a href='metadata_index.php?id=" . $row["id"] . "' class='btn btn-warning'>Edit</a>
                <form id='deleteForm' action='metadata_delete.php' method='POST' style='display:inline;'>
                    <input type='hidden' name='metadata_id' value='" . $row["id"] . "'>
                    <button type='submit' class='btn btn-danger' onclick='return confirmDelete()'>Delete</button>
                </form>
              </td>";
        echo "</tr>";
        // Increment serial number
        $serialNo++;
    }


    // End table markup
    echo "</tbody></table>";
} else {
    // Display message if no metadata records found
    echo "<p>No metadata records found.</p>";
}

// Count total number of rows in the table for pagination
$sql_total = "SELECT COUNT(*) AS total 
              FROM `page_metadata` 
              WHERE `title` LIKE '%$searchQuery%' 
              OR `description` LIKE '%$searchQuery%' 
              OR `url` LIKE '%$searchQuery%' 
              OR `keyword` LIKE '%$searchQuery%'";
$result_total = $mysqli->query($sql_total);
$totalRows = $result_total->fetch_assoc()['total'];

// Calculate total number of pages
$totalPages = ceil($totalRows / $itemsPerPage);

// Display pagination links using Bootstrap classes
echo "<nav aria-label='Page navigation'>";
echo "<ul class='pagination justify-content-center'>";

// Display "Previous" link
if ($page > 1) {
    echo "<li class='page-item'><a class='page-link' href='?page=".($page - 1)."&search=".htmlspecialchars($searchQuery)."'>&laquo; Previous</a></li>";
}

// Display numbered page links
for ($i = 1; $i <= $totalPages; $i++) {
    echo "<li class='page-item ".($page == $i ? 'active' : '')."'><a class='page-link' href='?page=".$i."&search=".htmlspecialchars($searchQuery)."'>".$i."</a></li>";
}

// Display "Next" link
if ($page < $totalPages) {
    echo "<li class='page-item'><a class='page-link' href='?page=".($page + 1)."&search=".htmlspecialchars($searchQuery)."'>Next &raquo;</a></li>";
}

echo "</ul>";
echo "</nav>";

// Display total number of records
echo "<div class='text-center mt-3'>Total Records: " . $totalRows . "</div>";

// Close connection
$mysqli->close();
?>

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this metadata record?");
    }

    document.addEventListener('DOMContentLoaded', function () {
        var toggleTextLinks = document.querySelectorAll('.toggle-text, .toggle-keywords');
        toggleTextLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                var fullText = this.getAttribute('data-full-text');
                var truncatedText = this.getAttribute('data-truncated-text');
                if (this.classList.contains('read-more')) {
                    this.previousElementSibling.textContent = fullText;
                    this.textContent = "Read Less";
                    this.classList.remove('read-more');
                    this.classList.add('read-less');
                } else {
                    this.previousElementSibling.textContent = truncatedText;
                    this.textContent = "Read More";
                    this.classList.remove('read-less');
                    this.classList.add('read-more');
                }
            });
        });
    });
</script>

<style>
    .description-cell, .keywords-cell {
        max-width: 200px;
        word-wrap: break-word;
    }
    .toggle-text, .toggle-keywords {
        cursor: pointer;
        color: blue;
    }
    .toggle-text:hover, .toggle-keywords:hover {
        text-decoration: underline;
    }
</style>
