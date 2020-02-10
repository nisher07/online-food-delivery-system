<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		<link rel="stylesheet" type="text/css" href="css/Reg.css">
	</head>
	<body>
		<div class="loginbox">
			<img src="avatar.png" class="avatar">
			<h1>Sign Up Here</h1>
			<?php if( isset( $_GET['error'] ) ) { 
				if( $_GET['error'] == 'password_mismatch' ) echo '<p style="color: red">Password mismatch</p>';
			} ?>
			<form method="POST" action="register.php">
				<p>Full name</p>
				<input type="text" name="name" placeholder="Enter Fullname" required="">
				<p>E-mail</p>
				<input type="text" name="email" placeholder="Enter E-mail" required="">
				<p>Password</p>
				<input type="Password" name="password" placeholder="Enter Password" required="">
				<p>Confirm Password</p>
				<input type="Password" name="cpassword" placeholder="Confirm Password" required="">
				<p>Mobile No</p>
				<input type="text" name="mobile" placeholder="Enter Mobile No" required="">
				<input type="submit" name="" value="Sign Up">
			</form>
		</div>
	</body>
</html>