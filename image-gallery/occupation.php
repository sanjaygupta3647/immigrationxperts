<?php
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';

// Create an instance of the Database class
$db = new Database();
$conn = $db->getConnection(); // Get the database connection object

$inserted_id = null;
$message = null;
$records_per_page = 25; // Number of records to display per page

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['redirect'])) {
    // Fetch values from the form
    $occupation_name = $_POST['occupation_name'];
    $ANZSCO = $_POST['ANZSCO'];

    // Check if ANZSCO code already exists
    if (!empty($ANZSCO)) {
        $sql_check = "SELECT * FROM occupations WHERE ANZSCO = '$ANZSCO'";
        $result_check = $conn->query($sql_check);
        if ($result_check->num_rows > 0) {
            $message = "Occupation with ANZSCO code '$ANZSCO' already exists.";
        }
    }

    // Check if values are not empty
    if (!empty($occupation_name)) {
        // Prepare SQL statement to insert data into the database
        if (!empty($ANZSCO)) {
            $sql = "INSERT INTO occupations (occupation_name, ANZSCO) VALUES ('$occupation_name', '$ANZSCO')";
        } else {
            $sql = "INSERT INTO occupations (occupation_name) VALUES ('$occupation_name')";
        }

        // Execute SQL statement
        if ($conn->query($sql) === TRUE) {
            $inserted_id = $conn->insert_id; // Get the ID of the inserted record

            // Set success message in session variable
            $_SESSION['success_message'] = "New record created successfully";

            // Redirect to avoid resubmission
            header("Location: occupation.php?redirect=true");
            exit();
        } else {
            $message = "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $message = "Occupation name cannot be empty.";
    }
}

// Delete occupation if delete request is sent
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];

    $sql_delete = "DELETE FROM occupations WHERE id = $delete_id";
    if ($conn->query($sql_delete) === TRUE) {
        $message = "Record deleted successfully";
    } else {
        $message = "Error deleting record: " . $conn->error;
    }
}

// Fetch total number of records
$sql_total_records = "SELECT COUNT(*) AS total FROM occupations";
$result_total_records = $conn->query($sql_total_records);
$total_records = $result_total_records->fetch_assoc()['total'];

// Calculate total number of pages
$total_pages = ceil($total_records / $records_per_page);

// Get current page number
$current_page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Calculate the starting record for the current page
$start_from = ($current_page - 1) * $records_per_page;

// Fetch occupation details for the current page, sorted alphabetically by occupation_name
$sql_select = "SELECT * FROM occupations ORDER BY occupation_name ASC LIMIT $start_from, $records_per_page";
$result_select = $conn->query($sql_select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery System</title>
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

<div class="container">
    <div class="row">
        <?php include("top_menu.php"); ?>

        <div class="container">
            <h2 class="mt-5 mb-4">Occupations</h2>
            <!-- Form for adding new occupation -->
            <form id="occupationForm" method="post">
                <div class="mb-3">
                    <label for="occupation_name" class="form-label">Occupation Name:</label>
                    <input type="text" class="form-control" id="occupation_name" name="occupation_name" required>
                </div>
                <div class="mb-3">
                    <label for="ANZSCO" class="form-label">ANZSCO Code:</label>
                    <input type="text" class="form-control" id="ANZSCO" name="ANZSCO">
                    <div id="anzscoError" class="invalid-feedback"></div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <!-- Display message -->
            <?php
            if ($message !== null) {
                echo '<div class="alert alert-warning mt-3" role="alert">' . $message . '</div>';
            }
            ?>

            <!-- Display occupation details -->
            <?php
            if ($result_select->num_rows > 0) {
                echo '<div class="mt-4">';
                echo '<h3>Occupation Details:</h3>';
                echo '<table class="table">';
                echo '<thead>';
                echo '<tr>';
                echo '<th scope="col">S.No.</th>';
                echo '<th scope="col">Occupation Name</th>';
                echo '<th scope="col">ANZSCO Code</th>';
                echo '<th scope="col">Actions</th>'; // New column for actions
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                $serial_number = ($current_page - 1) * $records_per_page + 1;
                // Loop through the occupation details
                while ($row = $result_select->fetch_assoc()) {
                    echo '<tr>';
                    // Display the serial number
                    echo '<td>' . $serial_number . '</td>';
                    // Display the occupation name
                    echo '<td>' . $row['occupation_name'] . '</td>';
                    // Display the ANZSCO code
                    echo '<td>' . $row['ANZSCO'] . '</td>';
                    // Display delete button with confirmation
                    echo '<td>';
                    echo '<form method="post" class="delete-form">';
                    echo '<input type="hidden" name="delete_id" value="' . $row['id'] . '">';
                    echo '<button type="submit" class="btn btn-danger btn-sm">Delete</button>';
                    echo '</form>';
                    echo '</td>';
                    echo '</tr>';
                    // Increment the serial number
                    $serial_number++;
                }
                echo '</tbody>';
                echo '</table>';
                echo '</div>';

                // Pagination links
                echo '<div class="pagination mt-3">';
                // Home link
                echo '<a href="occupation.php?page=1">Home</a>';

                // Previous link
                if ($current_page > 1) {
                    echo '<a href="occupation.php?page=' . ($current_page - 1) . '" class="prev">Previous</a>';
                }

                // Display up to 5 pages
                $startPage = max(1, $current_page - 2); // Adjusted to display 2 pages before current page
                $endPage = min($total_pages, $current_page + 2); // Adjusted to display 2 pages after current page
                for ($i = $startPage; $i <= $endPage; $i++) {
                    if ($current_page == $i) {
                        echo '<a href="occupation.php?page=' . $i . '" class="active">' . $i . '</a>';
                    } else {
                        echo '<a href="occupation.php?page=' . $i . '">' . $i . '</a>';
                    }
                }

                // Next link
                if ($current_page < $total_pages) {
                    echo '<a href="occupation.php?page=' . ($current_page + 1) . '" class="next">Next</a>';
                }

                // Last link
                echo '<a href="occupation.php?page=' . $total_pages . '">Last</a>';
                echo '</div>';
            } else {
                echo '<div class="mt-4">';
                echo '<p>No occupation details found.</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Handle delete form submission
        $('.delete-form').submit(function(e) {
            e.preventDefault(); // Prevent form submission

            // Confirm deletion
            if (confirm('Are you sure you want to delete this occupation?')) {
                var form = $(this);
                var url = form.attr('action'); // Form action URL
                var formData = form.serialize(); // Form data to be submitted

                // Perform AJAX delete request
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: formData,
                    success: function(response) {
                        // Reload page after deletion or update UI as needed
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('An error occurred while deleting the occupation. Please try again.');
                    }
                });
            }
        });
    });
</script>

<!-- Script to display alert -->
<script>
    // Check if session message exists and display alert
    <?php if (isset($_SESSION['success_message'])) : ?>
    alert('<?php echo $_SESSION['success_message']; ?>');
    <?php
    // Clear session message after displaying
    unset($_SESSION['success_message']);
    ?>
    <?php endif; ?>
</script>

</body>
</html>
