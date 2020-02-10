<!DOCTYPE html>
<html>
	<head>
		<title>Restaurant List</title>
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<style>
			table
			{
				position: absolute;
				transform: translate(-50%,-50%);
				top: 50%;
				left: 50%;
				padding: 70px 30px;
			}
			h1
			{
				position: absolute;
				padding: 70px 30px;
			}
		</style>
	</head>
	<body>
		<div class="table table-dark table-striped">
		<?php
			include ('dbconnect.php');
			$res = mysqli_query( $conn, "SELECT id, title, address, phone, email FROM restaurants");
			
			echo '<table>';
			echo'<h1>Restaurant Info</h1>';
			echo '<tr><th>Image</th><th>Title</th><th>Address</th><th>Phone</th><th>Email</th><th>Option</th></tr>';
			while( $row = mysqli_fetch_array( $res ) ) {
				echo '<tr>';
					echo '<td><img src="images/restaurant_images/' . $row['id'] . '.jpg" style="max-width: 50px; max-height: 50px;"></td>';
					echo '<td>' . $row['title'] . '</td>';
					echo '<td>' . $row['address'] . '</td>';
					echo '<td>' . $row['phone'] . '</td>';
					echo '<td>' . $row['email'] . '</td>';
					echo '<td>';
						echo '<a href="edit_restaurant.php?id=' . $row['id'] . '"><button type="button" class="btn btn-danger">Edit</button></a>';
						echo ' <a href="delete_restaurant.php?id=' . $row['id'] . '"><button type="button" class="btn btn-danger">Delete</button></a>';
					echo '</td>';
				echo '</tr>';
			}
			echo '</table>';
		?>
		</div>
	</body>
</html>