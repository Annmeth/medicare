<?php include('includes/functions.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Medical Supplies & Equipment Management System </title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="icon" type="image/x-icon" href="./images/favicon.ico">
</head>

<body>

	<?php
	// When form submitted, check and create user session.
	if (isset($_POST['username'])) {
		$username = stripslashes($_REQUEST['username']);    // removes backslashes
		$username = mysqli_real_escape_string($db, $username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($db, $password);
		// Check user is exist in the database
		$query    = "SELECT * FROM `hod` WHERE username='$username'
                     AND password='" . md5($password) . "'";
		$result = mysqli_query($db, $query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if ($rows == 1) {
			$_SESSION['username'] = $username;
			// Redirect to user dashboard page
			header("Location: items.php");
		} else {
			//echo "<script>alert('Invalid Username or Password')document.location = login.php;</script>";

			echo "<script>alert('Invalid Username and Password. Please Login in again');
						document.location='login.php'</script>";
			//echo '    document.location = login.php;';
			//header("Location: login.php");



		}
		//header("Location: login.php");
	} else {

	?>
		<div class="header">
			<h4><a href="../index.php"> MEDICAL SUPPLIES & EQUIPMENT MANAGEMENT SYSTEM (MSEMS) </a></h4>
		</div>
		<form method="post" action="login.php">

			<?php echo display_error(); ?>

			<div class="input-group">
				<label>Username</label>
				<input type="varchar" name="username">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="login_btn">Login</button>
			</div>

		</form>

	<?php
	}
	?>




</body>

</html>