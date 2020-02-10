<?php
	include ('dbconnect.php');

	$password = md5( $_POST['password'] );
	$email = $_POST['email'];

	$sql = "SELECT id, name, phone FROM users WHERE `email` = '$email' AND `password` = '$password'";
	$result = mysqli_query( $conn, $sql );
	if( mysqli_num_rows( $result ) > 0 ) {
			session_start();
			$arr = mysqli_fetch_array( $result );
			$_SESSION['id'] = $arr['id'];
			$_SESSION['email'] = $email;
			$_SESSION['name'] = $arr['name'];
			$_SESSION['phone'] = $arr['phone'];

			header('location:home.php');
	}
	else{
		header('location:login.php?error=user_mismatch');
	}
?>