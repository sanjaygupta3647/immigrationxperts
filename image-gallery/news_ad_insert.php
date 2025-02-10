<?php
// Include the Database class file
require_once 'config/Database.php';

// Create an instance of the Database class
$database = new Database();

// Get the database connection
$conn = $database->getConnection();

// Retrieve data from the form submission
$title = $_POST['title'];
$link = $_POST['link'];

// Handle file uploads
$image = $_FILES['image']['name'];
$image_temp = $_FILES['image']['tmp_name'];

$logo = $_FILES['logo']['name'];
$logo_temp = $_FILES['logo']['tmp_name'];

// Move uploaded files to a permanent location
$image_path = 'uploads/news/' . $image;
$logo_path = 'uploads/news/' . $logo;

move_uploaded_file($image_temp, $image_path);
move_uploaded_file($logo_temp, $logo_path);

// SQL query to insert news data into the database
$sql = "INSERT INTO news (image, logo, title, link) VALUES ('$image_path', '$logo_path', '$title', '$link')";

// Execute the SQL query
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("New record created successfully"); window.location.href = "news_ad_index.php";</script>';
        exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
