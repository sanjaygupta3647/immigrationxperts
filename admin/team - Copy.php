<?php
// Database connection and inclusion of necessary files
include('main/header.php');

// Function to insert a team member
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


// Function to update a team member
function updateTeamMember($teamMemberId, $name, $position, $description, $image, $facebookLink, $linkedinLink, $instagramLink) {
    global $conn;

    $stmt = $conn->prepare("UPDATE team_members SET name=?, position=?, description=?, image=?, facebook_link=?, linkedin_link=?, instagram_link=? WHERE id=?");
    $stmt->bind_param("sssssssi", $name, $position, $description, $image, $facebookLink, $linkedinLink, $instagramLink, $teamMemberId);

    return $stmt->execute();
}

// Function to delete a team member
function deleteTeamMember($teamMemberId) {
    global $conn;

    $stmt = $conn->prepare("DELETE FROM team_members WHERE id=?");
    $stmt->bind_param("i", $teamMemberId);

    return $stmt->execute();
}

// Function to fetch a team member by ID
function getTeamMemberById($teamMemberId) {
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM team_members WHERE id=?");
    $stmt->bind_param("i", $teamMemberId);
    $stmt->execute();
    $result = $stmt->get_result();

    return $result->fetch_assoc();
}


// Check if 'edit' parameter is present in the URL
if (isset($_GET['edit'])) {
    $editTeamMemberId = $_GET['edit'];
    $editTeamMember = getTeamMemberById($editTeamMemberId);

    if ($editTeamMember) {
        // Populate form fields with existing data
        $editMemberName = $editTeamMember['name'];
        $editMemberPosition = $editTeamMember['position'];
        $editMemberDescription = $editTeamMember['description'];
        $editMemberImage = $editTeamMember['image'];
        $editFacebookLink = $editTeamMember['facebook_link'];
        $editLinkedinLink = $editTeamMember['linkedin_link'];
        $editInstagramLink = $editTeamMember['instagram_link'];
    }
}

// Display the form for adding or editing team members
echo "<h2>" . (isset($editTeamMember) ? "Edit" : "Add") . " Team Members</h2>";
echo "<form action='{$_SERVER['PHP_SELF']}' method='post' enctype='multipart/form-data'>";
echo "<input type='hidden' name='action' value='" . (isset($editTeamMember) ? 'update' : 'insert') . "'>";
if (isset($editTeamMember)) {
    echo "<input type='hidden' name='teamMemberId' value='$editTeamMemberId'>";
}
// Function to display team members with pagination
function getTeamMembers($page, $pageSize) {
    global $conn;

    $offset = ($page - 1) * $pageSize;

    $stmt = $conn->prepare("SELECT * FROM team_members ORDER BY id DESC LIMIT ?, ?");
    $stmt->bind_param("ii", $offset, $pageSize);
    $stmt->execute();
    $result = $stmt->get_result();

    $teamMembers = array();

    while ($row = $result->fetch_assoc()) {
        $teamMembers[] = $row;
    }

    return $teamMembers;
}

// Function to count total team members
function getTotalTeamMembers() {
    global $conn;

    $result = $conn->query("SELECT COUNT(*) AS total FROM team_members");
    $row = $result->fetch_assoc();
    return $row['total'];
}

// Function to search team members
function searchTeamMembers($searchTerm) {
    global $conn;

    $searchTerm = "%$searchTerm%";

    $stmt = $conn->prepare("SELECT * FROM team_members WHERE client_name LIKE ? OR client_location LIKE ? OR client_quote LIKE ?");
    $stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    $searchResults = array();

    while ($row = $result->fetch_assoc()) {
        $searchResults[] = $row;
    }

    return $searchResults;
}

// Handling POST requests
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    switch ($action) {
        case 'insert':
            $name = $_POST['name'];
            $position = $_POST['position'];
            $description = $_POST['description'];
            $userId = 1; // Default user_id for admin
            $image = $_FILES['image']['name'];
            $facebookLink = $_POST['facebookLink'];
            $linkedinLink = $_POST['linkedinLink'];
            $instagramLink = $_POST['instagramLink'];

            // Check if the file is uploaded
            if ($_FILES['image']['size'] > 0) {
                // Upload image
                $targetDir = "images/team/";
                $targetFile = $targetDir . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
                $image = $_FILES['image']['name'];
            } else {
                // Set a default image if no image is uploaded
                $image = "default_image.jpg"; // Provide the path to your default image
            }

            // Insert team member
            insertTeamMember($name, $position, $description, $image, $facebookLink, $linkedinLink, $instagramLink);
            break;

        case 'update':
            $teamMemberId = $_POST['teamMemberId'];
            $name = $_POST['name'];
            $position = $_POST['position'];
            $description = $_POST['description'];
            $image = $_FILES['image']['name'];
            $facebookLink = $_POST['facebookLink'];
            $linkedinLink = $_POST['linkedinLink'];
            $instagramLink = $_POST['instagramLink'];

            // Check if the file is uploaded
            if ($_FILES['image']['size'] > 0) {
                // Upload image
                $targetDir = "images/team/";
                $targetFile = $targetDir . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
                $image = $_FILES['image']['name'];
            } else {
                // Set a default image if no image is uploaded
                $image = "default_image.jpg"; // Provide the path to your default image
            }

            // Update team member
            updateTeamMember($teamMemberId, $name, $position, $description, $image, $facebookLink, $linkedinLink, $instagramLink);
            break;

        case 'delete':
            $teamMemberId = $_POST['teamMemberId'];

            // Delete team member
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
                echo "<p>{$result['name']} - {$result['position']} - {$result['description']}</p>";
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
						<h1 class="page-title fw-semibold fs-18 mb-0">Team Members</h1>
					</div>
					<!-- Page Header Close -->

					<!-- Start:: row-1 -->
					<div class="row">
						<div class="col-xl-12">
							<div class="card custom-card">
								<div class="card-header justify-content-between">
									<div class="card-title">Team Members</div>
									<div class="prism-toggle">
										<button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
									</div>
								</div>
								<div class="card-body">
									<div class="row gy-4">
										<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
											<input type='hidden' name='action' value='<?php echo isset($editTeamMember) ? 'update' : 'insert'; ?>'>
											<div class="col-xl-12">
												<div class='form-group mb-4'>
													<label for='name'>Member Name:</label>
													<input type='text' name='name' class='form-control' value='<?php echo isset($editMemberName) ? $editMemberName : ''; ?>' required>
												</div>

												<div class='form-group mb-4'>
													<label for='memberPosition'>Member Position:</label>
													<input type='text' name='memberPosition' class='form-control' value='<?php echo isset($editMemberPosition) ? $editMemberPosition : ''; ?>' required>
												</div>

												<div class='form-group mb-4'>
													<label for='memberDescription'>Member Description:</label>
													<textarea name="memberDescription" id="memberDescription" class="form-control" rows="4"><?php echo isset($editMemberDescription) ? $editMemberDescription : ''; ?></textarea>
												</div>

												<div class='form-group mb-4'>
													<label for='memberImage'>Member Image:</label>
													<input type='file' name='memberImage' class='form-control-file' accept='image/*'>
													<?php
													if (isset($editMemberImage)) {
														echo "<img src='images/members/{$editMemberImage}' alt='Current Image' class='img-thumbnail mt-2' style='max-width: 200px;'>";
													}
													?>
												</div>

												<div class='form-group mb-4'>
													<label for='memberFacebook'>Facebook Link:</label>
													<input type='text' name='memberFacebook' class='form-control' value='<?php echo isset($editMemberFacebook) ? $editMemberFacebook : ''; ?>'>
												</div>

												<div class='form-group mb-4'>
													<label for='memberLinkedin'>LinkedIn Link:</label>
													<input type='text' name='memberLinkedin' class='form-control' value='<?php echo isset($editMemberLinkedin) ? $editMemberLinkedin : ''; ?>'>
												</div>
												
												<div class='form-group mb-4'>
													<label for='memberInstagram'>Instagram Link:</label>
													<input type='text' name='memberInstagram' class='form-control' value='<?php echo isset($editMemberInstagram) ? $editMemberInstagram : ''; ?>'>
												</div>


												<button type='submit' class='btn btn-primary'><?php echo isset($editTeamMember) ? 'Update' : 'Submit'; ?> Team Member</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

						<!-- Display Members -->
						<div class="col-xl-12">
							<div class="card custom-card">
								<div class="card-header justify-content-between">
									<div class="card-title">Members Overview</div>
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
										// Display team members or search results
										$displayResults = isset($searchResults) ? $searchResults : getTeamMembers(1, getTotalTeamMembers());

										if (!empty($displayResults)) {
											echo "<table class='table text-wrap table-bordered'>";
											echo "<thead>";
											echo "<tr>";
											echo "<th>S. No.</th>";
											echo "<th>Member Name</th>";
											echo "<th>Member Position</th>";
											echo "<th>Member Description</th>";
											echo "<th>Member Image</th>";
											echo "<th>Facebook Link</th>";
											echo "<th>LinkedIn Link</th>";
											echo "<th>Instagram Link</th>";
											echo "<th>Actions</th>";
											echo "</tr>";
											echo "</thead>";
											echo "<tbody>";
											$serial = 1; // Initialize $serial outside the loop

											foreach ($displayResults as $result) {
												// Display each team member or search result
												echo "<tr>";
												echo "<td>" . $serial++ . "</td>"; // Serial number
												echo "<td>{$result['name']}</td>";
												echo "<td>{$result['position']}</td>";
												echo "<td width='120px'>{$result['description']}</td>";
												echo "<td><img src='images/members/{$result['image']}' alt='Member Image' style='max-width: 100px;'></td>";
												echo "<td>{$result['facebook_link']}</td>";
												echo "<td>{$result['linkedin_link']}</td>";
												echo "<td>{$result['instagram_link']}</td>";
												echo "<td>";
												echo "<a href=\"{$_SERVER['PHP_SELF']}?edit={$result['id']}\" class=\"btn btn-warning\">Edit</a>";
												echo "<form action='{$_SERVER['PHP_SELF']}' method='post' class='d-inline'>";
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
											<p>Total Team Members: <?php echo getTotalTeamMembers(); ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End:: row-1 -->
				</div>

			</div>
			
			<?php
			// Close the database connection
			include('main/footer.php');

			?>
	