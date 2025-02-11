<?php
include_once 'config/Database.php';
include_once 'class/User.php';
include_once 'class/Gallery.php';

$message = '';

// Check if the user is not logged in
if (!isset($_SESSION['userid'])) {
    // Redirect to the login page
    header("Location: index.php");
    exit();
}

include('include/header.php');

// Create a new Database instance
$database = new Database();
// Get the database connection
$db = $database->getConnection();
// Check if the connection is successful
if (!$db) {
    die("Connection failed: " . $database->getError());
}if(!empty($_GET['id'])){	$sql_get_details = "SELECT * FROM user_gallery where id = ".$_GET['id'];	$data = $db->query($sql_get_details);	$res = $data->fetch_assoc(); }

//$gallery = new Gallery($db);

// Check for form submission
if (isset($_POST["upload"]) && $_SESSION["userid"]) {
    $name = $_POST["name"];
    $user_id = $_POST["user_id"];
    $occupation = $_POST["occupation"];
    $details = $_POST["details"];
    $category = $_POST["category"];	$_POST['approval_date'] = $_POST['approval_date'] ? strtotime($_POST['approval_date']) :time(); 	$approval_date = date("Y-m-d H:i:s", $_POST['approval_date']);
        if ($_FILES["uploaded_file"]["name"]) {		// Generate a unique filename by appending a timestamp to the original filename		$image_name = time() . '_' . $_FILES["uploaded_file"]["name"];		// Move the uploaded file to the uploads directory with the unique filename		move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], "uploads/" . $image_name);		// If an ID is provided, update the existing record		if (isset($_POST['id']) && !empty($_POST['id'])) {			$id = $_POST['id'];			$q = "UPDATE user_gallery 				  SET user_id = '$user_id', 					  name = '$name', 					  details = '$details', 					  image = '$image_name', 					  category = '$category', 					  approval_date = '$approval_date', 					  occupation = '$occupation' 				  WHERE id = '$id'";		} else {			// If no ID is provided, insert a new record			$q = "INSERT INTO user_gallery (user_id, name, details, image, category, occupation,approval_date) 				  VALUES ('$user_id', '$name', '$details', '$image_name', '$category', '$occupation','$approval_date')";		}	} else {		// If no file is uploaded, handle the update or insert without the image field		if (isset($_POST['id']) && !empty($_POST['id'])) {			$id = $_POST['id'];			$q = "UPDATE user_gallery 				  SET user_id = '$user_id', 					  name = '$name', 					  details = '$details', 					  category = '$category', 					  approval_date = '$approval_date', 					  occupation = '$occupation' 				  WHERE id = '$id'";		} else {			$q = "INSERT INTO user_gallery (user_id, name, details, category, occupation,approval_date) 				  VALUES ('$user_id', '$name', '$details', '$category', '$occupation','$approval_date')";		}	} 
    $qry = $db->query($q);

    if ($qry === TRUE) {
        $message = "Image uploaded successfully.";
        // Use JavaScript to display a popup message and redirect
        echo "<script>alert('Image uploaded successfully.'); window.location.href='upload.php';</script>";
        exit(); // Ensure that no further code is executed after the redirect
    } else {
        $message = "Error uploading image.";
    }
}
?>

<!-- Rest of the code remains unchanged -->


<!-- Rest of the code remains unchanged -->


<title>Gallery System</title>
<?php include('include/container.php');?>

<div class="container">    
    <?php include("top_menu.php"); ?>
    <h2> Positive Skills Assessment / Upload Image</h2>    
    <br><br>
    <?php 
    if ($message != 'Image is upoladed') { 
        echo "<div class='text-info'><strong>".$message."</strong></div><br>";                       
    } 
    ?>
	<div><a href="gallery.php" class="btn btn-primary"><strong>Gallery</strong></a> <a href="occupation.php" class="btn btn-primary"><strong>Add Occupation</strong></a></div>
    <form role="form" enctype='multipart/form-data' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>                            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php echo $res['name'] ?? ''; ?>" require placeholder="Name" class="form-control" />
            </div>    
            <input type="hidden" name="user_id" id="user_id" placeholder="user_id" class="form-control" value="<?php echo $_SESSION['userid']; ?>" readonly />						 <input type="hidden" name="id" value="<?php echo $res['id'] ?? ''; ?>"  />

            <div class="form-group">
                <label for="occupation">Select Occupation:</label>				<?php				$sql_select = "SELECT * FROM occupations ORDER BY occupation_name ASC"; 				$result_select = $db->query($sql_select);				?>
                <select id="occupationSelect__" name="occupation" class="form-control">					<?php					while ($row = $result_select->fetch_assoc()) {						?>						<option value="<?php echo $row['id']; ?>" <?php echo ((!empty($res['occupation'])) && $row['id']==$res['occupation']) ?'selected':'' ?> ><?php echo $row['ANZSCO']; ?> - <?php echo $row['occupation_name']; ?></option>						<?php					}
                    ?>
                </select>
            </div>			<div class="form-group">                <label for="details">Approval Date(M/D/Y):</label>                <input 					type="datetime-local" 					name="approval_date" 					value="<?php echo isset($res['approval_date']) ? date('Y-m-d\TH:i', strtotime($res['approval_date'])) : ''; ?>" 					placeholder="Approval Date" 					class="form-control" 				/>            </div>			
            <div class="form-group">
                <label for="details">Details:</label>
                <input type="text" name="details" id="details" value="<?php echo $res['details'] ?? ''; ?>" placeholder="Details" class="form-control" />
            </div>    
            
            <div class="form-group">
                <label for="name">Category:</label>
                <select name="category" id="category" class="form-control">
                    <option <?php echo ((!empty($res['category'])) && $res['category']=="ACS_LATEST") ?'selected':'' ?> value="ACS_LATEST">ACS_LATEST</option>
                    <option <?php echo ((!empty($res['category'])) && $res['category']=="ENGINEERS_AUSTRALIA") ?'selected':'' ?> value="ENGINEERS_AUSTRALIA">ENGINEERS_AUSTRALIA</option>
					<option <?php echo ((!empty($res['category'])) && $res['category']=="INVITES_PNP_CANADA_AUSTRALIA") ?'selected':'' ?> value="INVITES_PNP_CANADA_AUSTRALIA">INVITES PNP-CANADA / AUSTRALIA</option>
                    <option <?php echo ((!empty($res['category'])) && $res['category']=="LATEST_CPA_ICAA") ?'selected':'' ?> value="LATEST_CPA_ICAA">LATEST CPA ICAA</option>
                    <option <?php echo ((!empty($res['category'])) && $res['category']=="NAATI") ?'selected':'' ?> value="NAATI">NAATI</option>
                    <option <?php echo ((!empty($res['category'])) && $res['category']=="PTE_IELTS") ?'selected':'' ?> value="PTE_IELTS">PTE IELTS</option>
                    <option <?php echo ((!empty($res['category'])) && $res['category']=="VETASSESS_LATEST") ?'selected':'' ?> value="VETASSESS_LATEST">VETASSESS LATEST</option>
                    <option <?php echo ((!empty($res['category'])) && $res['category']=="VISA_GRANTS") ?'selected':'' ?> value="VISA_GRANTS">VISA GRANTS</option>
                    <option <?php echo ((!empty($res['category'])) && $res['category']=="IML") ?'selected':'' ?> value="IML">IML</option>
                    
                    <!-- Add other categories as needed -->
                </select>
            </div>    
            <div class="form-group">
                <label for="name">Choose Image:</label>
                <input type="file" name="uploaded_file" placeholder="Choose file" accept=".jpg, .jpeg, .png" class="form-control" />
            </div>    
            <div class="form-group">
                <input type="submit" name="upload" value="<?php echo (empty($res['id'])) ? 'Upload':'Update'; ?>" class="btn btn-primary" />
            </div>
        </fieldset>
    </form>
    
    <span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
</div>

<?php include('include/footer.php');?>
 
