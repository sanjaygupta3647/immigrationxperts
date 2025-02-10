<?php
// Start session
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';  // Make sure you include your database connection

// Instantiate the Database class and get the connection
$database = new Database();
$mysqli = $database->getConnection();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
        // JavaScript function for delete confirmation
        function confirmDelete() {
            return confirm("Are you sure you want to delete this tab?");
        }
    </script>
</head>
<body>

    <!-- Include the container or top menu first -->
    <?php include('include/container.php'); ?>  <!-- Make sure your top menu is included here -->

    <div class="container mt-5">
        <h2>Admin Dashboard</h2>
        <h3>Manage Tabs</h3>

        <?php
        // Fetch all tabs from the database
        try {
            $query = "SELECT * FROM skill_body_tabs";  // Select all tabs
            $stmt = $mysqli->prepare($query); // Use prepared statements
            $stmt->execute();  // Execute the query
            $tabs = $stmt->get_result(); // Get the result

            if ($tabs->num_rows > 0) {
                // Display the button to add new tab
                echo "<a href='skill_body_insert_tab.php' class='btn btn-info btn-sm'>Add New Tab</a>";
                echo "<table class='table table-bordered mt-3'>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Internal Navigation</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>";

                // Loop through all the tabs and display them in a table
                while ($tab = $tabs->fetch_assoc()) {
                    echo "<tr>
                            <td>" . htmlspecialchars($tab['title']) . "</td>
                            <td>" . ($tab['internalNav'] ? 'Yes' : 'No') . "</td>
                            <td>
                                <a href='skill_body_view_sections.php?tab_id={$tab['id']}' class='btn btn-info btn-sm'>View Sections</a> |
                                <a href='skill_body_edit_tab.php?id={$tab['id']}' class='btn btn-warning btn-sm'>Edit</a> |
                                <a href='skill_body_delete_tab.php?id={$tab['id']}' class='btn btn-danger btn-sm' onclick='return confirmDelete()'>Delete</a>
                            </td>
                        </tr>";
                }

                echo "</tbody></table>";
            } else {
                // If no tabs are found, prompt the user to add a new tab
                echo "<p>No tabs found. <a href='skill_body_insert_tab.php'>Add a new tab</a> to get started.</p>";
            }

        } catch (PDOException $e) {
            echo "Error fetching tabs: " . $e->getMessage();  // If an error occurs, show the error message
        }
        ?>

    </div>

</body>
</html>
