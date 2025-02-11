<?php

// Start output buffering to prevent header issues

ob_start();

session_start();



// Include necessary files

include_once 'config/Database.php';

include('include/header.php');



// Check if the user is not logged in

if (!isset($_SESSION['userid'])) {

    // Redirect to the login page

    header("Location: index.php");

    exit();

}



// Initialize items per page and current page

$itemsPerPage = 10;

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;



// Calculate offset for pagination

$offset = ($page - 1) * $itemsPerPage;

?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gallery System</title>

    <link rel="stylesheet" href="dist/css/lightbox.min.css">

    <script type="text/javascript" src="dist/js/lightbox-plus-jquery.min.js"></script>

    <script type="text/javascript" src="js/gallery.js"></script>

    <link type="text/css" rel="stylesheet" href="css/style.css" />

    

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

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

</head>

<body>



<?php include('include/container.php'); ?>



<div class="container">

    <div class="row">

        <?php include("top_menu.php"); ?>



        <h2>Positive Skills Assessment</h2>



        <div>

            <a href="upload.php" class="btn btn-primary"><strong>Upload Images</strong></a> 

            <a href="occupation.php" class="btn btn-primary"><strong>Add Occupation</strong></a>

        </div>



        <!-- Total Gallery Item Count -->

        <?php

        // Create database connection

        $database = new Database();

        $db = $database->getConnection();



        // Count total number of rows in the table for displaying total count

        $sql_total = "SELECT COUNT(*) AS total FROM user_gallery";

        $result_total = $db->query($sql_total);

        $totalRows = $result_total->fetch_assoc()['total'];



        echo "<p>Total Gallery Items: $totalRows</p>";

        ?>



        <!-- Gallery Table -->

        <table id="example" class="table table-striped gallery-table">

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Image</th>

                    <th>Name</th>

                    <th>Details</th>

                    <th>Category</th>

                    <th>Occupation</th>
					
                    <th>Approval</th>

                    <th width="15%">Action</th>

                </tr>

            </thead>

            <tbody>

                <?php

                // Fetch gallery data from the database with occupation details

                $sql = "SELECT ug.id, ug.user_id, ug.name, ug.details, ug.image, ug.category, ug.approval_date,

                               o.occupation_name, o.ANZSCO 
                        FROM user_gallery ug 
                        INNER JOIN occupations o ON ug.occupation = o.id 
                        ORDER BY ug.approval_date DESC";



                $result = $db->query($sql);



                if ($result->num_rows > 0) {

                    $serial_number = 1; // Initialize serial number

                    while ($row = $result->fetch_assoc()) {

                        echo "<tr>";

                        echo "<td>{$serial_number}</td>"; // Display serial number

                        echo "<td><img src='uploads/{$row['image']}' class='img-thumbnail' width='100' height='100'></td>";

                        echo "<td>{$row['name']}</td>";

                        echo "<td>{$row['details']}</td>";

                        echo "<td>{$row['category']}</td>";

                        echo "<td>{$row['ANZSCO']} - {$row['occupation_name']}</td>";
						$d = date('Y-m-d h:i:A', strtotime($row['approval_date']));
                        echo "<td>$d</td>";

                          


                        echo "<td>
                        <a href='upload.php?id={$row['id']}' class='btn btn-warning'>Edit</a> &nbsp;
                        <a href='delete_image.php?id={$row['id']}' class='btn btn-danger'>Delete</a></td>";

                        echo "</tr>";

                        $serial_number++; // Increment serial number for next iteration

                    }

                } else {

                    echo "<tr><td colspan='7'>No images found</td></tr>";

                }

                ?>

            </tbody>

        </table>

    </div>

</div>



<!-- Include DataTables JS -->

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>

$(document).ready(function() {

    // Initialize DataTable

    $('#example').DataTable({

        // Customize DataTables as needed

        paging: true,          // Enable pagination

        searching: true,       // Enable search

        info: true,            // Show table info

        ordering: true         // Enable column sorting

    });

});

</script>



</body>

</html>

