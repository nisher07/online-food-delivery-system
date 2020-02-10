<?php
	include ('dbconnect.php');

	$name = $_POST['name'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];

	if( ( $password == $cpassword ) && ( strlen( $password ) >= 5 ) ) {
		$sql = "INSERT INTO users ( `name`, `password`, `phone`, `email` ) VALUES ( '$name', '" . md5( $password ) . "', '$mobile', '$email')";
		if (mysqli_query( $conn, $sql ) ) {
			header('location:registration_success.php');
			die();
		}
		else{
			header('location:registration.php?error=database_error');
		}
	} else {
		header('location:registration.php?error=password_mismatch');
		die();
	}
?>