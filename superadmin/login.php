<?php include('includes/functions.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Medical Supplies & Equipment Management System(MSEMS) </title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="icon" type="image/x-icon" href="./images/favicon.ico">

</head>

<body>
	<div class="header">
		<h4><a href="../index.php"> MEDICAL SUPPLIES & EQUIPMENT MANAGEMENT SYSTEM (MSEMS) </a></h4>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>

</html>