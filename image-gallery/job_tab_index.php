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
        <div class="row">
			<!-- Column for insertion form -->
			<div class="col-md-6">
				<div class="card mb-5">
					<div class="card-header">
						<h2 class="card-title">Add Job Section Tabs</h2>
					</div>
					<div class="card-body">
						<form id="insertForm" action="job_tab_insert.php" method="post">
							<div class="mb-3">
								<label class="form-label">Tab Name:</label>
								<input type="text" id="tab_name" name="tab_name" class="form-control" required>
							</div>
							<div class="mt-3">
								<button type="submit" class="btn btn-primary">Add Tab</button>
								<input type="hidden" id="edit_tab_id" name="edit_tab_id" value="">
							</div>
							
							
						</form>
					</div>
				</div>
			</div>
			<!-- Column for view section -->
			<div class="col-md-12">
				<div class="card mb-5">
					<div class="card-header">
						<h2 class="card-title">Existing Job Section Tabs</h2>
					</div>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Serial No.</th>
									<th>Tab Name</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php 
							
							$servername = "localhost";
							$username = 'immigrationxpert_immi'; // Database username
							$password = "HB1]KU17O;Jg"; // Database password
							$dbname = "immigrationxpert_newimmi"; // Database name

							$conn = new mysqli($servername, $username, $password, $dbname);

							// Check connection
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							}

							// Fetch tabs from database
							$sql = "SELECT tab_id, tab_name FROM tabs";
							$result = $conn->query($sql);

							$serialNo = 1; // Initialize serial number counter

							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
									echo "<tr>";
									echo "<td>" . $serialNo . "</td>"; // Serial number column
									echo "<td>" . $row["tab_name"] . "</td>";
									echo '<td>
											<button onclick="editTab(' . $row["tab_id"] . ', \'' . $row["tab_name"] . '\')" class="btn btn-sm btn-primary">Edit</button>
											<button onclick="deleteTab(' . $row["tab_id"] . ')" class="btn btn-sm btn-danger">Delete</button>
										  </td>';
									echo "</tr>";
									$serialNo++; // Increment serial number
								}
							} else {
								echo "<tr><td colspan='4'>No tabs found</td></tr>";
							}

							$conn->close();
							?>
							</tbody>
						</table>
					<script>
						// Function to set form values for editing
						function editTab(tabId, tabName) {
							document.getElementById('tab_name').value = tabName;
							document.getElementById('edit_tab_id').value = tabId;
							document.getElementById('insertForm').action = 'job_tab_edit.php'; // Set form action to edit_tab.php
							document.querySelector('button[type="submit"]').textContent = 'Update Tab'; // Change button text
						}

						// Function to confirm and delete a tab
						function deleteTab(tabId) {
							if (confirm('Are you sure you want to delete this tab?')) {
								// Proceed with form submission to delete_tab.php
								var form = document.createElement('form');
								form.method = 'post';
								form.action = 'job_tab_delete.php';
								var input = document.createElement('input');
								input.type = 'hidden';
								input.name = 'delete_tab_id';
								input.value = tabId;
								form.appendChild(input);
								document.body.appendChild(form);
								form.submit();
							}
						}
					</script>
				</div>
			</div>
		</div>


    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
