<!DOCTYPE html>
<html>
	<head>
		<title>Add restaurant</title>
		<link rel="stylesheet" type="text/css" href="css/Reg.css">
	</head>
	<body>
		<div class="loginbox">
			<img src="images/site_images/avatar.png" class="avatar">
			<h1>Add Restsursnts</h1>
			<?php if( isset( $_GET['error'] ) ) { 
				if( $_GET['error'] == 'password_mismatch' ) echo '<p style="color: red">Password mismatch</p>';
			} ?>
			<form method="POST" action="insert_restaurant.php" enctype="multipart/form-data">
				<p>Title</p>
				<input type="text" name="title" placeholder="Write Title" required="">
				<p>Address</p>
				<input type="text" name="address" placeholder="Write Address" required="">
				<p>Phone</p>
				<input type="text" name="phone" placeholder="Enter Phone No" required="">
				<p>E-mail</p>
				<input type="text" name="email" placeholder="Enter E-mail" required="">
				<p>Image</p>
				<input type="file" name="image">
				<input type="submit" name="" value="Submit">
			</form>
		</div>
	</body>
</html>