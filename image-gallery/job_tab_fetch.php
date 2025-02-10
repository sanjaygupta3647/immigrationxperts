<?php
	$servername = "localhost";
	$username = 'immigrationxpert_immi'; // Database username
	$password = "HB1]KU17O;Jg"; // Database password
	$dbname = "immigrationxpert_newimmi"; // Database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch tab names from the tabs table
$sql = "SELECT tab_id, tab_name FROM tabs";
$result = $conn->query($sql);

$tabsData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tabsData[] = $row;
    }
}

// Return tab names as JSON
header('Content-Type: application/json');
echo json_encode($tabsData);

$conn->close();
?>
