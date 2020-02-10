<?php
  include ('dbconnect.php');
  $id = $_GET['id'];
  $res = mysqli_query( $conn, "SELECT title, address, phone, email FROM restaurants WHERE id='$id'");
  $arr = mysqli_fetch_array( $res );
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title><?php echo $arr['title']; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/sp_rest.css" rel="stylesheet" type="text/css">
    
</head>
<body>
 
<header style="background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)), url(images/restaurant_images/<?php echo $id; ?>.jpg);">
<!-- Navbar -->
<div class="nav">
	<ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="aboutus.php" target="_blank">About</a></li>
        <li><a href="allrast.php" target="_blank">Restaurants</a></li>
        <li><a href="contactus.php" target="_blank">Contact</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
</div>

<!-- banner -->
<div class="title">
        <h1><strong><?php echo $arr['title']; ?></strong></h1> 
        <h2><strong><?php echo $arr['address']; ?></strong></h2>    
        <h3 style="color: white;"><strong>Contact:</strong><?php echo $arr['phone'] . ' (' . $arr['email'] . ')'; ?></h3>
</div>
</header>

<!-- Menu bar -->
<div class="nav1">
  <ul>
        <li><a class="active" href="#">Menu</a></li>
        <li><a href="review.html" target="_blank">Review</a></li>
        <li><a href="aboutus.html" target="_blank">About Us</a></li>
      </ul>
</div>

<!-- delivery history -->
<div class="nav2">
  <ul>
        <li><a href="#">Min. Food Price:<br>50.00 TK</a></li>
        <li><a href="#">Min. Delivery Time:<br>40 MIN</a></li>
        <li><a href="#">Min. Delivery Fee:<br>40.00 TK</a></li>
      </ul>
</div>
<!-- Food list -->
<div class="grid">
  <div>
    <table class="table1">
      <tr class="header">
          <th>Food Name</th>
          <th>Type</th>
          <th>Price</th>
          <th>Add</th>
        </tr>
        <!-- list of food -->
        <?php
          $foods = mysqli_query( $conn, "SELECT id, title, type, price FROM items WHERE restaurant_id='$id'" );
          while( $frow = mysqli_fetch_array( $foods ) ) {
            echo '<tr>';
              echo '<td>' . $frow['title'] . '</td>';
              echo '<td>';
                if( $frow['type'] == 0 ) echo 'Drink';
                elseif( $frow['type'] == 1 ) echo 'Main course';
                elseif( $frow['type'] == 2 ) echo 'Desert';
                elseif( $frow['type'] == 3 ) echo 'Fast food';
                elseif( $frow['type'] == 4 ) echo 'Set menu';
              echo '</td>';
              echo '<td>' . $frow['price'] . '</td>';
              echo '<td><a href="add_to_cart.php?item_id=' . $frow['id'] . '" class="btn1" style="cursor: pointer;">Add</a></td>';
            echo '</tr>';
          }
        ?>
    </table>
  </div>

<!-- order cart -->
<div>
    <h2>Order Cart</h2>
    <table class="table2">
      <tr></tr>
      <tr></tr>
    </table>
    <table class="table3">
    <?php
      session_start();
      $sub_total = 0;
      $vat = .15;
      $delivery_charge = 120;
      if( isset( $_SESSION['food_cart'] ) ) {
        $food_cart = $_SESSION['food_cart'];
        for( $i = 0; $i < count( $food_cart ); $i++ ) {
          echo '<tr>';
            echo '<td>' . $food_cart[ $i ]['title'] . ' (' . $food_cart[ $i ]['quantity'] . 'pcs)</td>';
            echo '<td>' . ( $food_cart[ $i ]['price'] * $food_cart[ $i ]['quantity'] ) . '</td>';
          echo '</tr>';
          $sub_total += ( $food_cart[ $i ]['price'] * $food_cart[ $i ]['quantity'] );
        }
      }
      $vat_amount = ( $sub_total * $vat );
    ?>
      <tr>
        <td>Vat(%)</td>
        <td><?php echo $vat_amount; ?> TK</td>
      </tr>
      <tr>
        <td>Delivery Charge</td>
        <td><?php echo $delivery_charge; ?> TK</td>
      </tr>
      <tr>
        <td>Total</td>
        <td><?php echo ( $sub_total + $vat_amount + $delivery_charge ); ?></td>
      </tr>
    </table>
  </div>
</div>

<!-- footer -->
<div class="footer-main-div">
    <div class="footer-social-icons">
      <ul>
        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
      </ul><br>
    </div>
    <div class="footer-menu-one">
      <ul>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Join Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Customer support</a></li>
        
      </ul><br>
    </div>
    <div class="footer-bottom">
        <p>Design by: <a href="#">Online food</a></p>
    </div>
  
</body>
</html>
