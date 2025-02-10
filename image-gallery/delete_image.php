<?php
if (isset($_GET['id'])) {
    // Include database configuration and connect
    include_once 'config/Database.php';
    $database = new Database();
    $db = $database->getConnection();

    // Get image ID from the URL parameter
    $imageId = $_GET['id'];

    // Fetch image details
    $sql = "SELECT image FROM user_gallery WHERE id = $imageId";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imageName = $row['image'];

        // Delete image from the database
        $deleteSql = "DELETE FROM user_gallery WHERE id = $imageId";
        $db->query($deleteSql);

        // Delete image file from the server
        $imagePath = 'uploads/' . $imageName;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        header("Location: index.php");
        exit();
    }
}
?>
