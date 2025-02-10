<?php
// Include the database configuration file
include_once 'image-gallery/config/Database.php';

// Create a new instance of the Database class
$database = new Database();

// Get the MySQLi connection
$conn = $database->getConnection();

try {
    // Fetch NOC versions
    $query = 'SELECT id, version FROM noc_versions';
    $result = $conn->query($query);

    // Check if the query was successful
    if ($result) {
        $versions = $result->fetch_all(MYSQLI_ASSOC);

        // Output as JSON
        echo json_encode($versions);
    } else {
        // Handle query error
        echo json_encode(['error' => $conn->error]);
    }
} catch (Exception $e) {
    // Handle the error
    echo json_encode(['error' => $e->getMessage()]);
}
?>
