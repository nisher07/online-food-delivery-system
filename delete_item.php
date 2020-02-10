<?php
	include ('dbconnect.php');
	$id = $_GET['id'];
	mysqli_query( $conn, "DELETE FROM items WHERE id='$id'");
	if( file_exists( 'images/item_images/' . $id . '.jpg' ) ) {
		 unlink( 'images/item_images/' . $id . '.jpg' );
	}
	header('location:item_list.php?message=successfully_deleted');
	die();
?>