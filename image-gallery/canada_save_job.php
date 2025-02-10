<?php
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database1.php';

// Create a new instance of the Database class
$database = new Database();

// Get the PDO connection
$pdo = $database->getConnection();

// Initialize variables from POST data
$noc_code = $_POST['noc_code'];
$job_title = $_POST['job_title'];
$broad_occupation_category = $_POST['broad_occupation_category'];
$teer = $_POST['teer'];
$major_group = $_POST['major_group'];
$sub_major_group = $_POST['sub_major_group'];
$minor_group = $_POST['minor_group'];
$demand_info = $_POST['demand_info'];
$salary_prospects = $_POST['salary_prospects'];
$example_titles = $_POST['example_titles'];
$main_duties = $_POST['main_duties'];
$employment_requirements = $_POST['employment_requirements'];
$job_openings = $_POST['job_openings'];
$code_version = $_POST['code_version'];
$job_id = isset($_POST['job_id']) ? $_POST['job_id'] : null;

try {
    if ($job_id) {
        // Update existing job
        $sql = "UPDATE jobs SET noc_code = :noc_code, job_title = :job_title, broad_occupation_category = :broad_occupation_category, teer = :teer, major_group = :major_group, sub_major_group = :sub_major_group, minor_group = :minor_group, demand_info = :demand_info, salary_prospects = :salary_prospects, example_titles = :example_titles, main_duties = :main_duties, employment_requirements = :employment_requirements, job_openings = :job_openings, code_version = :code_version WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $job_id, PDO::PARAM_INT);
    } else {
        // Insert new job
        $sql = "INSERT INTO jobs (noc_code, job_title, broad_occupation_category, teer, major_group, sub_major_group, minor_group, demand_info, salary_prospects, example_titles, main_duties, employment_requirements, job_openings, code_version) VALUES (:noc_code, :job_title, :broad_occupation_category, :teer, :major_group, :sub_major_group, :minor_group, :demand_info, :salary_prospects, :example_titles, :main_duties, :employment_requirements, :job_openings, :code_version)";
        $stmt = $pdo->prepare($sql);
    }

    // Bind parameters
    $stmt->bindParam(':noc_code', $noc_code);
    $stmt->bindParam(':job_title', $job_title);
    $stmt->bindParam(':broad_occupation_category', $broad_occupation_category);
    $stmt->bindParam(':teer', $teer);
    $stmt->bindParam(':major_group', $major_group);
    $stmt->bindParam(':sub_major_group', $sub_major_group);
    $stmt->bindParam(':minor_group', $minor_group);
    $stmt->bindParam(':demand_info', $demand_info);
    $stmt->bindParam(':salary_prospects', $salary_prospects);
    $stmt->bindParam(':example_titles', $example_titles);
    $stmt->bindParam(':main_duties', $main_duties);
    $stmt->bindParam(':employment_requirements', $employment_requirements);
    $stmt->bindParam(':job_openings', $job_openings);
    $stmt->bindParam(':code_version', $code_version);

    // Execute query
    $stmt->execute();

    // Set success message
    $_SESSION['success_message'] = $job_id ? "Job updated successfully." : "Job inserted successfully.";

} catch (PDOException $e) {
    // Set error message
    $_SESSION['error_message'] = "Query failed: " . $e->getMessage();
}

// Redirect back to job index page
header("Location: canada_job_view.php");
exit();
?>
