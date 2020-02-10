<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Online food delivery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    
<!-- banner -->
<div class="title">
        <h1><strong>FOODFUN</strong></h1> 
        <h2><strong>Don't Dig Your Grave With Your Own Knife and Fork</strong></h2>    
</div>
<!-- title section -->
<div class="box">
    <form action="search_result.php" method="get">
        <input type="text" name="query" placeholder="search by food">
        <input type="submit" name="" value="Search">
    </form>
</div>
</header>
    

<!-- payment method -->
<div class="div1">
    <div class="container bg-1">
       <div class="payment">
        <h2><strong>Payment Method</strong></h2>
           <div>
        <center>
        <table>
            <tr>
            <td><img src="images/site_images/icon1.png" alt="icon1" width="80" height="40"></td>
            <td><img src="images/site_images/icon2.png" alt="icon2" width="80" height="40"></td>
            <td><img src="images/site_images/icon3.png" alt="icon3" width="80" height="20"></td>
            <td><img src="images/site_images/icon4.png" alt="icon4" width="80" height="20"></td>
            </tr>
        </table>
        </center>
            </div>
        </div>
        
    </div>
</div>

<!-- How it works -->

    
<!-- latest food -->
<div class="div2">
	<h1 style="text-align: center;">Latest Food Items</h1>
	<div class="responsive">
		<div class="gallery">
			<a href="images/site_images/image5.jpg" target="_blank"><img src="images/site_images/image5.jpg" width="300" height="200"></a>
			<div class="des">description</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a href="images/site_images/image5.jpg" target="_blank"><img src="images/site_images/image5.jpg" width="300" height="200"></a>
			<div class="des">description</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a href="images/site_images/image5.jpg" target="_blank"><img src="images/site_images/image5.jpg" width="300" height="200"></a>
			<div class="des">description</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a href="images/site_images/image5.jpg" target="_blank"><img src="images/site_images/image5.jpg" width="300" height="200"></a>
			<div class="des">description</div>
		</div>
	</div>
</div>
    
<!-- Download App -->
<div class="div3">
<div class="bg-2">
    <div class="app">
    <h2><strong>Download App</strong></h2>
    </div>
    <div>
        <center>
        <table>
            <tr>
            <td><img src="images/site_images/image8.png" alt="image8" width="100" height="50"></td>
            <td><img src="images/site_images/image9.png" alt="image9" width="100" height="50"></td>
            </tr>
        </table>
        </center>
    </div>
</div>
</div>
    
<!-- order by food & area -->

<div class="container-fluid bg-4">
    <div class="row">
        <div class="column">
            <h2 class="text"><strong>Order By Food</strong></h2>
            <div class="column1">
                SoupsAsian<br>
                FusionOther<br>
                sEuropean<br>
                Thai<br>
                Arabian<br>
                SliderSea<br>
                FoodChips<br>
            </div>
            <div class="column1">
                SoupsAsian<br>
                FusionOther<br>
                sEuropean<br>
                Thai<br>
                Arabian<br>
                SliderSea<br>
                FoodChips<br>
            </div>
            
        </div>
        <div class="column">
            <h2 class="text"><strong>Order By Area</strong></h2>
            <div class="column1">
                SoupsAsian<br>
                FusionOther<br>
                sEuropean<br>
                Thai<br>
                Arabian<br>
                SliderSea<br>
                FoodChips<br>
            
            </div>
            <div class="column1">
                SoupsAsian<br>
                FusionOther<br>
                sEuropean<br>
                Thai<br>
                Arabian<br>
                SliderSea<br>
                FoodChips<br>
            </div>
        </div>
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
        <p>Designed by: <a href="#">Online food</a></p>
    </div>
    
</div>
</body>
</html>


    