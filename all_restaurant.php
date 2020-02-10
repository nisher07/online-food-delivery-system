<!DOCTYPE html>
<html lang="en">
<head>

  <title>All Restaurant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/allrast.css" rel="stylesheet" type="text/css">
    
</head>
<body>
 
<header>
<!-- Navbar -->
<div class="nav">
	<ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="aboutus.php">About</a></li>
        <li><a href="all_restaurant.php">Restaurants</a></li>
        <li><a href="contactus.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
</div>

<!-- banner -->
<div class="title">
        <h1><strong>FOODFUN</strong></h1> 
        <h2><strong>Find A Restaurant You Will Love</strong></h2>    
</div>

<!-- title section -->
<div class="box">
    <form>
        <input type="text" name="" placeholder="search by food,place & restaurants">
        <input type="submit" name="" value="Search">
    </form>
</div>
</header>

<!-- rastaurant list -->

<div class="xop-section">
  <ul class="xop-grid">
  <?php
      include ('dbconnect.php');
      $res = mysqli_query( $conn, "SELECT id, title, address, phone, email FROM restaurants");
      while( $row = mysqli_fetch_array( $res ) ) {
        echo '<li>';
          echo '<div class="xop-box xop-img-1" style="background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.10)), url(images/restaurant_images/' . $row['id'] . '.jpg);">';
            echo '<a href="restaurant_detail.php?id=' . $row['id'] . '" target="_blank">';
              echo '<div class="xop-info">';
                echo '<h3>' . $row['title'] . '</h3>';
                echo '<p><b>Address:</b> ' . $row['address'] . '<br><b>Phone:</b> ' . $row['phone'] . '<br><b>Email:</b> ' . $row['email']. '</p>';
              echo '</div>';
            echo '</a>';
          echo '</div>';
        echo '</li>';
      }
  ?>
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
        <p>Design by: <a href="#">Online food</a></p>
    </div>
    
</body>
</html>
