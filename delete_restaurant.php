<?php
	include ('dbconnect.php');
	$id = $_GET['id'];
	mysqli_query( $conn, "DELETE FROM restaurants WHERE id='$id'");
	if( file_exists( 'images/restaurant_images/' . $id . '.jpg' ) ) {
		 unlink( 'images/restaurant_images/' . $id . '.jpg' );
	}
	header('location:restaurant_list.php?message=successfully_deleted');
	die();
?>