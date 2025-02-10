<?php 
include_once 'config/Database.php';
include_once 'class/User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

if($user->loggedIn()) {	
	header("Location: gallery.php");	
}

$loginMessage = '';
if(!empty($_POST["login"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {	
	$user->email = $_POST["email"];
	$user->password = $_POST["password"];	
	if($user->login()) {
		header("Location: gallery.php");	
	} else {
		$loginMessage = 'Invalid login! Please try again.';
	}
}

include('include/header.php');
?>
<title>Gallery System</title>
<div class="container">	
	<h2>Gallery System</h2>	
	<br>
	<br>	
	<div class="col-md-4">			
		<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
			<fieldset>
				<legend>Login</legend>
				<?php if ($loginMessage != '') { ?>
					<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $loginMessage; ?></div>                            
				<?php } ?>
				<div class="form-group">
					<label for="name">Email</label>
					<input type="text" name="email" placeholder="Your Email" required class="form-control" />
				</div>	
				<div class="form-group">
					<label for="name">Password</label>
					<input type="password" name="password" placeholder="Your Password" required class="form-control" />
				</div>	
				<div class="form-group">
					<input type="submit" name="login" value="Login" class="btn btn-primary" />
				</div>
			</fieldset>
		</form>			
	</div>
	
</div>
<?php include('include/footer.php');?>
