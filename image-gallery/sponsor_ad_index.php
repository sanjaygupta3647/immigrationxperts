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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $alt = $_POST["alt"];
    $image = $_FILES["image"]["name"];
    $target_dir = "uploads/spon/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo '<script>alert("File is not an image.");</script>';
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo '<script>alert("Sorry, file already exists.");</script>';
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo '<script>alert("Sorry, your file is too large.");</script>';
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "svg"
        && $imageFileType != "gif") {
        echo '<script>alert("Sorry, only JPG, JPEG, SVG, PNG & GIF files are allowed.");</script>';
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo '<script>alert("Sorry, your file was not uploaded.");</script>';
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Insert data into the database
            $database = new Database();
            $conn = $database->getConnection();
            $sql = "INSERT INTO partner_logos (image, alt) VALUES ('$image', '$alt')";
            if ($conn->query($sql) === TRUE) {
                echo '<script>alert("New record added successfully.");</script>';
                echo '<meta http-equiv="refresh" content="0">';
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo '<script>alert("Sorry, there was an error uploading your file.");</script>';
        }
    }
}

// Define the number of records per page
$recordsPerPage = 10;

// Initialize the current page number
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Calculate the starting record for the current page
$startFrom = ($page - 1) * $recordsPerPage;

// Fetch partner logos data from the database with pagination
$database = new Database();
$conn = $database->getConnection();

$sql = "SELECT COUNT(*) AS total FROM partner_logos";
$result = $conn->query($sql);
$totalRows = $result->fetch_assoc()['total'];

$sql = "SELECT * FROM partner_logos ORDER BY id DESC LIMIT $startFrom, $recordsPerPage";
$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery System</title>
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

	<div class="container">
		<div class="row">
			<?php include("top_menu.php"); ?>
    <div class="container">
        <h2>Manage Partner Logos</h2>
        <div class="row">
            <!-- Insert Form -->
            <div class="col-md-6">
                <h3>Add New Logo</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <label for="alt">Alt Text:</label>
                        <input type="text" class="form-control" id="alt" name="alt" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <!-- View Logos -->
            <div class="col-md-6">
				<h3>View Logos</h3>
				
				<table class="table">
					<thead>
						<tr>
							<th>Serial No</th>
							<th>Image</th>
							<th>Alt Text</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$serial = 1; // Initialize serial number
						if ($result && $result->num_rows > 0) {
							while ($row = $result->fetch_assoc()) {
								echo '<tr>';
								echo '<td>' . $serial++ . '</td>'; // Display serial number
								echo '<td><img src="uploads/spon/' . $row["image"] . '" alt="' . $row["alt"] . '" style="max-width: 100px;"></td>';
								echo '<td>' . $row["alt"] . '</td>';
								echo '<td><form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post"><input type="hidden" name="delete_id" value="' . $row["id"] . '"><button type="submit" name="delete" class="btn btn-danger">Delete</button></form></td>';
								echo '</tr>';
							}
						} else {
							echo "<tr><td colspan='4'>No partner logos found.</td></tr>";
						}
						?>
					</tbody>
				</table>
				<p>Total Items: <?php echo $totalRows; ?></p>
<!-- Pagination -->
<div class="pagination mt-3">
    <?php
    // Check if pagination is needed
    if ($totalRows > $recordsPerPage) {
        // Calculate total pages
        $totalPages = ceil($totalRows / $recordsPerPage);

        // Determine if "Previous" button should be active
        $prevPage = $page - 1;
        $prevDisabled = ($prevPage < 1) ? 'disabled' : '';

        // Determine if "Next" button should be active
        $nextPage = $page + 1;
        $nextDisabled = ($nextPage > $totalPages) ? 'disabled' : '';

        echo '<ul class="pagination">';

        // "Previous" button
        if ($prevPage >= 1) {
            echo '<li class="page-item ' . $prevDisabled . '"><a class="page-link" href="?page=' . $prevPage . '">Previous</a></li>';
        } else {
            echo '<li class="page-item disabled"><span class="page-link">Previous</span></li>';
        }

        // Display page numbers
        for ($i = 1; $i <= $totalPages; $i++) {
            $active_class = ($i == $page) ? 'active' : '';
            echo '<li class="page-item ' . $active_class . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
        }

        // "Next" button
        if ($nextPage <= $totalPages) {
            echo '<li class="page-item ' . $nextDisabled . '"><a class="page-link" href="?page=' . $nextPage . '">Next</a></li>';
        } else {
            echo '<li class="page-item disabled"><span class="page-link">Next</span></li>';
        }

        echo '</ul>';
    }
    ?>
</div>





			</div>
			</div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
// Handle delete action
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $delete_id = $_POST["delete_id"];
    $sql = "DELETE FROM partner_logos WHERE id = $delete_id";
    if ($conn->query($sql) === TRUE) {
        // Refresh the page after deletion
        echo '<meta http-equiv="refresh" content="0">';
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
