<?php
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';

// Create a new instance of the Database class
$database = new Database();
$mysqli = $database->getConnection();

// Fetch all records from the database
$sql = "SELECT * FROM anzsco_occupations_details";
$result = $mysqli->query($sql);

if ($result === false) {
    die("Error: " . $mysqli->error);
}

$records = [];
while ($row = $result->fetch_assoc()) {
    $records[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View ANZSCO Occupation Details</title>
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
    <!-- Custom CSS -->
    <style>
        .truncate {
            position: relative;
            max-height: 3em;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .truncate::after {
            content: '... ';
            position: absolute;
            bottom: 0;
            right: 0;
        }
        .read-more {
            display: none;
        }
        .show-more {
            cursor: pointer;
            color: #007bff;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php include('include/container.php'); ?>
    <div class="container mt-5">
        <?php include("top_menu.php"); ?>
        <div class="mt-3">
            <a href="/image-gallery/anzsco_details_insert.php" class="btn btn-primary">Insert New Record</a>
        </div>
        <?php if (isset($_SESSION['success_message'])): ?>
            <div class="alert alert-success">
                <?php echo htmlspecialchars($_SESSION['success_message']); unset($_SESSION['success_message']); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['error_message'])): ?>
            <div class="alert alert-danger">
                <?php echo htmlspecialchars($_SESSION['error_message']); unset($_SESSION['error_message']); ?>
            </div>
        <?php endif; ?>

        <h1 class="mt-5">ANZSCO Occupation Details</h1>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>ANZSCO Code</th>
                        <th>Description</th>
                        <th>Skills Assessment Requirements</th>
                        <th>Group Title</th>
                        <th>Group Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
    <?php if (count($records) > 0): ?>
        <?php $sno = 1; // Initialize the serial number counter ?>
        <?php foreach ($records as $record): ?>
            <tr>
                <td><?php echo $sno++; ?></td> <!-- Replace ID with S.No. -->
                <td><?php echo htmlspecialchars($record['anzsco_code']); ?></td>
                <td>
                    <div class="truncate" id="desc-<?php echo htmlspecialchars($record['id']); ?>">
                        <?php echo ($record['description']); ?>
                    </div>
                    <div class="read-more" id="read-more-<?php echo htmlspecialchars($record['id']); ?>">
                        <?php echo ($record['description']); ?>
                    </div>
                    <a href="#" class="show-more" data-id="<?php echo htmlspecialchars($record['id']); ?>">Read More</a>
                </td>
                <td>
                    <div class="truncate" id="skills-<?php echo htmlspecialchars($record['id']); ?>">
                        <?php echo ($record['skills_assessment_requirements']); ?>
                    </div>
                    <div class="read-more" id="skills-more-<?php echo htmlspecialchars($record['id']); ?>">
                        <?php echo ($record['skills_assessment_requirements']); ?>
                    </div>
                    <a href="#" class="show-more" data-id="<?php echo htmlspecialchars($record['id']); ?>">Read More</a>
                </td>
                <td>
                    <div class="truncate" id="group-title-<?php echo htmlspecialchars($record['id']); ?>">
                        <?php echo ($record['group_title']); ?>
                    </div>
                    <div class="read-more" id="group-title-more-<?php echo htmlspecialchars($record['id']); ?>">
                        <?php echo ($record['group_title']); ?>
                    </div>
                    <a href="#" class="show-more" data-id="<?php echo htmlspecialchars($record['id']); ?>">Read More</a>
                </td>
                <td>
                    <div class="truncate" id="group-desc-<?php echo htmlspecialchars($record['id']); ?>">
                        <?php echo ($record['group_description']); ?>
                    </div>
                    <div class="read-more" id="group-desc-more-<?php echo htmlspecialchars($record['id']); ?>">
                        <?php echo ($record['group_description']); ?>
                    </div>
                    <a href="#" class="show-more" data-id="<?php echo htmlspecialchars($record['id']); ?>">Read More</a>
                </td>
                <td>
                    <a href="/image-gallery/anzsco_details_update.php?id=<?php echo htmlspecialchars($record['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/image-gallery/anzsco_details_delete.php?id=<?php echo htmlspecialchars($record['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="7">No records found.</td>
        </tr>
    <?php endif; ?>
</tbody>

            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "pageLength": 10
            });

            $('.show-more').on('click', function(event) {
                event.preventDefault();
                var id = $(this).data('id');
                $('#desc-' + id).toggle();
                $('#read-more-' + id).toggle();
                $('#skills-' + id).toggle();
                $('#skills-more-' + id).toggle();
                $('#group-title-' + id).toggle();
                $('#group-title-more-' + id).toggle();
                $('#group-desc-' + id).toggle();
                $('#group-desc-more-' + id).toggle();
                $(this).text($(this).text() === 'Read More' ? 'Read Less' : 'Read More');
            });
        });
    </script>
</body>
</html>
