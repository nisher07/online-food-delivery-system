<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us</title>
		<link href="css/aboutus.css" rel="stylesheet" type="text/css">
		<link href="css/home.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--Navbar-->
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
	        <li><a href="aboutus.php">About</a></li>
	        <li><a href="all_restaurant.php">Restaurants</a></li>
	        <li><a href="contactus.php">Contact</a></li>
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
	
		<div class="row2">
			<ul class="about">
				<li><p>Who we are?</p></li>
				<li><a>Food delivery system is a 100% Bangladeshi Online Food Ordering and Delivery Service launched in 2013 to deliver your cravings at your doorsteps. We are passionate about food and are always prompt to deliver whenever the radar blips hungry. Come rain, heat and storm our delivery team will be at your doorstep with a bright smile and holding the food you have been craving, intact through our insulated boxes!</a></li>
				<li><r>Our purpose</r></li>
				<li><c>We just do not want you to be hungry.

A hungry (wo)man is an angry (wo)man. HungryNaki gives you another reason to be stress-free in life. We do not want you to sweat in the kitchen to waste your valuable pastime after a long day of work.

So here we are, helping you find the right restaurant, cafe or any other eatery in your neighborhood to order their food online via our website. The country is already taking a high blood pressure toll. We are here to soothe your hearts simply by lightening up your rumbling stomachs.

Right now we are capturing the hearts of people living in a limited amount of areas in Dhaka, Chittagong and Sylhet (we cover pretty much all the major areas, though). Do not be disheartened if we can not provide service in the area you are living in just yet, we are working on capturing your hearts too.</c></li>
			
		</ul>
		</div>
<!--Footer-->
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