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
        <h2><strong>Find A Food You Will Love</strong></h2>    
</div>

<!-- title section -->
<div class="box">
    <form action="search_result.php" method="get">
        <input type="text" name="query" placeholder="search by food" value="<?php echo htmlspecialchars( $_GET['query'] ) ?>">
        <input type="submit" name="" value="Search">
    </form>
</div>
</header>

<!-- rastaurant list -->

<div class="xop-section">
  <ul class="xop-grid">
  <?php
      include ('dbconnect.php');
      $sql = "SELECT restaurants.id as restaurant_id, restaurants.title as restaurant_title, restaurants.address as restaurant_address, restaurants.phone as restaurant_phone, restaurants.email as restaurant_email, items.id, items.title FROM restaurants, items WHERE items.restaurant_id=restaurants.id AND ";
      $query_word = $_GET['query'];
      $br = explode( ' ', $query_word );
      $i = 0;
      foreach( $br as $brs ) {
        if( $i > 0 ) $sql .= ' OR ';
        $sql .= "items.title LIKE " . trim( "'%" . $brs . "%'" );
        $i++;
      }
      $res = mysqli_query( $conn, $sql );
      while( $row = mysqli_fetch_array( $res ) ) {
        echo '<li>';
          echo '<div class="xop-box xop-img-1" style="background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.10)), url(images/item_images/' . $row['id'] . '.jpg);">';
            echo '<a href="restaurant_detail.php?id=' . $row['restaurant_id'] . '" target="_blank">';
              echo '<div class="xop-info">';
                echo '<h3>' . $row['title'] . '</h3>';
                echo '<p><b>' . $row['restaurant_title'] . '</b> <b>Address:</b> ' . $row['restaurant_address'] . '<br><b>Phone:</b> ' . $row['restaurant_phone'] . '<br><b>Email:</b> ' . $row['restaurant_email']. '</p>';
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
