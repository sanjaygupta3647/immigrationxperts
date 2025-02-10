<?php
// Include the Database class file
require_once 'config/Database.php';

// Create an instance of the Database class
$database = new Database();

// Get the database connection
$conn = $database->getConnection();

// Retrieve data from the form
$category = $_POST['category'];
$title = $_POST['title'];

// Handle file upload
$image_name = $_FILES['image']['name'];
$image_temp = $_FILES['image']['tmp_name'];
$image_path = 'uploads/gall/' . $image_name;

// Check if the destination directory exists, if not, create it
if (!is_dir('uploads/gall/')) {
    mkdir('uploads/gall/', 0755, true);
}

// Move uploaded file to the desired location
if (move_uploaded_file($image_temp, $image_path)) {
    // Prepare and execute SQL query to insert data into the portfolio_items table
    $sql = "INSERT INTO portfolio_items (category, image, title) VALUES ('$category', '$image_name', '$title')";
    if ($conn->query($sql) === TRUE) {
        // Close connection
        $conn->close();
        // Redirect back to the same page with a success message
        echo '<script>alert("New record created successfully"); window.location.href = "abt_gall_ad_index.php";</script>';
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error uploading file";
}

// Close connection
$conn->close();
?>
