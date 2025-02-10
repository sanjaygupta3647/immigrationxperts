<?php
// Include the database connection code
include_once 'config/Database.php';

// Create a new Database instance
$database = new Database();
// Get the database connection
$conn = $database->getConnection();

// Check if the connection is successful
if (!$conn) {
    // Handle the connection error
    echo json_encode(array('error' => 'Failed to connect to the database.'));
    exit; // Terminate the script
}

// Modify the SQL query to fetch data in ascending order by occupation_name
$sql_select = "SELECT * FROM occupations ORDER BY occupation_name ASC";
$result_select = $conn->query($sql_select);

// Check if the query was successful
if ($result_select) {
    $occupations = array();

    // Fetch occupations and store them in an array
    while ($row = $result_select->fetch_assoc()) {
        $occupations[] = array(
            'id' => $row['id'], // Assuming 'id' is the primary key of the occupations table
            'occupation_name' => $row['occupation_name'],
            'ANZSCO' => $row['ANZSCO']
        );
    }

    // Return occupations as JSON
    echo json_encode($occupations);
} else {
    // Handle the error
    echo json_encode(array('error' => 'Unable to fetch occupations.'));
}

// Close the database connection
$conn->close();
?>
