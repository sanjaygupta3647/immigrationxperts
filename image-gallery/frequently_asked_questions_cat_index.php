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
$mysqli = $database->getConnection(); // Correctly using $mysqli as the connection

// Fetch all categories
$categories_query = "SELECT * FROM faqs_categories";
$categories_result = mysqli_query($mysqli, $categories_query); // Use $mysqli instead of $conn
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
</head>
<body>
    <?php include('include/container.php'); ?>
    <?php include("top_menu.php"); ?>
    <div class="container mt-5">
	
	<!-- Add New FAQ Button -->
   <div class="d-flex justify-content-between mb-4">
		<a href="frequently_asked_questions_index.php" class="btn btn-success">FAQ</a>
	</div>

    <!-- Display success/error messages -->
    <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Operation was successful!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php elseif (isset($_GET['error'])): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Error: <?php echo htmlspecialchars($_GET['error']); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    </div>
          
    <div class="container card-body">
        <div class="card-header">
           <h1>Manage FAQ Categories</h1>
        </div>
		
		<div class="card">
        <div class="card-body">
            <!-- Form to add or edit category -->
            <form action="frequently_asked_questions_cat_add.php" method="POST">
                <?php
                // Check if we are editing a category
                if (isset($_GET['id'])) {
                    $id = intval($_GET['id']);
                    $category_query = "SELECT * FROM faqs_categories WHERE id = $id";
                    $category_result = mysqli_query($mysqli, $category_query); // Use $mysqli instead of $conn
                    
                    if ($category_result && mysqli_num_rows($category_result) > 0) {
                        $category = mysqli_fetch_assoc($category_result);
                        $name = htmlspecialchars($category['name']);
                    } else {
                        // Redirect if no category found
                        header("Location: frequently_asked_questions_cat_index.php?error=Category not found.");
                        exit;
                    }
                } else {
                    $id = '';  // Not editing, so id is empty
                    $name = '';  // No category name
                }
                ?>
                
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Category Name" value="<?php echo $name; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary"><?php echo $id ? 'Update Category' : 'Add Category'; ?></button>
                <a href="frequently_asked_questions_cat_index.php" class="btn btn-secondary">Cancel</a> <!-- Cancel Button -->
            </form>
        </div>
    </div>
        <div class="card-body">
             <table class="table responsive table-hover text-center">
                <thead>
                    <tr>
                        <th style="text-align: center;">ID</th>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($category = mysqli_fetch_assoc($categories_result)): ?>
                        <tr>
                            <td><?php echo $category['id']; ?></td>
                            <td><?php echo htmlspecialchars($category['name']); ?></td>
                            <td>
                                <a href="frequently_asked_questions_cat_index.php?id=<?php echo $category['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                <a href="frequently_asked_questions_cat_delete.php?id=<?php echo $category['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category?');">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Include Bootstrap and Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
