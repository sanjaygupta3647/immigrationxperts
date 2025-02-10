<?php
// Close the database connection
include('main/header.php');
			
// Function to insert testimonial
function insertTeamMember($name, $position, $description, $image, $facebookLink, $linkedinLink, $instagramLink) {
    global $conn;

    $submissionDate = date("Y-m-d H:i:s");

    $stmt = $conn->prepare("INSERT INTO team_members (name, position, description, image, facebook_link, linkedin_link, instagram_link, submission_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $position, $description, $image, $facebookLink, $linkedinLink, $instagramLink, $submissionDate);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Function to update testimonial
function updateTeamMember($teamMemberId, $name, $position, $description, $image, $facebookLink, $linkedinLink, $instagramLink) {
    global $conn;

    $stmt = $conn->prepare("UPDATE team_members SET name=?, position=?, description=?, image=?, facebook_link=?, linkedin_link=?, instagram_link=? WHERE id=?");
    $stmt->bind_param("sssssssi", $name, $position, $description, $image, $facebookLink, $linkedinLink, $instagramLink, $teamMemberId);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Function to delete testimonial
function deleteTeamMember($teamMemberId) {
    global $conn;

    $stmt = $conn->prepare("DELETE FROM testimonials WHERE id=?");
    $stmt->bind_param("i", $teamMemberId);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Function to fetch testimonial by ID
function getTeamMemberById($teamMemberId) {
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM testimonials WHERE id=?");
    $stmt->bind_param("i", $teamMemberId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}


// Check if 'edit' parameter is present in the URL
if (isset($_GET['edit'])) {
    $editTeamMemberId = $_GET['edit'];
    $editTeamMember = getTeamMemberById($editTeamMemberId);

    if ($editTeamMember) {
        // Populate form fields with existing data
        $editClientName = $editTeamMember['client_name'];
        $editClientLocation = $editTeamMember['client_location'];
        $editClientQuote = $editTeamMember['client_quote'];
        $editClientImage = $editTeamMember['client_image'];
        $editFacebookLink = $editTeamMember['facebook_link'];
        $editLinkedinLink = $editTeamMember['linkedin_link'];
    }
}

// Display the form (used for both add and edit)
echo "<h2>" . (isset($editTeamMember) ? "Edit" : "Add") . " TeamMember</h2>";
echo "<form action='{$_SERVER['PHP_SELF']}' method='post' enctype='multipart/form-data'>";
echo "<input type='hidden' name='action' value='" . (isset($editTeamMember) ? 'update' : 'insert') . "'>";
if (isset($editTeamMember)) {
    echo "<input type='hidden' name='teamMemberId' value='$editTeamMemberId'>";
}

// Function to display testimonials with pagination (ordered by ID in descending order)
function getTeamMembers($page, $pageSize) {
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM testimonials ORDER BY id DESC");
    $stmt->execute();
    $result = $stmt->get_result();

    $testimonials = array();

    while ($row = $result->fetch_assoc()) {
        $testimonials[] = $row;
    }

    return $testimonials;
}

// Function to count total testimonials
function getTotalTeamMembers() {
    global $conn;
    
    $result = $conn->query("SELECT COUNT(*) AS total FROM testimonials");
    $row = $result->fetch_assoc();
    return $row['total'];
}



// Function to search testimonials
function searchTeamMembers($searchTerm) {
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM testimonials WHERE client_name LIKE ? OR client_location LIKE ? OR client_quote LIKE ?");
    $searchTerm = "%$searchTerm%";
    $stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    $searchResults = array();

    while ($row = $result->fetch_assoc()) {
        $searchResults[] = $row;
    }

    return $searchResults;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    switch ($action) {
        case 'insert':
            $clientName = $_POST['clientName'];
            $clientLocation = $_POST['clientLocation'];
            $clientQuote = $_POST['clientQuote'];
            $userId = 1; // Default user_id for admin
            $clientImage = $_FILES['clientImage']['name'];
            $facebookLink = $_POST['facebookLink'];
            $linkedinLink = $_POST['linkedinLink'];

            // Check if the file is uploaded
				if ($_FILES['clientImage']['size'] > 0) {
					// Upload image
					$targetDir = "images/testimonial/";
					$targetFile = $targetDir . basename($_FILES['clientImage']['name']);
					move_uploaded_file($_FILES['clientImage']['tmp_name'], $targetFile);
					$clientImage = $_FILES['clientImage']['name'];
				} else {
					// Set a default image if no image is uploaded
					$clientImage = "image1.jpeg"; // Provide the path to your default image
				}

			
            // Insert testimonial
            insertTeamMember($clientName, $clientLocation, $clientQuote, $userId, $clientImage, $facebookLink, $linkedinLink);
            break;

        case 'update':
            $teamMemberId = $_POST['teamMemberId'];
            $clientName = $_POST['clientName'];
            $clientLocation = $_POST['clientLocation'];
            $clientQuote = $_POST['clientQuote'];
            $clientImage = $_FILES['clientImage']['name'];
            $facebookLink = $_POST['facebookLink'];
            $linkedinLink = $_POST['linkedinLink'];

            // Check if the file is uploaded
				if ($_FILES['clientImage']['size'] > 0) {
					// Upload image
					$targetDir = "images/testimonial/";
					$targetFile = $targetDir . basename($_FILES['clientImage']['name']);
					move_uploaded_file($_FILES['clientImage']['tmp_name'], $targetFile);
					$clientImage = $_FILES['clientImage']['name'];
				} else {
					// Set a default image if no image is uploaded
					$clientImage = "image1.jpeg"; // Provide the path to your default image
				}

            // Update testimonial
            updateTeamMember($teamMemberId, $clientName, $clientLocation, $clientQuote, $clientImage, $facebookLink, $linkedinLink);
            break;

        case 'delete':
            $teamMemberId = $_POST['teamMemberId'];

            // Delete testimonial
            deleteTeamMember($teamMemberId);
            break;

        case 'search':
            $searchTerm = isset($_POST['search']) ? $_POST['search'] : '';


            // Perform search
           $searchResults = searchTeamMembers($searchTerm);
            break;

            // Display search results
            echo "<h2>Search Results</h2>";
            foreach ($searchResults as $result) {
                echo "<p>{$result['client_name']} - {$result['client_location']} - {$result['client_quote']}</p>";
            }
            exit(); // Stop execution after displaying search results
            break;
    }
}

				
?>
	<body>
        <!-- LOADER -->
		<div id="loader">
			<img src="build/assets/images/media/loader.svg" alt="">
		</div>
		<!-- END LOADER -->

        <!-- PAGE -->
		<div class="page">
			<?php
			include('main/top_header.php');
			// Close the database connection
			include('main/leftbar.php');

			?>
			
            <!-- MAIN-CONTENT -->
			<div class="main-content app-content">

                
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">TeamMembers</h1>                      
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                       TeamMembers
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row gy-4">
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
										<input type='hidden' name='action' value='<?php echo isset($editTeamMember) ? 'update' : 'insert'; ?>'><div class="col-xl-12">
                                        
										  <div class='form-group mb-4'>
											<label for='clientName'>Client Name:</label>
											<input type='text' name='clientName' class='form-control' value='<?php echo isset($editClientName) ? $editClientName : ''; ?>' required>
										</div>

										<div class='form- mb-4'>
											<label for='clientLocation'>Client Location:</label>
											<input type='text' name='clientLocation' class='form-control' value='<?php echo isset($editClientLocation) ? $editClientLocation : ''; ?>' required>
										</div>

										<div class='form-group mb-4'>
											<label for='clientQuote'>Client Quote:</label>
											
											<textarea name="clientQuote" id="clientQuote"><?php echo isset($editClientQuote) ? $editClientQuote : ''; ?></textarea>

										</div>
										<div class='form-group mb-4'>
											<label for='clientImage'>Client Image:</label>
											<input type='file' name='clientImage' class='form-control-file' accept='image/*'>
											<?php
											if (isset($editClientImage)) {
												echo "<img src='images/testimonial/$editClientImage' alt='Current Image' class='img-thumbnail mt-2' style='max-width: 200px;'>";
											}
											?>
										</div>

										<div class='form-group mb-4'>
											<label for='facebookLink'>Facebook Link:</label>
											<input type='text' name='facebookLink' class='form-control' value='<?php echo isset($editFacebookLink) ? $editFacebookLink : ''; ?>'>
										</div>

										<div class='form-group mb-4'>
											<label for='linkedinLink'>LinkedIn Link:</label>
											<input type='text' name='linkedinLink' class='form-control' value='<?php echo isset($editLinkedinLink) ? $editLinkedinLink : ''; ?>'>
										</div>

										<button type='submit' class='btn btn-primary'><?php echo isset($editTeamMember) ? 'Update' : 'Submit'; ?> TeamMember</button>
										</form>
										
										
                                    </div>
                                </div>
                             </div>
                        </div>
						<div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Products Overview
                                    </div>
                                    <div class="d-sm-flex">
                                        <div class="me-3 mb-3 mb-sm-0">
											<!-- Search Form -->
											<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
												<div class="form-group">
													<label for="search">Search:</label>
													<input type="text" name="search" class="form-control" placeholder="Enter keywords">
												</div>
												<button type="submit" class="btn btn-primary">Search</button>
												<input type="hidden" name="action" value="search">
											</form>
                                        </div>                                      
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
									
										 <?php
									// Display testimonials or search results
									$displayResults = isset($searchResults) ? $searchResults : getTeamMembers(1, getTotalTeamMembers());


									if (!empty($displayResults)) {
										echo "<table  class='table text-wrap table-bordered'>";
										echo "<thead>";
										echo "<tr>";
										echo "<th>S. No.</th>";
										echo "<th>Client Name</th>";
										echo "<th>Client Location</th>";
										echo "<th>Client Quote</th>";
										echo "<th>Client Image</th>";
										echo "<th>facebook link</th>";
										echo "<th>linkedin link</th>";
										echo "<th>Actions</th>";
										echo "</tr>";
										echo "</thead>";
										echo "<tbody>";
										$serial = 1; // Initialize $serial outside the loop

										foreach ($displayResults as $result) {
											// Display each testimonial or search result
											echo "<tr>";
											echo "<td>" . $serial++ . "</td>"; // Serial number
											echo "<td>{$result['client_name']}</td>";
											echo "<td>{$result['client_location']}</td>";
											echo "<td width='120px'>{$result['client_quote']}</td>";
											echo "<td><img src='images/testimonial/{$result['client_image']}' alt='Client Image' style='max-width: 100px;'></td>";
											echo "<td>{$result['facebook_link']}</td>";
											echo "<td>{$result['linkedin_link']}</td>";
											echo "<td>";
											echo "<a href=\"{$_SERVER['PHP_SELF']}?edit={$result['id']}\" class=\"btn btn-warning\">Edit</a>";echo "<form action='{$_SERVER['PHP_SELF']}' method='post' class='d-inline'>";
											echo "<input type='hidden' name='action' value='delete'>";
											echo "<input type='hidden' name='teamMemberId' value='{$result['id']}'>";
											echo "<button type='submit' class='btn btn-danger'>Delete</button>";
											echo "</form>";
											echo "</td>";
											echo "</tr>";
										}

										echo "</tbody>";
										echo "</table>";
									} else {
										echo "<p>No results found.</p>";
									}
									?>
								    <!-- Display total count -->
								<div class="mb-3">
									<p>Total TeamMembers: <?php echo getTotalTeamMembers(); ?></p>

								</div>
									
									</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- End:: row-1 -->
					
					

                </div>
            </div>
			<!-- END MAIN-CONTENT -->
			</div>
			
			<?php
			// Close the database connection
			include('main/footer.php');

			?>
	