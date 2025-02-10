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
	<link rel="stylesheet" href="image-gallery/dist/css/lightbox.min.css">
    <script type="text/javascript" src="image-gallery/dist/js/lightbox-plus-jquery.min.js"></script>
    <script type="text/javascript" src="image-gallery/js/gallery.js"></script>
    <link type="text/css" rel="stylesheet" href="image-gallery/css/style.css" />
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
               <form action="job_insert.php" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="job_title">Job Title:</label>
								<input type="text" class="form-control" id="job_title" name="job_title" required>
							</div>
							<div class="form-group">
								<label for="location">Location:</label>
								<input type="text" class="form-control" id="location" name="location" required>
							</div>
							<div class="form-group">
								<label for="openings">Openings:</label>
								<input type="number" class="form-control" id="openings" name="openings" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="job_type">Job Type:</label>
								<select class="form-control" id="job_type" name="job_type" required>
									<option value="">Select Job Type</option>
									<option value="Full Time">Full Time</option>
									<option value="Part Time">Part Time</option>
									<option value="Contract">Contract</option>
									<option value="Freelance">Freelance</option>
									<!-- Add more options as needed -->
								</select>
							</div>

							<!-- Hidden textarea to hold CKEditor content -->
							<textarea style="display:none" id="description" name="description"></textarea>
							<div class="form-group">
							    
							    <label for="description">Job Description:</label>
								<!-- CKEditor will replace this textarea -->
								<div id="editor" name="editor"></div>
							</div>
							<div class="form-group">
								<label for="tab_id">Tab Name:</label>
								<select class="form-control" id="tab_id" name="tab_id">
									<option value="">Select Tab</option>
									<!-- Options will be dynamically loaded using AJAX -->
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="hidden" id="editJobId" name="edit_job_id">
							<button type="submit" name="add_job" class="btn btn-primary">Add Job Listing</button>
						</div>
					</div>
				</form>

            </div>
			<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="mt-5 mb-4">Job Listings</h2>
                <!-- View Job Listings section -->
                <?php include 'job_view.php'; ?>
            </div>
        </div>
    </div>
        </div>
		
    </div>
	<!-- Column for view section --> 


    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	
	<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

    <script>
        // Function to fetch tab names using AJAX
        function fetchTabNames() {
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    let tabsData = JSON.parse(this.responseText);
                    let tabDropdown = document.getElementById('tab_id');
                    tabDropdown.innerHTML = '<option value="">Select Tab</option>'; // Clear existing options
                    tabsData.forEach(tab => {
                        tabDropdown.innerHTML += `<option value="${tab.tab_id}">${tab.tab_name}</option>`;
                    });
                }
            };
            xhr.open("GET", "job_tab_fetch.php", true);
            xhr.send();
        }

        // Initialize CKEditor
        ClassicEditor
            .create(document.querySelector('#editor'), {
                link: {
                    defaultProtocol: 'http://',
                    decorators: {
                        addTargetToExternalLinks: {
                            mode: 'automatic',
                            callback: url => url.startsWith('http'),
                            attributes: {
                                target: '_blank',
                                rel: 'noopener noreferrer'
                            }
                        }
                    }
                }
            })
            .then(editor => {
                console.log('Editor was initialized', editor);
                editor.model.document.on('change', () => {
                    document.getElementById('description').value = editor.getData();
                });
            })
            .catch(error => {
                console.error('Error initializing editor:', error);
            });

        // Function to set form values for editing
        function editJob(jobId, jobTitle, location, openings, jobType, description, tabId) {
            document.getElementById('job_title').value = jobTitle;
            // Set other form fields here
            document.getElementById('editJobId').value = jobId;
            // Populate CKEditor with the description
            ClassicEditor.instances['editor'].setData(description);
        }

        // Call fetchTabNames when the page loads
        fetchTabNames();

    </script>
	
	 <script>
        // Function to set form values for editing
        function editJob(jobId, jobTitle, location, openings, jobType, description, tabId) {
            document.getElementById('job_title').value = jobTitle;
            document.getElementById('location').value = location;
            document.getElementById('openings').value = openings;
            document.getElementById('job_type').value = jobType;
            document.getElementById('description').value = description;
            document.getElementById('tab_id').value = tabId;

            // Set the job_id for editing
            document.getElementById('editJobId').value = jobId;

            // Change form action for editing
            document.getElementById('jobForm').action = 'job_edit.php';
            document.getElementById('jobForm').submit(); // Automatically submit the form for editing
        }

        // Function to confirm and delete a job listing
        function confirmDelete(jobId) {
            if (confirm("Are you sure you want to delete this job listing?")) {
                // Set the job_id for deletion
                document.getElementById('deleteJobId').value = jobId;
                // Submit the delete form
                document.getElementById('deleteForm').submit();
            }
        }		
	
    </script>
	
</body>
</html>
