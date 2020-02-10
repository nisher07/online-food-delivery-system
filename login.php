<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
	<body>
		<div class="loginbox">
			<img src="images/site_images/avatar.png" class="avatar">
			<h1>Login Here</h1>
			<?php 
				if( isset( $_GET['error'] ) ) {
					if( $_GET['error'] == 'user_mismatch' ) {
						echo '<p style="color: red;">User not found</p>';
					}
				}
			?>
			<form action="do_login.php" method="POST">
				<p>Email</p>
				<input type="text" name="email" placeholder="Enter Email">
				<p>Password</p>
				<input type="Password" name="password" placeholder="Enter Password">
				<input type="submit" name="" value="Login">
				<a href="#">Forgot your password?</a> <br>
				<a href="registration.php">Don't have an account?</a>
			</form>
		</div>
	</body>
</html>