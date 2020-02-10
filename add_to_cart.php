<?php
	include ('dbconnect.php');
	$item_id = $_GET['item_id'];

	$res = mysqli_query( $conn, "SELECT title, restaurant_id, price FROM items WHERE id='$item_id'");
	$arr = mysqli_fetch_array( $res );

	session_start();
	$food_cart = $_SESSION['food_cart'];
	$exist = false;

	for( $i = 0; $i < count( $food_cart ); $i++ ) {
		if( $food_cart[ $i ]['item_id'] == $item_id ) {
			$food_cart[ $i ]['quantity'] = ( $food_cart[ $i ]['quantity'] + 1 );
			$exist = true;
			break;
		}
	}

	if( !$exist ) {
		$food_cart[] = array(
				'item_id' => $item_id,
				'title'	  => $arr['title'],
				'price'	  => $arr['price'],
				'quantity'=> 1
			);
	}
	$_SESSION['food_cart'] = $food_cart;
	header("location:restaurant_detail.php?id=" . $arr['restaurant_id']);
	die();
?>