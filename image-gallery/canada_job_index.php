<?php
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database1.php';
include_once 'canada_noc_versions.php';

// Create a new instance of the Database class
$database = new Database();

// Get the PDO connection
$pdo = $database->getConnection();

// Initialize variables for form fields
$noc_code = $job_title = $broad_occupation_category = $teer = $major_group = $sub_major_group = $minor_group = $demand_info = $salary_prospects = $example_titles = $main_duties = $employment_requirements = $job_openings = $code_version = '';
$job_id = null;

// Check if editing
if (isset($_GET['id'])) {
    $job_id = $_GET['id'];
    $sql = "SELECT * FROM jobs WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $job_id, PDO::PARAM_INT);
    $stmt->execute();
    $job = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($job) {
        $noc_code = $job['noc_code'];
        $job_title = $job['job_title'];
        $broad_occupation_category = $job['broad_occupation_category'];
        $teer = $job['teer'];
        $major_group = $job['major_group'];
        $sub_major_group = $job['sub_major_group'];
        $minor_group = $job['minor_group'];
        $demand_info = $job['demand_info'];
        $salary_prospects = $job['salary_prospects'];
        $example_titles = $job['example_titles'];
        $main_duties = $job['main_duties'];
        $employment_requirements = $job['employment_requirements'];
        $job_openings = $job['job_openings'];
        $code_version = $job['code_version'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $job_id ? 'Edit Job' : 'Insert Job'; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- CKEditor 5 -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
</head>
<body>
    <?php include('include/container.php'); ?>
    <div class="container mt-5">
        <?php include("top_menu.php"); ?>
		<div class="mt-3">
            <a href="canada_job_view.php" class="btn btn-info">View All Jobs</a>
        </div>
        <?php if (isset($_SESSION['success_message'])): ?>
            <div class="alert alert-success">
                <?php echo $_SESSION['success_message']; unset($_SESSION['success_message']); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['error_message'])): ?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['error_message']; unset($_SESSION['error_message']); ?>
            </div>
        <?php endif; ?>

        <h1 class="mt-5"><?php echo $job_id ? 'Edit Job' : 'Insert NOC Details'; ?></h1>
        <form action="canada_save_job.php" method="post" class="mt-3">
            <input type="hidden" name="job_id" value="<?php echo htmlspecialchars($job_id); ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="noc_code">NOC Code:</label>
                        <input type="text" class="form-control" id="noc_code" name="noc_code" value="<?php echo htmlspecialchars($noc_code); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="job_title">Job Title:</label>
                        <input type="text" class="form-control" id="job_title" name="job_title" value="<?php echo htmlspecialchars($job_title); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="broad_occupation_category">Broad Occupation Category:</label>
                        <input type="text" class="form-control" id="broad_occupation_category" name="broad_occupation_category" value="<?php echo htmlspecialchars($broad_occupation_category); ?>">
                    </div>
                    <div class="form-group">
                        <label for="teer">TEER:</label>
                        <input type="text" class="form-control" id="teer" name="teer" value="<?php echo htmlspecialchars($teer); ?>">
                    </div>
                    <div class="form-group">
                        <label for="major_group">Major Group:</label>
                        <input type="text" class="form-control" id="major_group" name="major_group" value="<?php echo htmlspecialchars($major_group); ?>">
                    </div>
                    <div class="form-group">
                        <label for="sub_major_group">Sub-Major Group:</label>
                        <input type="text" class="form-control" id="sub_major_group" name="sub_major_group" value="<?php echo htmlspecialchars($sub_major_group); ?>">
                    </div>
                    <div class="form-group">
                        <label for="minor_group">Minor Group:</label>
                        <input type="text" class="form-control" id="minor_group" name="minor_group" value="<?php echo htmlspecialchars($minor_group); ?>">
                    </div>
                    <div class="form-group">
                        <label for="demand_info">Job Demand:</label>
                        <textarea class="form-control" id="demand_info" name="demand_info"><?php echo htmlspecialchars($demand_info); ?></textarea>
                    </div>
                </div>
                <div class="col-md-6">                    
                    <div class="form-group">
                        <label for="example_titles">Example Titles:</label>
                        <textarea class="form-control" id="example_titles" name="example_titles"><?php echo htmlspecialchars($example_titles); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="main_duties">Main Duties:</label>
                        <textarea class="form-control" id="main_duties" name="main_duties"><?php echo htmlspecialchars($main_duties); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="employment_requirements">Employment Requirements:</label>
                        <textarea class="form-control" id="employment_requirements" name="employment_requirements"><?php echo htmlspecialchars($employment_requirements); ?></textarea>
                    </div>
					<div class="form-group">
                        <label for="salary_prospects">Salary Prospects:</label>
                        <textarea class="form-control" id="salary_prospects" name="salary_prospects"><?php echo htmlspecialchars($salary_prospects); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="job_openings">Job Openings:</label>
                        <textarea class="form-control" id="job_openings" name="job_openings"><?php echo htmlspecialchars($job_openings); ?></textarea>
                    </div>
                    <div class="form-group">
						<label for="code_version">Code Version:</label>
						<select class="form-control" id="code_version" name="code_version" required>
							<?php foreach ($versions as $version): ?>
								<option value="<?php echo htmlspecialchars($version['id']); ?>" <?php echo $version['id'] == $code_version ? 'selected' : ''; ?>>
									<?php echo htmlspecialchars($version['version']); ?>
								</option>
							<?php endforeach; ?>
						</select>
					</div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary"><?php echo $job_id ? 'Update Job' : 'Insert Job'; ?></button>
        </form>

        <!-- Link to view jobs -->
       
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Initialize CKEditor
        document.addEventListener('DOMContentLoaded', () => {
            ClassicEditor
                .create(document.querySelector('#demand_info'))
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#salary_prospects'))
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#example_titles'))
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#main_duties'))
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#employment_requirements'))
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#job_openings'))
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
</body>
</html>
