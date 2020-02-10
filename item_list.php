<!DOCTYPE html>
<html>
	<head>
		<title>Item List</title>
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
			$res = mysqli_query( $conn, "SELECT id, restaurant_id, title, type, price FROM items");
			
			echo '<table>';
			echo'<h1>Item Info</h1>';
			echo '<tr><th>Image</th><th>Restaurant</th><th>Title</th><th>Type</th><th>Price</th></tr>';
			while( $row = mysqli_fetch_array( $res ) ) {
				$restaurant = mysqli_query( $conn, "SELECT title FROM restaurants WHERE id='" . $row['restaurant_id'] . "'");
				$restaurant_arr = mysqli_fetch_array( $restaurant );
				echo '<tr>';
					echo '<td><img src="images/item_images/' . $row['id'] . '.jpg" style="max-width: 50px; max-height: 50px;"></td>';
					echo '<td>' . $restaurant_arr['title'] . '</td>';
					echo '<td>' . $row['title'] . '</td>';
					echo '<td>' . $row['type'] . '</td>';
					echo '<td>' . $row['price'] . '</td>';
					echo '<td>';
						echo '<a href="edit_item.php?id=' . $row['id'] . '"><button type="button" class="btn btn-danger">Edit</button></a>';
						echo ' <a href="delete_item.php?id=' . $row['id'] . '"><button type="button" class="btn btn-danger">Delete</button></a>';
					echo '</td>';
				echo '</tr>';
			}
			echo '</table>';
		?>
		</div>
	</body>
</html>