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
}

$gallery = new Gallery($db);

// Check for form submission
if (isset($_POST["upload"]) && $_SESSION["userid"]) {
    $name = $_POST["name"];
    $user_id = $_POST["user_id"];
    $occupation = $_POST["occupation"];
    $details = $_POST["details"];
    $category = $_POST["category"];
    
    // Generate a unique filename by appending a timestamp to the original filename
    $image_name = time() . '_' . $_FILES["uploaded_file"]["name"];

    // Move the uploaded file to the uploads directory with the unique filename
    move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], "uploads/" . $image_name);

    $q = "INSERT INTO user_gallery (user_id, name, details, image, category, occupation) 
          VALUES ('$user_id', '$name', '$details', '$image_name', '$category', '$occupation')";

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
                <input type="text" name="name" id="name" require placeholder="Name" class="form-control" />
            </div>    
            <input type="hidden" name="user_id" id="user_id" placeholder="user_id" class="form-control" value="<?php echo $_SESSION['userid']; ?>" readonly />

            <div class="form-group">
                <label for="occupation">Select Occupation:</label>
                <select id="occupationSelect" name="occupation" class="form-control">
                    <!-- Options will be dynamically added here -->
                </select>
            </div>    
            <div class="form-group">
                <label for="details">Details:</label>
                <input type="text" name="details" id="details" placeholder="Details" class="form-control" />
            </div>    
            
            <div class="form-group">
                <label for="name">Category:</label>
                <select name="category" id="category" class="form-control">
                    <option value="ACS_LATEST">ACS_LATEST</option>
                    <option value="ENGINEERS_AUSTRALIA">ENGINEERS_AUSTRALIA</option>
					<option value="INVITES_PNP_CANADA_AUSTRALIA">INVITES PNP-CANADA / AUSTRALIA</option>
                    <option value="LATEST_CPA_ICAA">LATEST CPA ICAA</option>
                    <option value="NAATI">NAATI</option>
                    <option value="PTE_IELTS">PTE IELTS</option>
                    <option value="VETASSESS_LATEST">VETASSESS LATEST</option>
                    <option value="VISA_GRANTS">VISA GRANTS</option>
                    <option value="IML">IML</option>
                    
                    <!-- Add other categories as needed -->
                </select>
            </div>    
            <div class="form-group">
                <label for="name">Choose Image:</label>
                <input type="file" name="uploaded_file" placeholder="Choose file" accept=".jpg, .jpeg, .png" class="form-control" />
            </div>    
            <div class="form-group">
                <input type="submit" name="upload" value="upload" class="btn btn-primary" />
            </div>
        </fieldset>
    </form>
    
    <span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
</div>

<?php include('include/footer.php');?>
<script>
// AJAX request to fetch occupations
$.ajax({
    url: 'get_occupations.php',
    type: 'GET',
    dataType: 'json',
    success: function(data) {
        $('#occupationSelect').empty(); // Clear existing options
        if (Array.isArray(data) && data.length > 0) {
            $.each(data, function(index, occupation) {
                // Create a new option element
                var option = $('<option>');

                // Set the value as the occupation ID and text as occupation name
                option.val(occupation.id); // Store ID as value
                option.text(occupation.ANZSCO + ' - ' + occupation.occupation_name); // Combine occupation name and 

                // Append the option to the select element
                $('#occupationSelect').append(option);
            });
        } else {
            console.log('No occupations data found.');
        }
    },
    error: function(xhr, status, error) {
        console.error('Error fetching occupations:', error);
    }
});


</script>
