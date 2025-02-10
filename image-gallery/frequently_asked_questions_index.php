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
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

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
        <div class="mt-3">
            <a href="frequently_asked_questions_add.php" class="btn btn-success">Add New FAQ</a>
            <a href="frequently_asked_questions_cat_index.php" class="btn btn-success right" style="float: right !important;">FAQ Categories</a>
        </div>

        <?php
        // Fetch FAQs with categories from the database
        $query = "SELECT f.id, f.question, f.answer, f.sequence_order, GROUP_CONCAT(c.name) AS categories 
                  FROM faqs f 
                  LEFT JOIN faqs_manage fc ON f.id = fc.faq_id 
                  LEFT JOIN faqs_categories c ON fc.category_id = c.id 
                  GROUP BY f.id 
                  ORDER BY f.id DESC";
        $result = mysqli_query($mysqli, $query);

        // Check if query returned any result
        if (!$result) {
            echo "<div class='alert alert-danger'>Error: " . mysqli_error($mysqli) . "</div>";
            exit;
        }
        ?>

        <div class="table-responsive">
            <table id="example" class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Sequence</th>
                        <th>Question</th>
                        <th>Ans</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (mysqli_num_rows($result) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['sequence_order']; ?></td>
                            <td><?php echo htmlspecialchars($row['question']); ?></td>
                            <?php
                            // Split the answer into an array of words
                            $words = explode(' ', $row['answer']);
                            $limited_answer = implode(' ', array_slice($words, 0, 20)); // First 20 words
                            $remaining_answer = implode(' ', array_slice($words, 20)); // Remaining words
                            ?>
                            <td>
                                <span class="limited-text"><?php echo $limited_answer; ?></span>
                                <?php if (count($words) > 20): ?>
                                    <span class="dots">...</span>
                                    <span class="more-text" style="display: none;"><?php echo $remaining_answer; ?></span>
                                    <a href="#" class="read-more">Read more</a>
                                <?php endif; ?>
                            </td>
                            <td><?php echo htmlspecialchars($row['categories'] ?? 'No Category'); ?></td>
                            <td>
                                <a href="frequently_asked_questions_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="frequently_asked_questions_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" 
                                   onclick="return confirm('Are you sure you want to delete this FAQ?')">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="5" class="text-center">No FAQs found.</td></tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var readMoreLinks = document.querySelectorAll('.read-more');

        readMoreLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                // Find the parent 'td' element
                var td = this.closest('td');

                // Select the '.dots' and '.more-text' elements within this 'td'
                var dots = td.querySelector('.dots');
                var moreText = td.querySelector('.more-text');
                
                if (dots && moreText) { // Ensure both elements are found
                    if (dots.style.display === 'none' || dots.style.display === '') {
                        dots.style.display = 'none';
                        moreText.style.display = 'inline';
                        this.textContent = 'Read less';
                    } else {
                        dots.style.display = 'inline';
                        moreText.style.display = 'none';
                        this.textContent = 'Read more';
                    }
                }
            });
        });
    });
    </script>
    
      <!-- template js -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    
    <script>
    $(document).ready(function() {
        $('#example').DataTable({
            "pageLength": 5 // Set the default page length to 50
        });
    });
    </script>
</body>
</html>
