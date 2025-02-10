<?php
// Move session_start() to the very beginning of the script
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';
//include('include/header.php');

// Now continue with the rest of your script...
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Management System</title>
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="dist/css/lightbox.min.css">
    <script type="text/javascript" src="dist/js/lightbox-plus-jquery.min.js"></script>
    <script type="text/javascript" src="js/gallery.js"></script>
    <link type="text/css" rel="stylesheet" href="css/style.css" />
	<style type="text/css">
    /* Custom CSS for pagination */
    .pagination {
        margin-top: 20px; /* Add top margin for spacing */
    }

    .pagination a {
        display: inline-block;
        padding: 5px 10px; /* Add padding to each pagination link */
        margin-right: 5px; /* Add right margin for spacing between links */
        border: 1px solid #ccc; /* Add border for styling */
        border-radius: 5px; /* Add border-radius for rounded corners */
        text-decoration: none; /* Remove default underline */
        color: #333; /* Default text color */
    }

    .pagination a.active,
    .pagination a:hover {
        background-color: #007bff; /* Change background color for active and hover states */
        color: #fff; /* Change text color for active and hover states */
    }
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
	<?php include('include/container.php'); ?>
    <div class="container mt-5">
	 <?php include("top_menu.php"); ?>
        <!-- Form for inserting a new record -->
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="mt-5 mb-4">Add New Job Listing</h2>
                <!-- Form for adding job listing -->
               <?php include 'job_applications_view.php'; ?>

            </div>
			
        </div>
		
    </div>
	<!-- Column for view section --> 


    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	
	
</body>
</html>
