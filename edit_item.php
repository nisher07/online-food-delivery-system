<!DOCTYPE html>
<html>
	<head>
		<title>Edit Item</title>
		<link rel="stylesheet" type="text/css" href="css/Reg.css">
	</head>
	<body>
		<div class="loginbox">
			<img src="images/site_images/avatar.png" class="avatar">
			<h1>Edit Item Here</h1>
			<?php if( isset( $_GET['error'] ) ) { 
				if( $_GET['error'] == 'password_mismatch' ) echo '<p style="color: red">Password mismatch</p>';
			} ?>
			<?php
				include ('dbconnect.php');
				$id = $_GET['id'];
				$res = mysqli_query( $conn, "SELECT restaurant_id, title, type, price FROM items WHERE id='$id'") or die( mysqli_error( $conn ) );
				$arr = mysqli_fetch_array( $res );
			?>
			<form method="POST" action="update_item.php" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $id; ?>"
				<p><b>Restaurant</b></p>
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
				<input type="text" name="title" placeholder="Write Tittle" required="" value="<?php echo $arr['title']; ?>">
				<p>Type</p>
				<select name="type">
					<option value="0">Drinks</option>
					<option value="1">Main course</option>
					<option value="2">Desert</option>
					<option value="3">Fast food</option>
					<option value="4">Set menu</option>
				</select>
				<p>Price</p>
				<input type="text" name="price" placeholder="Price" required="" value="<?php echo $arr['price']; ?>">
				<p>Image</p>
				<input type="file" name="image">
				<input type="submit" name="" value="Submit">
			</form>
		</div>
	</body>
</html>