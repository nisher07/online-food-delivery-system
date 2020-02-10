<!DOCTYPE html>
<html>
	<head>
		<title>Add Items</title>
		<link rel="stylesheet" type="text/css" href="css/Reg.css">
	</head>
	<body>
		<div class="loginbox">
			<img src="images/site_images/avatar.png" class="avatar">
			<h1>Add Items</h1>
			<?php if( isset( $_GET['error'] ) ) { 
				if( $_GET['error'] == 'password_mismatch' ) echo '<p style="color: red">Password mismatch</p>';
			} ?>
			<form method="POST" action="insert_item.php" enctype="multipart/form-data">
				<p>Restaurant</p>
				<select name="restaurantid">
				<?php
					include ('dbconnect.php');
					$restaurants = mysqli_query( $conn, "SELECT id, title FROM restaurants");
					while( $row = mysqli_fetch_array( $restaurants ) ) {
						echo '<option value="' . $row['id'] . '">' . $row['title'] . '</option>';
					} 
				?>
				</select>
				<p>Title</p>
				<input type="text" name="title" placeholder="Write Title" required="">
				<p>Type</p>
				<select name="type">
					<option value="0">Drinks</option>
					<option value="1">Main course</option>
					<option value="2">Desert</option>
					<option value="3">Fast food</option>
					<option value="4">Set menu</option>
				</select>
				<p>Price</p>
				<input type="text" name="price" placeholder="Price" required="">
				<p>Image</p>
				<input type="file" name="image">
				<input type="submit" name="" value="Submit">
			</form>
		</div>
	</body>
</html>