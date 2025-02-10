<?php
include_once '../image-gallery/config/Database.php';

// Instantiate the Database class and get the MySQLi connection
$database = new Database();
$conn = $database->getConnection();

// Get the search input from the POST request
$searchType = $_POST['searchType'] ?? '';
parse_str($_POST['formData'], $formArray);
$searchTerm = $formArray['search'] ?? '';
$nocCode = $formArray['nocCode'] ?? '';

// Initialize the search results variable
$searchResults = '';

if ($searchType === 'noccode' && !empty($nocCode)) {
    // Query for NOC Code search
    $sql = "SELECT j.`id`, j.`noc_code`, j.`job_title`, j.`broad_occupation_category`, j.`teer`, j.`major_group`, j.`sub_major_group`, j.`minor_group`, j.`demand_info`, j.`salary_prospects`, j.`example_titles`, j.`main_duties`, j.`employment_requirements`, j.`job_openings`, j.`code_version`, nv.`version` 
            FROM jobs j
            JOIN noc_versions nv ON j.code_version = nv.id
            WHERE j.noc_code = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $nocCode);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $searchResults .= "<div class='result-card process-step-content'>
                 <h3>Job Title: " . htmlspecialchars($row["noc_code"]) . " - " . htmlspecialchars($row["job_title"]) . "</h3>
                <p><strong>Occupation Category:</strong> " . htmlspecialchars($row["broad_occupation_category"]) . "</p>
                <p><strong>TEER:</strong> " . htmlspecialchars($row["teer"]) . "</p>
                <p><strong>Major Group:</strong> " . htmlspecialchars($row["major_group"]) . "</p>
                <p><strong>Sub-Major Group:</strong> " . htmlspecialchars($row["sub_major_group"]) . "</p>
                <p><strong>Minor Group:</strong> " . ($row["minor_group"]) . "</p>
                <p><strong>Job Demand:</strong> " . ($row["demand_info"]) . "</p>
                <p><strong>Example Titles:</strong> " . ($row["example_titles"]) . "</p>
                <p><strong>Main Duties:</strong> " . $row["main_duties"] . "</p>
                <p><strong>Employment Requirements:</strong> " . ($row["employment_requirements"]) . "</p>
                <p><strong>Salary Prospects:</strong> " . ($row["salary_prospects"]) . "</p>
                <p><strong>Job Openings:</strong> " . ($row["job_openings"]) . "</p>
                <p><strong>Version:</strong> " . htmlspecialchars($row["version"]) . "</p>				
            </div>";
        }
    } else {
        $searchResults = '<div class="alert alert-info">No results found.</div>';
    }
} elseif ($searchType === 'jobtitle' && !empty($searchTerm)) {
    // Prepare conditions for SQL query
    $conditions = [
        "job_title LIKE ?",
        "example_titles LIKE ?"
    ];
    
    $params = [
        '%' . $searchTerm . '%',
        '%' . $searchTerm . '%'
    ];
    
    $types = 'ss'; // two string parameters
    
    // Construct SQL query with OR conditions
    $sql = "SELECT `id`, `noc_code`, `job_title`, `broad_occupation_category`, `teer`, `major_group`, `sub_major_group`, `minor_group`, `demand_info`, `salary_prospects`, `example_titles`, `main_duties`, `employment_requirements`, `job_openings`, `code_version` 
            FROM `jobs` 
            WHERE " . implode(' OR ', $conditions);
    
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param($types, ...$params);
        $stmt->execute();
        $result = $stmt->get_result();
        $totalResults = $result->num_rows;
        
        if ($result->num_rows > 0) {
            $searchResults .= "<div class='alert alert-info'>Total Results: " . $totalResults . "</div>";
            while ($row = $result->fetch_assoc()) {
                $searchResults .= "<div class='result-card'>
                    <h3><a href='#' class='job-title-link' data-noc-code='" . htmlspecialchars($row["noc_code"]) . "'>" . htmlspecialchars($row["noc_code"]) . " - " . htmlspecialchars($row["job_title"]) . "</a></h3>
                </div>";
            }
        } else {
            $searchResults = '<div class="alert alert-info">No results found.</div>';
        }
    } else {
        $searchResults = '<div class="alert alert-danger">Error preparing the SQL statement: ' . $conn->error . '</div>';
    }
} else {
    $searchResults = '<div class="alert alert-warning">Search term is required.</div>';
}

// Output search results
echo $searchResults;

// Close the database connection
$conn->close();
?>
