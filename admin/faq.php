<?php
// Close the database connection
include('main/header.php');


// Function to fetch all FAQs
function getAllFAQs($conn) {
    $sql = "SELECT id, question, answer, category FROM faq";
    $result = $conn->query($sql);
    $faqs = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $faqs[] = $row;
        }
    }
    return $faqs;
}

// Function to fetch a FAQ by ID
function getFaqById($conn, $id) {
    $stmt = $conn->prepare("SELECT `id`, `question`, `answer`, `category` FROM `faq` WHERE `id` = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null; // No FAQ found with the given ID
    }
}

// Function to insert a FAQ
function insertFAQ($conn, $question, $answer, $category) {
    $stmt = $conn->prepare("INSERT INTO faq (question, answer, category) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $question, $answer, $category);
    $stmt->execute();
    $stmt->close();
}

// Function to update a FAQ
function updateFAQ($conn, $id, $question, $answer, $category) {
    $stmt = $conn->prepare("UPDATE faq SET question = ?, answer = ?, category = ? WHERE id = ?");
    $stmt->bind_param("sssi", $question, $answer, $category, $id);
    $stmt->execute();
    $stmt->close();
}

// Function to delete a FAQ
function deleteFAQ($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM faq WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Fetch all FAQs
$faqs = getAllFAQs($conn);

// Check if 'edit' parameter is present in the URL
if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['id'])) {
    $editFaq = getFaqById($conn, $_GET['id']);
}
// Within your POST request handling section
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['action'] === 'insert') {
        insertFAQ($conn, $_POST['question'], $_POST['answer'], $_POST['category']);
    } elseif ($_POST['action'] === 'update') {
        // Ensure $conn is provided as an argument to updateFAQ()
        updateFAQ($conn, $_POST['record_id'], $_POST['question'], $_POST['answer'], $_POST['category']);
    } elseif ($_POST['action'] === 'delete') {
        deleteFAQ($conn, $_POST['record_id']);
    }

    // Fetch all FAQs after the action
    $faqs = getAllFAQs($conn);
}

?>
	<body>
        <!-- LOADER -->
		<div id="loader">
			<img src="build/assets/images/media/loader.svg" alt="">
		</div>
		<!-- END LOADER -->

        <!-- PAGE -->
		<div class="page">
			<?php
			include('main/top_header.php');
			// Close the database connection
			include('main/leftbar.php');

			?>
			
            <!-- MAIN-CONTENT -->
			<div class="main-content app-content">

                
                <div class="container-fluid">

                    <!-- Page Header -->
                    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                        <h1 class="page-title fw-semibold fs-18 mb-0">FAQ</h1>                        
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        FAQ
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row gy-4">
                                         <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
											<input type="hidden" name="action" value="<?php echo isset($editFaq) ? 'update' : 'insert'; ?>">
											<?php if (isset($editFaq)) : ?>
												<input type="hidden" name="record_id" value="<?php echo $editFaq['id']; ?>">
											<?php endif; ?>
										<div class="col-xl-12">
                                        
										  <div class='form-group mb-4'>
											<label for='question'>Question:</label>
											<input type="text" class="form-control" name="question" placeholder="Question" value="<?php echo isset($editFaq) ? $editFaq['question'] : ''; ?>" >
										</div>

										<div class='form-group mb-4'>
											<label for='answer'>Answer:</label>
											<textarea id="answer" name="answer"><?php echo isset($editFaq) ? $editFaq['answer'] : ''; ?></textarea>
										</div>

										<div class='form-group mb-4'>
											<label for='category'>Category:</label>
											<input type="text" class="form-control" name="category" placeholder="Category" value="<?php echo isset($editFaq) ? $editFaq['category'] : ''; ?>">
										</div>
										
										<button type='submit' class='btn btn-primary'><?php echo isset($editFaq) ? 'Update FAQ' : 'Add FAQ'; ?></button>
										</form>
										
										
                                    </div>
                                </div>
                             </div>
                        </div>
						<div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Products Overview
                                    </div>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="container mt-5">
    <h2>FAQs</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $serial = 1; ?>
            <?php foreach ($faqs as $faq) : ?>
                <tr>
                    <td><?php echo $serial; ?></td>
                    <td><?php echo $faq['question']; ?></td>
                    <td><?php echo $faq['answer']; ?></td>
                    <td><?php echo $faq['category']; ?></td>
                    <td>
                        <a href="?action=edit&id=<?php echo $faq['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="d-inline">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="record_id" value="<?php echo $faq['id']; ?>">
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $serial++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

                                </div>
                                
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- End:: row-1 -->
					
					

                </div>
            </div>
			<!-- END MAIN-CONTENT -->
			</div>
			
			<?php
			// Close the database connection
			include('main/footer.php');

			?>
	