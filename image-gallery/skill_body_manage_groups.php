<?php
// Include database configuration
include_once 'config/Database.php';
$database = new Database();
$mysqli = $database->getConnection();

// Handle adding a new group
if (isset($_POST['action']) && $_POST['action'] == 'create') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    
    $query = "INSERT INTO skill_body_groups (name, description) VALUES (?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('ss', $name, $description);
    $stmt->execute();
    $stmt->close();
}

// Fetch all groups
$query = "SELECT * FROM skill_body_groups";
$groups = $mysqli->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Groups</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

 <!-- Include the container or top menu first -->
    <?php include('include/container.php'); ?>  <!-- Make sure your top menu is included here -->

    <div class="container">
        <h2>Manage Groups</h2>
        <form method="POST" action="manage_groups.php">
            <input type="hidden" name="action" value="create">
            <div class="form-group">
                <label for="name">Group Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Group Description</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Group</button>
        </form>

        <h3 class="mt-4">Existing Groups</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($group = $groups->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $group['name']; ?></td>
                        <td><?php echo $group['description']; ?></td>
                        <td>
                            <a href="edit_group.php?id=<?php echo $group['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete_group.php?id=<?php echo $group['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
