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

// Fetch FAQ by ID
$id = $_GET['id'];
$query = "SELECT * FROM faqs WHERE id = $id";
$result = mysqli_query($mysqli, $query); // Use $mysqli instead of $conn
$faq = mysqli_fetch_assoc($result);

// Handle the form submission
if (isset($_POST['update_faq'])) {
    $question = mysqli_real_escape_string($mysqli, $_POST['question']); // Use $mysqli
    $answer = mysqli_real_escape_string($mysqli, $_POST['answer']); // Use $mysqli
    $sequence_order = intval($_POST['sequence_order']); // Get the sequence number as an integer
    $category_ids = $_POST['category_ids']; // Array of category IDs

    // Update the FAQ including categories
    $query = "UPDATE faqs SET question = '$question', answer = '$answer', sequence_order = $sequence_order WHERE id = $id";
    if (mysqli_query($mysqli, $query)) { // Use $mysqli
        // First delete existing category links
        $delete_query = "DELETE FROM faqs_manage WHERE faq_id = $id";
        mysqli_query($mysqli, $delete_query); // Use $mysqli

        // Now insert new category links
        foreach ($category_ids as $category_id) {
            $insert_query = "INSERT INTO faqs_manage (faq_id, category_id) VALUES ($id, $category_id)";
            mysqli_query($mysqli, $insert_query); // Use $mysqli
        }

        header('Location: frequently_asked_questions_index.php?status=faq_updated');
        exit;
    } else {
        echo "Error: " . mysqli_error($mysqli); // Use $mysqli for error handling
    }
}

// Fetch all categories for the multi-select dropdown
$categories_query = "SELECT * FROM faqs_categories";
$categories_result = mysqli_query($mysqli, $categories_query); // Use $mysqli

// Fetch current categories linked to this FAQ
$current_categories_query = "SELECT category_id FROM faqs_manage WHERE faq_id = $id";
$current_categories_result = mysqli_query($mysqli, $current_categories_query); // Use $mysqli
$selected_categories = [];
while ($row = mysqli_fetch_assoc($current_categories_result)) {
    $selected_categories[] = $row['category_id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit FAQ</title>
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
</head>
<body>
    <?php include('include/container.php'); ?>
	<?php include("top_menu.php"); ?>
    
    <div class="container mt-5">
        <div class="container card-body">
            <div class="card-header">
                <h1>Edit FAQ</h1>
            </div>
            <div class="mt-3">
                <a href="frequently_asked_questions_add.php" class="btn btn-success">Add New FAQ</a>
                <a href="frequently_asked_questions_cat_index.php" class="btn btn-success right" style="float: right !important;">FAQ Categories</a>
            </div>

            <div class="card-body mt-5">
                <form action="frequently_asked_questions_edit.php?id=<?php echo $id; ?>" method="post">
                    <div class="form-group">
                        <label for="question">Question</label>
                        <input type="text" name="question" class="form-control" value="<?php echo htmlspecialchars($faq['question']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="answer">Answer</label>
                        <textarea name="answer" class="form-control" id="answer" required><?php echo htmlspecialchars($faq['answer']); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="sequence_order">Sequence Order</label>
                        <input type="number" name="sequence_order" class="form-control" required min="1" value="<?php echo $faq['sequence_order']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="category_ids">Categories</label>
                        <select name="category_ids[]" class="form-control" multiple required>
                            <?php
                            while ($row = mysqli_fetch_assoc($categories_result)) {
                                $selected = in_array($row['id'], $selected_categories) ? 'selected' : '';
                                echo "<option value='{$row['id']}' $selected>{$row['name']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" name="update_faq" class="btn btn-primary">Update FAQ</button>
                    <a href="frequently_asked_questions_index.php" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap and Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <script>
        CKEDITOR.replace('answer');
    </script>
    <!-- Initialize CKEditor 5 -->
    <script>
        ClassicEditor
            .create(document.querySelector('#answer'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>
</html>
