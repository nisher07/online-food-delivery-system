<!DOCTYPE html>
<html>
	<head>
		<title>Edit restaurant</title>
		<link rel="stylesheet" type="text/css" href="css/Reg.css">
	</head>
	<body>
		<div class="loginbox">
			<img src="images/site_images/avatar.png" class="avatar">
			<h1>Edit Restaurant Here</h1>
			<?php if( isset( $_GET['error'] ) ) { 
				if( $_GET['error'] == 'password_mismatch' ) echo '<p style="color: red">Password mismatch</p>';
			} ?>
			<?php
				include ('dbconnect.php');
				$id = $_GET['id'];
				$res = mysqli_query( $conn, "SELECT title, address, phone, email FROM restaurants WHERE id='$id'");
				$arr = mysqli_fetch_array( $res );
			?>
			<form method="POST" action="update_restaurant.php" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $id; ?>"
				<p>Title</p>
				<input type="text" name="title" placeholder="Write Tittle" required="" value="<?php echo $arr['title']; ?>">
				<p>Address</p>
				<input type="text" name="address" placeholder="Write Address" required="" value="<?php echo $arr['address']; ?>">
				<p>Phone</p>
				<input type="text" name="phone" placeholder="Enter Phone No" required="" value="<?php echo $arr['phone']; ?>">
				<p>E-mail</p>
				<input type="text" name="email" placeholder="Enter E-mail" required="" value="<?php echo $arr['email']; ?>">
				<p>Image</p>
				<input type="file" name="image">
				<input type="submit" name="" value="Submit">
			</form>
		</div>
	</body>
</html>