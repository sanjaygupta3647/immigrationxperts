<?php
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include the database configuration file
include_once 'config/Database1.php';

// Create a new instance of the Database class
$database = new Database();

// Get the PDO connection
$pdo = $database->getConnection();

// Fetch all jobs with version names
$sql = "SELECT jobs.*, noc_versions.version AS version_name
        FROM jobs
        JOIN noc_versions ON jobs.code_version = noc_versions.id";

try {
    $stmt = $pdo->query($sql);
    $jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Query failed: ' . $e->getMessage();
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Job</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <!-- CKEditor 5 -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "pageLength": 10
            });
        });

        function toggleReadMore(id, field) {
            var dots = document.getElementById("dots-" + field + "-" + id);
            var moreText = document.getElementById("more-" + field + "-" + id);
            var btnText = document.getElementById("btn-" + field + "-" + id);

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Show Less";
                moreText.style.display = "inline";
            }
        }
    </script>
</head>
<body>
    <?php include('include/container.php'); ?>
    <div class="container mt-5">
        <?php include("top_menu.php"); ?>
        <div class="mt-3">
            <a href="canada_job_index.php" class="btn btn-info">Insert NOC Details</a>
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

        <h1 class="mt-5">All Jobs</h1>
        <?php if (count($jobs) > 0): ?>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>NOC Code</th>
                            <th>Job Title</th>
                            <th>Broad Occupation Category</th>
                            <th>TEER</th>
                            <th>Major Group</th>
                            <th>Sub-Major Group</th>
                            <th>Minor Group</th>
                            <th>Job Demand</th>
                            <th>Salary Prospects</th>
                            <th>Example Titles</th>
                            <th>Main Duties</th>
                            <th>Employment Requirements</th>
                            <th>Job Openings</th>
                            <th>Code Version</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($jobs as $row): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['noc_code']); ?></td>
                                <td><?php echo htmlspecialchars($row['job_title']); ?></td>
                                <td><?php echo htmlspecialchars($row['broad_occupation_category']); ?></td>
                                <td><?php echo htmlspecialchars($row['teer']); ?></td>
								 <td>
                                    <span id="dots-major_group-<?php echo $row['id']; ?>">...</span>
                                    <span id="more-major_group-<?php echo $row['id']; ?>" style="display:none;"><?php echo ($row['major_group']); ?></span>
                                    <a href="javascript:void(0);" id="btn-major_group-<?php echo $row['id']; ?>" onclick="toggleReadMore('<?php echo $row['id']; ?>', 'major_group')">Read More</a>
                                </td>
								 <td>
                                    <span id="dots-sub_major_group-<?php echo $row['id']; ?>">...</span>
                                    <span id="more-sub_major_group-<?php echo $row['id']; ?>" style="display:none;"><?php echo ($row['sub_major_group']); ?></span>
                                    <a href="javascript:void(0);" id="btn-sub_major_group-<?php echo $row['id']; ?>" onclick="toggleReadMore('<?php echo $row['id']; ?>', 'sub_major_group')">Read More</a>
                                </td>
								 <td>
                                    <span id="dots-minor_group-<?php echo $row['id']; ?>">...</span>
                                    <span id="more-minor_group-<?php echo $row['id']; ?>" style="display:none;"><?php echo ($row['minor_group']); ?></span>
                                    <a href="javascript:void(0);" id="btn-minor_group-<?php echo $row['id']; ?>" onclick="toggleReadMore('<?php echo $row['id']; ?>', 'minor_group')">Read More</a>
                                </td>
								
								
                                <td>
                                    <span id="dots-demand_info-<?php echo $row['id']; ?>">...</span>
                                    <span id="more-demand_info-<?php echo $row['id']; ?>" style="display:none;"><?php echo ($row['demand_info']); ?></span>
                                    <a href="javascript:void(0);" id="btn-demand_info-<?php echo $row['id']; ?>" onclick="toggleReadMore('<?php echo $row['id']; ?>', 'demand_info')">Read More</a>
                                </td>
                                <td>
                                    <span id="dots-salary_prospects-<?php echo $row['id']; ?>">...</span>
                                    <span id="more-salary_prospects-<?php echo $row['id']; ?>" style="display:none;"><?php echo ($row['salary_prospects']); ?></span>
                                    <a href="javascript:void(0);" id="btn-salary_prospects-<?php echo $row['id']; ?>" onclick="toggleReadMore('<?php echo $row['id']; ?>', 'salary_prospects')">Read More</a>
                                </td>
                                <td>
                                    <span id="dots-example_titles-<?php echo $row['id']; ?>">...</span>
                                    <span id="more-example_titles-<?php echo $row['id']; ?>" style="display:none;"><?php echo ($row['example_titles']); ?></span>
                                    <a href="javascript:void(0);" id="btn-example_titles-<?php echo $row['id']; ?>" onclick="toggleReadMore('<?php echo $row['id']; ?>', 'example_titles')">Read More</a>
                                </td>
                                <td>
                                    <span id="dots-main_duties-<?php echo $row['id']; ?>">...</span>
                                    <span id="more-main_duties-<?php echo $row['id']; ?>" style="display:none;"><?php echo ($row['main_duties']); ?></span>
                                    <a href="javascript:void(0);" id="btn-main_duties-<?php echo $row['id']; ?>" onclick="toggleReadMore('<?php echo $row['id']; ?>', 'main_duties')">Read More</a>
                                </td>
                                <td>
                                    <span id="dots-employment_requirements-<?php echo $row['id']; ?>">...</span>
                                    <span id="more-employment_requirements-<?php echo $row['id']; ?>" style="display:none;"><?php echo ($row['employment_requirements']); ?></span>
                                    <a href="javascript:void(0);" id="btn-employment_requirements-<?php echo $row['id']; ?>" onclick="toggleReadMore('<?php echo $row['id']; ?>', 'employment_requirements')">Read More</a>
                                </td>
                                
								<td>
                                    <span id="dots-job_openings-<?php echo $row['id']; ?>">...</span>
                                    <span id="more-job_openings-<?php echo $row['id']; ?>" style="display:none;"><?php echo ($row['job_openings']); ?></span>
                                    <a href="javascript:void(0);" id="btn-job_openings-<?php echo $row['id']; ?>" onclick="toggleReadMore('<?php echo $row['id']; ?>', 'job_openings')">Read More</a>
                                </td>								
                                <td><?php echo htmlspecialchars($row['version_name']); ?></td>
                                <td>
                                    <a href="canada_job_index.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="canada_delete_job.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this job?');">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p>No jobs found.</p>
        <?php endif; ?>
    </div>
</body>
</html>
