<!DOCTYPE html>
<html lang="en">
<head>

  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/contactus.css" rel="stylesheet" type="text/css">
    <link href="css/home.css" rel="stylesheet" type="text/css">
    
</head>
<body>
 
<header>
<!-- Navbar -->
<div class="nav">
    
  <ul>
    
        <li>
            <?php
            if( isset( $_SESSION['id'] ) ) {
                echo '<p style="font-family: arial;font-size: 20px; color:mediumseagreen;">Hi <b>' . $_SESSION['name'] . '</b>';
              }
            ?>
        </li>
        <li><a href="home.php">Home</a></li>
        <li><a href="aboutus.php" target="_blank">About</a></li>
        <li><a href="all_restaurant.php" target="_blank">Restaurants</a></li>
        <li><a href="contactus.php" target="_blank">Contact</a></li>
        <?php 
            if( isset( $_SESSION['id'] ) ) {
                echo '<li><a href="logout.php">Logout</li>';
            } else {
                echo '<li><a href="login.php">Login</a></li>';
                echo '<li><a href="registration.php">Sign Up</a></li>';
            }
        ?>
      </ul>
</div>
<div class="row1">
  <ul class="text">
    <li><a>Contact Us</a></li>
    <li><b>Hello, is it me you’re looking for?</b></li>
  </ul>
</div>
<div class="row2">
  <ul class="info">
    <li><a>We’re committed to providing the best online ordering service available. To that end, we’d very much appreciate any sort of feedback. Don’t hesitate to contact us:</a></li><br><br><br>
    <li><c>Via email:</c></li>
    <li><b href="mailto:support@kikhaben.com">support@kikhaben.com</b></li><br><br><br>
    <li><d>Or call us at</d></li>
    <li><e href="tel:+8809000000000">09000000000</e></li><br>
    <li><f href="tel:+8809000000001">09000000001</f></li><br><br><br>
    <li><g>Want your restaurant to be a part of the Ki Khaben community? We'd love to work with you!</g></li><br><br><br>
    <li><h>Contact us at: </h></li>
    <li><i href="mailto:restaurants@kikhaben.com">restaurants@kikhaben.com</i></li><br><br><br>
  </ul>
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
        <p>Designed by: <a href="#">Online food</a></p>
    </div>
    
</header>
</body>
</html>
