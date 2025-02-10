<?php
// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apical";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables to hold job details
$id = 0;
$job_title = '';
$location = '';
$openings = 0;
$job_type = '';
$description = '';
$tab_id = 0;

// Check if job_id is provided in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Prepare and execute query to fetch job details based on id
    $sql = "SELECT * FROM job_listings WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if job exists
    if ($result->num_rows > 0) {
        // Fetch job details
        $job = $result->fetch_assoc();
        $job_title = $job['job_title'];
        $location = $job['location'];
        $openings = $job['openings'];
        $job_type = $job['job_type'];
        $description = $job['description'];
        $tab_id = $job['tab_id'];
    } else {
        // Job not found
        echo "Job not found.";
    }
if (isset($_POST['tab_id'])) {
    $tab_id = intval($_POST['tab_id']);

    // Prepare and execute query to fetch tab name
    $sql = "SELECT tab_name FROM tabs WHERE tab_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $tab_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $tab_name = $row['tab_name'];
        echo $tab_name;
    } else {
        echo "Tab not found";
    }

    // Close statement
    $stmt->close();
}
    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job Listing</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- CKEditor CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
	<script>
        // Check if the URL has the success parameter
        const urlParams = new URLSearchParams(window.location.search);
        const success = urlParams.get('success');

        if (success === '1') {
            // Display a success alert
            alert('Job listing updated successfully');
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mt-5 mb-4">Edit Job Listing</h2>
                <!-- Form for editing job listing -->
               <form action="job_update.php" method="post">
        <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="job_title">Job Title:</label>
                    <input type="text" class="form-control" id="job_title" name="job_title" value="<?php echo $job_title; ?>" required>
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" class="form-control" id="location" name="location" value="<?php echo $location; ?>" required>
                </div>
                <div class="form-group">
                    <label for="openings">Openings:</label>
                    <input type="number" class="form-control" id="openings" name="openings" value="<?php echo $openings; ?>" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="4"><?php echo $description; ?></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="job_type">Job Type:</label>
                    <select class="form-control" id="job_type" name="job_type" required>
                        <option value="">Select Job Type</option>
                        <option value="Full Time" <?php if ($job_type == 'Full Time') echo 'selected'; ?>>Full Time</option>
                        <option value="Part Time" <?php if ($job_type == 'Part Time') echo 'selected'; ?>>Part Time</option>
                        <option value="Contract" <?php if ($job_type == 'Contract') echo 'selected'; ?>>Contract</option>
                        <option value="Freelance" <?php if ($job_type == 'Freelance') echo 'selected'; ?>>Freelance</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tab_id">Tab Name:</label>
                    <select class="form-control" id="tab_id" name="tab_id"></select>
                </div>
            </div>
        </div>
        <!-- Hidden fields for job type and tab name -->
        <input type="hidden" id="hidden_tab_name" name="tab_name" value="<?php echo $tab_name; ?>">
        <!-- JavaScript to update job type and tab name -->
        <script>
            function updateJobType() {
                var selectedJobType = document.getElementById('job_type').value;
                document.getElementById('hidden_job_type').value = selectedJobType;
            }

            document.getElementById('job_type').addEventListener('change', updateJobType);
            updateJobType();
        </script>
        <button type="submit" name="update_job" class="btn btn-primary">Update Job Listing</button>
    </form>

				
				
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'), {
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'underline',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'indent',
                    'outdent',
                    '|',
                    'undo',
                    'redo'
                ]
            },
            language: 'en',
            shouldNotToolbarFixedDuringScroll: true
        })
        .then(editor => {
            console.log('Editor was initialized', editor);
            document.getElementById('editor-toolbar').appendChild(editor.ui.view.toolbar.element);
        })
        .catch(error => {
            console.error('Error initializing editor:', error);
        });
</script>
	 <script>
document.addEventListener("DOMContentLoaded", function() {
    // Fetch tab names using fetch API
    fetch('job_tab_fetch.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        // Optionally, you can send data here if needed
        body: JSON.stringify({}),
    })
    .then(response => response.json())
    .then(data => {
        const tabIdSelect = document.getElementById('tab_id');
        tabIdSelect.innerHTML = ''; // Clear existing options

        // Add default option
        const defaultOption = document.createElement('option');
        defaultOption.value = '';
        defaultOption.textContent = 'Select Tab Name';
        tabIdSelect.appendChild(defaultOption);

        // Add fetched tab names to dropdown
        data.forEach(tab => {
            const option = document.createElement('option');
            option.value = tab.tab_id;
            option.textContent = tab.tab_name;
            tabIdSelect.appendChild(option);
        });

        // Select the previously selected tab (if any)
        const selectedTabId = <?php echo json_encode($tab_id); ?>;
        tabIdSelect.value = selectedTabId;
    })
    .catch(error => {
        console.error('Error fetching tab names:', error);
    });
});
</script>

</body>
</html>
