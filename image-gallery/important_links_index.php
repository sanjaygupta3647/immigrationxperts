<?php
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

// Include necessary files
include_once 'config/Database.php';

// Create a new instance of the Database class and get the connection
$database = new Database();
$conn = $database->getConnection(); // Ensure $conn is defined here

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Important Links</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <!-- CKEditor 5 -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
</head>
<body>
<?php include('include/container.php'); ?>
<?php include("top_menu.php"); ?>
<div class="container mt-5">
    <h2>Manage Important Links</h2>
    
    <div class="mt-3">
        <a href="important_links_add.php" class="btn btn-success">Add New Link</a>
    </div>

    <?php
    // Fetch data from `important_links` table
    $query = "SELECT id, title, slug, content, created_at FROM important_links ORDER BY created_at DESC";
    $result = mysqli_query($conn, $query);

    // Check if query returned any result
    if (!$result) {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
        exit;
    }
    ?>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Content (Preview)</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($result) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['title']); ?></td>
                            <td><?php echo htmlspecialchars($row['slug']); ?></td>

                            <?php
                            // Limit the content preview to 30 words
                            $words = explode(' ', strip_tags($row['content']));
                            $limited_content = implode(' ', array_slice($words, 0, 30)); // First 30 words
                            $remaining_content = implode(' ', array_slice($words, 30)); // Remaining words
                            ?>

                            <td>
                                <?php echo htmlspecialchars($limited_content); ?>
                                <?php if (count($words) > 30): ?>
                                    <span class="dots">...</span>
                                    <span class="more-text" style="display: none;"><?php echo htmlspecialchars($remaining_content); ?></span>
                                    <a href="#" class="read-more">Read more</a>
                                <?php endif; ?>
                            </td>

                            <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                            <td>
                                <a href="important_links_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="important_links_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" 
                                   onclick="return confirm('Are you sure you want to delete this link?')">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="5" class="text-center">No links found.</td></tr>
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

                var td = this.closest('td');
                var dots = td.querySelector('.dots');
                var moreText = td.querySelector('.more-text');

                if (dots && moreText) {
                    if (dots.style.display === 'none') {
                        dots.style.display = 'inline';
                        moreText.style.display = 'none';
                        this.textContent = 'Read more';
                    } else {
                        dots.style.display = 'none';
                        moreText.style.display = 'inline';
                        this.textContent = 'Read less';
                    }
                }
            });
        });
    });
</script>

</body>
</html>
