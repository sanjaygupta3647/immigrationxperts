<?php
include_once '../image-gallery/config/Database.php';

// Initialize the Database class and get a connection
$database = new Database();
$conn = $database->getConnection();

$versionId = isset($_GET['versionId']) ? (int)$_GET['versionId'] : 0;

// Prepare and execute the query to fetch NOC codes for the selected version
$stmt = $conn->prepare('SELECT noc_code, job_title FROM jobs WHERE code_version = ?');
$stmt->bind_param('i', $versionId);
$stmt->execute();
$result = $stmt->get_result();
$nocCodes = $result->fetch_all(MYSQLI_ASSOC);

// Output the result as JSON
echo json_encode($nocCodes);

// Close the statement and connection
$stmt->close();
$conn->close();
?>
