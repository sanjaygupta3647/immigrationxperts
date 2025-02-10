<?php
// Retrieve form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$location = $_POST['location'] ?? '';
$jobTitle = $_POST['job_title'] ?? '';

// Handle file upload
$targetDir = "/image-gallery/resume/"; // Directory where uploaded files will be stored
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($_FILES["resume"]["name"], PATHINFO_EXTENSION));

// Generate a unique file name
$uniqueFileName = uniqid() . '_' . preg_replace("/\s+/", "_", basename($_FILES["resume"]["name"])); // Replace white spaces with underscore
$targetFile = $targetDir . $uniqueFileName;

// Check file size (max size 500KB)
$maxFileSize = 500000; // 500KB in bytes
if ($_FILES["resume"]["size"] > $maxFileSize) {
    $response = array('status' => 'error', 'message' => 'Sorry, your file is too large. Maximum file size allowed is 500KB.');
    echo json_encode($response);
    exit;
}

// Allow only certain file formats
$allowedFormats = array("pdf", "doc", "docx");
if (!in_array($imageFileType, $allowedFormats)) {
    $response = array('status' => 'error', 'message' => 'Sorry, only PDF, DOC, and DOCX files are allowed.');
    echo json_encode($response);
    exit;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $response = array('status' => 'error', 'message' => 'Sorry, your file was not uploaded.');
    echo json_encode($response);
    exit;
}

// Attempt to move the uploaded file
if (move_uploaded_file($_FILES["resume"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . $targetFile)) {
    // Database connection
    $servername = "localhost";
    $username = "immigrationxpert_immi";
    $password = "HB1]KU17O;Jg";
    $dbname = "immigrationxpert_newimmi";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        $response = array('status' => 'error', 'message' => 'Connection failed: ' . $conn->connect_error);
        echo json_encode($response);
        exit;
    }

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO job_applications (name, email, phone, location, job_title, resume_path) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $phone, $location, $jobTitle, $targetFile);

    // Execute the prepared statement
    if ($stmt->execute()) {
        $response = array('status' => 'success', 'message' => 'Application submitted successfully.');
        echo json_encode($response);
    } else {
        $response = array('status' => 'error', 'message' => 'Error inserting data: ' . $stmt->error);
        echo json_encode($response);
    }

    // Close database connection
    $stmt->close();
    $conn->close();
} else {
    $response = array('status' => 'error', 'message' => 'Sorry, there was an error uploading your file.');
    echo json_encode($response);
}
?>
