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
$mysqli = $database->getConnection(); // Use this connection

// Handle the form submission
if (isset($_POST['add_faq'])) {
    $question = mysqli_real_escape_string($mysqli, $_POST['question']); // Escape special characters in question
    $answer = mysqli_real_escape_string($mysqli, $_POST['answer']); // Escape special characters in answer
    $sequence_order = intval($_POST['sequence_order']); // Get the sequence number as an integer
    $category_ids = $_POST['category_ids']; // Array of category IDs

    // Insert the new FAQ into the faqs table
    $query = "INSERT INTO faqs (question, answer, sequence_order) VALUES ('$question', '$answer', $sequence_order)";
    
    if (mysqli_query($mysqli, $query)) { // Use $mysqli instead of $conn
        // Get the ID of the newly inserted FAQ
        $faq_id = mysqli_insert_id($mysqli);

        // Now insert the category links into the faqs_manage table
        if (!empty($category_ids)) {
            foreach ($category_ids as $category_id) {
                // Make sure the category_id is an integer to prevent SQL injection
                $category_id = intval($category_id);
                $insert_query = "INSERT INTO faqs_manage (faq_id, category_id) VALUES ($faq_id, $category_id)";
                if (!mysqli_query($mysqli, $insert_query)) {
                    echo "Error: " . mysqli_error($mysqli); // Error handling
                }
            }
        }

        header('Location: frequently_asked_questions_index.php?status=faq_added');
        exit;
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
}

// Fetch the last sequence order from the faqs table
$last_sequence_query = "SELECT MAX(sequence_order) AS last_sequence FROM faqs";
$last_sequence_result = mysqli_query($mysqli, $last_sequence_query);
$last_sequence = mysqli_fetch_assoc($last_sequence_result);
$last_sequence_order = $last_sequence['last_sequence'] ?? 0; // Default to 0 if there are no FAQs

// Fetch all categories for the multi-select dropdown
$categories_query = "SELECT * FROM faqs_categories";
$categories_result = mysqli_query($mysqli, $categories_query); // Use $mysqli instead of $conn
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New FAQ</title>
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
    </div>
          
    <div class="container card-body">
        <div class="card-header">
            <h1>Add New FAQ</h1>
        </div>
        <div class="card-body">
            <form id="faq-form" method="POST" action="">
                <div class="form-group">
                    <label for="question">Question:</label>
                    <input type="text" class="form-control" name="question" required>
                </div>
                <div class="form-group">
                    <label for="answer">Answer:</label>
                    <!-- No 'required' on the hidden textarea -->
                    <textarea id="answer" class="form-control" name="answer"></textarea>
                </div>
               <label for="sequence_order">Sequence Order (Last Used: <?php echo $last_sequence_order; ?>):</label> </br>
                    <label for="sequence_order">Sequence Order:</label>
                    <input type="number" class="form-control" name="sequence_order" required>
                </div>
                <div class="form-group">
                    <label for="category_ids">Categories:</label>
                    <select name="category_ids[]" class="form-control" multiple required>
                        <?php while ($category = mysqli_fetch_assoc($categories_result)): ?>
                            <option value="<?php echo $category['id']; ?>"><?php echo htmlspecialchars($category['name']); ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <button type="submit" name="add_faq" class="btn btn-primary">Add FAQ</button>
                <a href="frequently_asked_questions_index.php" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>

    <!-- Include Bootstrap and Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    CKEDITOR.replace('answer');
</script>
     <script>
        document.addEventListener('DOMContentLoaded', () => {
            ClassicEditor
                .create(document.querySelector('#answer'))
                .then(editor => {
                    const form = document.querySelector('#faq-form');
                    
                    // Ensure CKEditor updates the textarea value before form submission
                    form.addEventListener('submit', (e) => {
                        // Sync CKEditor content with the textarea
                        document.querySelector('#answer').value = editor.getData();
                        
                        // Ensure the content is validated (not empty)
                        if (editor.getData().trim() === '') {
                            e.preventDefault(); // Prevent form submission
                            alert('Please fill in the answer field.');
                        }
                    });
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
</body>
</html>

