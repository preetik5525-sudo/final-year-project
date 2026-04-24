<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>

	<!-- swiper css link -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">

	<!-- font awesome cdn link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

	<!-- custom css file link -->
	<link rel="stylesheet" href="style.css">
</head>
<body>

<!-- header section starts -->
<section class="header">
	<a href="home.php" class="logo">PreetyWay Travels.</a>

	<nav class="navbar">
		<a href="login.php" class="btn-login">Login</a>
		<a href="register.php" class="btn-register">Register</a>
		<a href="home.php">Home</a>
		<a href="about.php">About</a>
		<a href="package.php">Package</a>
		<a href="book.php">Book</a>
	</nav>
	
	<div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-- header section ends -->

<!-- home section starts -->
<section class="home">

	<div class="swiper mySwiper">

		<div class="swiper-wrapper">

			<div class="swiper-slide" style="background: url(home1.jpg) no-repeat">
				<div class="content">
					<span>explore, discover, travel</span>
					<h3>travel around the world</h3>
					<a href="package.php" class="btn">discover more</a>
				</div>
			</div>

			<div class="swiper-slide" style="background: url(home2.jpg) no-repeat">
				<div class="content">
					<span>explore, discover, travel</span>
					<h3>discover the new places</h3>
					<a href="package.php" class="btn">discover more</a>
				</div>
			</div>

			<div class="swiper-slide" style="background: url(home3.jpg) no-repeat">
				<div class="content">
					<span>explore, discover, travel</span>
					<h3>make your tour worthwhile</h3>
					<a href="package.php" class="btn">discover more</a>
				</div>
			</div>
			
		</div>

		<div class="swiper-button-next"></div>
    	<div class="swiper-button-prev"></div>
		
	</div>

</section>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

<!-- home section ends -->


<!-- services section starts -->
<section class="services">

	<h1 class="heading-title">our services</h1>

	<div class="box-container">
		
		<div class="box">
			<img src="adventure.png" alt="">
			<h3>adventure</h3>
		</div>

		<div class="box">
			<img src="tour.png" alt="">
			<h3>tour guide</h3>
		</div>

		<div class="box">
			<img src="trekking.png" alt="">
			<h3>trekking</h3>
		</div>

		<div class="box">
			<img src="fire.png" alt="">
			<h3>camp fire</h3>
		</div>

		<div class="box">
			<img src="road.png" alt="">
			<h3>off road</h3>
		</div>

		<div class="box">
			<img src="camping.png" alt="">
			<h3>camping</h3>
		</div>
	</div>
	
</section>
<!-- services section ends -->


<!-- home packages section starts -->

<section class="home-packages">
	<h1 class="heading-title">our packages</h1>
	<div class="box-container">
		<div class="box">
			<div class="image">
				<img src="book1.jpg" alt="">
			</div>
			<div class="content">
				<h3>Himachal Pradesh</h3>
				<h1>Starting From: ₹29,999+/person<br>
Duration: 5 Nights / 6 Days<br>
<b>Includes:</b><br>
5★ Luxury Resort Stay in Manali/Shimla<br>
Mountain View Premium Suite<br>
All Meals Included (Breakfast, Lunch & Dinner)<br>
Private SUV (Innova/Scorpio) for Full Tour<br>
Rohtang Pass / Solang Valley Excursion<br>
Kufri & Mall Road Visit<br>
Candlelight Dinner (for couples)<br>
24/7 Travel Assistance<br></h1>
				<a href="book.php" class="btn">book now</a>
			</div>
		</div>

		<div class="box">
			<div class="image">
				<img src="book2.jpg" alt="">
			</div>
			<div class="content">
				<h3>Rajasthan – Royal Heritage</h3>
				<h1>Starting From: ₹20,000/person<br>
Duration: 6 Nights / 7 Days<br>
<b>Includes:</b><br>
5★ Heritage Palace/Luxury Hotel Stay<br>
Deluxe Royal Suite Accommodation<br>
All Meals Included(Breakfast,Lunch & Dinner)<br>
Jaipur, Udaipur & Jaisalmer Sightseeing<br>
Luxury Desert Safari with Cultural Evening<br>
Sunset Boat Ride at Lake Pichola<br>
24/7 Travel Assistance<br></h1>

				<a href="book.php" class="btn">book now</a>
			</div>
		</div>

		<div class="box">
			<div class="image">
				<img src="book3.jpg" alt="">
			</div>
			<div class="content">
				<h3>Jammu and Kashmir – Heaven on Earth</h3>
				<h1>Starting From: ₹16,999/person<br>
Duration: 4 Nights/5 Days<br>
<b>Includes:</b><br>
4★ Hotel + Deluxe Houseboat Stay<br>
Breakfast & Dinner<br>
Private Cab for Srinagar, Gulmarg & Pahalgam<br>
Shikara Ride<br>
Gulmarg Gondola Phase 1 Tickets<br>
Mughal Garden Visit<br></h1>
				<a href="book.php" class="btn">book now</a>
			</div>
		</div>
	</div>

	<div class="load-more"> <a href="package.php" class="btn">load more</a></div>
	
</section>
<!-- home packages section ends -->


<!-- home offer section starts -->

<section class="home-offer">
	<div class="content">
		<h3>upto 50% off</h3>
		<h1>Limited Time Travel Deals</h1>
		<h2>5★ Resorts | Private SUVs | Exclusive Experiences<br></h2>
		<h2>Travel in comfort and style with our premium packages. Personalized itineraries & 24/7 support included.<br></h2>
		<a href="book.php" class="btn">Grab This Offer</a>
		
	</div>
	
</section>
<!-- home offer section ends -->


<!-- footer section starts -->
<section class="footer">
	<div class="box-container">
		<div class="box">
			<h3>quick links</h3>
			<a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
			<a href="about.php"><i class="fas fa-angle-right"></i>About</a>
			<a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
			<a href="book.php"><i class="fas fa-angle-right"></i>Book</a>	
		</div>

		<div class="box">
			<h3>extra links</h3>
			<a href="#"><i class="fas fa-angle-right"></i>ask questions</a>	
			<a href="#"><i class="fas fa-angle-right"></i>about us</a>
			<a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
			<a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
		</div>

		<div class="box">
			<h3>contact info</h3>
			<a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
			<a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
			<a href="#"><i class="fas fa-envelope"></i>preetik5525@gmail.com</a>
			<a href="#"><i class="fas fa-map"></i>mumbai, india - 400067</a>	
		</div>


		<div class="box">
    		<h3>follow us</h3>
			<a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>	
    		<a href="#"><i class="fab fa-twitter"></i> Twitter</a>
    		<a href="#"><i class="fab fa-instagram"></i> Instagram</a>
    		<a href="#"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
		</div>
	</div>

	<div class="credit">created by <span>ms. Preeti Kakade</span> | all rights reserved !</div>
	
</section>
<!-- footer section ends -->

<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>