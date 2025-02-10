<?php
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Initialize variables
$id = '';
$year = '';
$draw_no = '';
$draw_date = '';
$crs_cut_off = '';
$itas_issued = '';
$reference_url = '';

// Check if editing an existing draw
$is_edit = false;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $is_edit = true;

    // Fetch draw details from database
    include_once 'config/Database.php';
    $db = new Database();
    $conn = $db->getConnection();

    $sql = "SELECT * FROM express_entry_draws WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $year = $row['year'];
        $draw_no = $row['draw_no'];
        $draw_date = $row['draw_date'];
        $crs_cut_off = $row['crs_cut_off'];
        $itas_issued = $row['itas_issued'];
        $reference_url = $row['reference_url'];
    } else {
        $_SESSION['error_message'] = "Draw not found.";
        header('Location: express_entry_index.php');
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Express Entry Draws Management</title>
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <style type="text/css">
        /* Custom CSS for form layout */
        .form-control {
            width: 100%;
        }
        .pagination .active a {
            background-color: #337ab7;
            color: white;
        }
        .pagination .page-link {
            margin: 0 2px;
        }
    </style>
</head>
<body>
    <?php include('include/container.php'); ?>
    <div class="container mt-5">
        <!-- Top navigation or header -->
        <?php include("top_menu.php"); ?>

        <h1 class="text-center mb-5">Express Entry Draws Management</h1>

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

        <div class="row">
            <!-- Form column -->
            <div class="col-md-6">
                <div class="card mb-5">
                    <div class="card-header">
                        <h2 class="card-title"><?php echo $is_edit ? 'Edit Draw' : 'Add Draw'; ?></h2>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo $is_edit ? 'express_entry_edit.php' : 'express_entry_insert.php'; ?>" method="POST">
                            <div class="form-group">
                                <label for="year">Year:</label>
                                <input type="number" id="year" name="year" class="form-control" value="<?php echo isset($year) ? $year : ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="draw_no">Draw No:</label>
                                <input type="number" id="draw_no" name="draw_no" class="form-control" value="<?php echo isset($draw_no) ? $draw_no : ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="draw_date">Draw Date:</label>
                                <input type="date" id="draw_date" name="draw_date" class="form-control" value="<?php echo isset($draw_date) ? $draw_date : ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="crs_cut_off">CRS Cut Off:</label>
                                <input type="text" id="crs_cut_off" name="crs_cut_off" class="form-control" value="<?php echo isset($crs_cut_off) ? $crs_cut_off : ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="itas_issued">ITAs Issued:</label>
                                <input type="number" id="itas_issued" name="itas_issued" class="form-control" value="<?php echo isset($itas_issued) ? $itas_issued : ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="reference_url">Reference URL (optional):</label>
                                <input type="text" id="reference_url" name="reference_url" class="form-control" value="<?php echo isset($reference_url) ? $reference_url : ''; ?>">
                            </div>
                            <?php if (isset($id)): ?>
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <?php endif; ?>
                            <button type="submit" class="btn btn-primary"><?php echo $is_edit ? 'Update Draw' : 'Add Draw'; ?></button>
                            <?php if ($is_edit): ?>
                                <a href="express_entry_index.php" class="btn btn-default">Cancel</a>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>

            <!-- View section column -->
            <div class="col-md-6">
                <div class="card mb-5">
                    <div class="card-header">
                        <h2 class="card-title">Express Entry Draws</h2>
                    </div>
                    <div class="card-body" id="express-draws">
                        <?php
                        // Include PHP code to fetch and display existing draws
                        include 'express_entry_view.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
