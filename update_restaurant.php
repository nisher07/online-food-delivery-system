<?php
	include ('dbconnect.php');

	$id = $_POST['id'];
	$title = $_POST['title'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	
	$sql = "UPDATE restaurants  SET `title` = '$title', `address` = '$address', `phone` = '$phone', `email` = '$email' WHERE id='$id'";
	if (mysqli_query( $conn, $sql ) ) {

		$target_dir = "images/restaurant_images/";
		$target_file = $target_dir . $id . '.jpg';
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["image"]["tmp_name"]);
		if($check !== false) {
    		echo "File is an image - " . $target_file . ".";
   	 		$uploadOk = 1;
		} else {
    		echo "File is not an image.";
    		$uploadOk = 0;
		}
		if( $uploadOk ) {
			move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		}
		header('location:restaurant_list.php');
		die();
	}
	else{
		echo mysqli_error( $conn );
		header('location:add_restaurant.php?error=database_error');
	}
?>