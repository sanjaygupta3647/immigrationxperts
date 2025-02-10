<?php
// Start the session
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';

// Initialize variables
$anzsco_code = "";

// Check if anzsco_code is provided
if (isset($_GET['anzsco_code'])) {
    $anzsco_code = $_GET['anzsco_code'];

    // Initialize database connection
    $database = new Database();
    $conn = $database->getConnection();

    // Prepare and execute the SQL statement with JOIN
    $stmt = $conn->prepare("
        SELECT d.*, o.name 
        FROM anzsco_occupations_details d
        JOIN anzsco_occupations o ON d.anzsco_code = o.anzsco_code
        WHERE d.anzsco_code = ?
    ");
    $stmt->bind_param("s", $anzsco_code);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch the details if available
    if ($result->num_rows > 0) {
        $details = $result->fetch_assoc();
    } else {
        echo "Details not found.";
        exit();
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "No ANZSCO code provided.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANZSCO Occupation Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
        .details-table {
            margin-top: 20px;
        }
        .details-table td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php include('include/container.php'); ?>
    <div class="container mt-5">
        <?php include("top_menu.php"); ?>

        <h2>ANZSCO Occupation Details</h2>

        <table class="table table-bordered details-table table-striped">
            <tbody>
                <tr>
                    <th>ANZSCO Code</th>
                    <td><?php echo htmlspecialchars($details['anzsco_code']); ?></td>
                </tr>
                <tr>
                    <th>Occupation Name</th>
                    <td><?php echo htmlspecialchars($details['name']); ?></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><?php echo nl2br(($details['description'])); ?></td>
                </tr>              
                <tr>
                    <th>Skills Assessment Requirements</th>
                    <td><?php echo nl2br(($details['skills_assessment_requirements'])); ?></td>
                </tr> 
				<tr>
                    <th>Group Title</th>
                    <td><?php echo nl2br(($details['group_title'])); ?></td>
                </tr>
                <tr>
                    <th>Group Description</th>
                    <td><?php echo nl2br(($details['group_description'])); ?></td>
                </tr>
               
            </tbody>
        </table>

        <a href="anzsco_occupations_index.php" class="btn btn-default">Back to List</a>
    </div>
</body>
</html>
