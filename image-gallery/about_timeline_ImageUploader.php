<?php
class ImageUploader {
    private $targetDir;

    public function __construct($targetDir) {
        $this->targetDir = rtrim($targetDir, '/') . '/';
    }

    public function upload($file) {
        $targetFile = $this->targetDir . basename($file["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if file is an image
        $check = getimagesize($file["tmp_name"]);
        if ($check === false) {
            throw new Exception("File is not an image.");
        }

        // Allow certain file formats
        $allowedTypes = ["jpg", "jpeg", "png", "gif"];
        if (!in_array($imageFileType, $allowedTypes)) {
            throw new Exception("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        }

        // Check if file already exists
        if (file_exists($targetFile)) {
            throw new Exception("Sorry, file already exists.");
        }

        // Check file size (5MB limit)
        if ($file["size"] > 5000000) {
            throw new Exception("Sorry, your file is too large.");
        }

        // Attempt to move the uploaded file
        if (!move_uploaded_file($file["tmp_name"], $targetFile)) {
            throw new Exception("Sorry, there was an error uploading your file.");
        }

        return basename($file["name"]);
    }
}
?>
