<?php

include('anzsco_occupations_logix.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skilled Occupation List</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="image-gallery/dist/css/lightbox.min.css">
    <script type="text/javascript" src="image-gallery/dist/js/lightbox-plus-jquery.min.js"></script>
    <script type="text/javascript" src="image-gallery/js/gallery.js"></script>
    <link type="text/css" rel="stylesheet" href="image-gallery/css/style.css" />    
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
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "pageLength": 50
            });
        });
    </script>
</head>
<body>
<?php include('include/container.php'); ?>
<div class="container mt-5">
    <?php include("top_menu.php"); ?>

    <h2><?php echo $edit ? "Edit Australia Skill Assessment" : "Insert New Australia Skill Assessment"; ?></h2>
    <form method="post" action="">
        <div class="row">
            <div class="col-md-6">
                <?php if ($edit): ?>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                <?php endif; ?>

                <div class="form-group">
                    <label for="anzsco_code">ANZSCO Code:</label>
                    <input type="text" name="anzsco_code" id="anzsco_code" class="form-control" value="<?php echo htmlspecialchars($anzsco_code); ?>" required>
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo htmlspecialchars($name); ?>" required>
                </div>
				  <div class="form-group">
                    <label for="list">List:</label>
                    <input type="text" name="list" id="list" class="form-control" value="<?php echo htmlspecialchars($list); ?>" required>
                </div>
            </div>

            <div class="col-md-6">
              

                <div class="form-group">
                    <label for="assessing_authority">Assessing Authority:</label>
                    <input type="text" name="assessing_authority" id="assessing_authority" class="form-control" value="<?php echo htmlspecialchars($assessing_authority); ?>" required>
                </div>

                <div class="form-group">
                    <label for="skill_level">Skill Level:</label>
                    <input type="text" name="skill_level" id="skill_level" class="form-control" value="<?php echo htmlspecialchars($skill_level); ?>" required>
                </div>              
            </div>		
        </div>
        <div class="form-group mt-5">
            <input type="submit" name="<?php echo $edit ? 'update' : 'insert'; ?>" class="btn btn-primary" value="<?php echo $edit ? 'Update' : 'Insert'; ?>">
            <a href="anzsco_occupations_index.php" class="btn btn-default">Cancel</a>
        </div>
    </form>

    <h2>Existing Australia Skill Assessment</h2>
    <div class="table-responsive">
        <table border="1" id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>S.No.</th>
					<th>ANZSCO Code</th>
					<th>Name</th>
					<th>List</th>
					<th>Assessing Authority</th>
					<th>Skill Level</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$database = new Database();
				$conn = $database->getConnection();

				$sql = "SELECT id, anzsco_code, name, list, assessing_authority, skill_level FROM anzsco_occupations";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					$sno = 1; // Initialize the serial number counter
					while ($row = $result->fetch_assoc()) {
						echo "<tr>
							<td>" . $sno++ . "</td> <!-- Replace ID with S.No. -->
							<td><a href='anzsco_occupations_details.php?anzsco_code=" . urlencode($row["anzsco_code"]) . "'>" . htmlspecialchars($row["anzsco_code"]) . "</a></td>							
							<td>" . htmlspecialchars($row["name"]) . "</td>
							<td>" . htmlspecialchars($row["list"]) . "</td>
							<td>" . htmlspecialchars($row["assessing_authority"]) . "</td>
							<td>" . htmlspecialchars($row["skill_level"]) . "</td>
							<td>
								<a href='?edit_id=" . $row["id"] . "' class='btn btn-primary'>Edit</a> |
								<form method='post' action='' style='display:inline;'>
									<input type='hidden' name='delete_id' value='" . $row["id"] . "'>
									<input type='submit' name='delete' value='Delete' onclick='return confirm(\"Are you sure?\");'>
								</form>
							</td>
						</tr>";
					}
				} else {
					echo "<tr><td colspan='8'>No records found</td></tr>";
				}

				$conn->close();
				?>
			</tbody>
		</table>

    </div>
</div>
</body>
</html>
