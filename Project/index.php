<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Serenity Resort : Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"/>

	<script src="https://cdn.botpress.cloud/webchat/v2.1/inject.js"></script>
	<script src="https://mediafiles.botpress.cloud/2a8e32fa-bf48-421a-b607-c23a750cc63f/webchat/v2.1/config.js"></script>
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
					<!--logo-->
					<div id="logo">
						<h1><a href="index.php">Serenity Resort</a></h1>
					</div>
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li>
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down"
											aria-hidden="true"></span>
									</label>
									<a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<li><a href="#services" class="drop-text">Services</a></li>
										<li><a href="#why" class="drop-text">What We do</a></li>
										<li><a href="#price" class="drop-text">Pricing</a></li>
										<li><a href="#testi" class="drop-text">Testimonials</a></li>
										<li><a href="book.php" class="drop-text">Booking Form</a></li>
									</ul>
								</li>
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!-- banner -->
		<div class="banner_w3lspvt">
			<div class="csslider infinity" id="slider1">
				<input type="radio" name="slides" checked="checked" id="slides_1" />
				<input type="radio" name="slides" id="slides_2" />
				<input type="radio" name="slides" id="slides_3" />
				<input type="radio" name="slides" id="slides_4" />
				<ul class="banner_slide_bg">
					<li>
						<div class="container">
							<div class="w3ls_banner_txt">
								<p>Welcome to Serenity Resort</p>
								<h3 class="w3ls_pvt-title text-wh text-uppercase let">Hotel & Resort Villas</h3>
								<a href="about.php" class="btn button-style mt-sm-5 mt-4">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="container">
							<div class="w3ls_banner_txt">
								<p>Welcome to Serenity Resort</p>
								<h3 class="w3ls_pvt-title text-wh text-uppercase let">Enjoy Your Moments</h3>
								<a href="about.php" class="btn button-style mt-sm-5 mt-4">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="container">
							<div class="w3ls_banner_txt">
								<p>Welcome to Serenity Resort</p>
								<h3 class="w3ls_pvt-title text-wh text-uppercase let">Modern & Spacious Rooms</h3>
								<a href="about.php" class="btn button-style mt-sm-5 mt-4">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="container">
							<div class="w3ls_banner_txt">
								<p>Welcome to Serenity Resort</p>
								<h3 class="w3ls_pvt-title text-wh text-uppercase let">In the Perfect Location</h3>
								<a href="about.php" class="btn button-style mt-sm-5 mt-4">Read More</a>
							</div>
						</div>
					</li>
				</ul>
				<div class="arrows">
					<label for="slides_1"></label>
					<label for="slides_2"></label>
					<label for="slides_3"></label>
					<label for="slides_4"></label>
				</div>
			</div>
		</div>
	</div>

	<!-- banner bottom -->
	<div class="banner-bottom py-5">
		<div class="d-md-flex container py-xl-3 py-lg-3">
			<div class="banner-left-bottom-w3ls">
				<h6 class="text-wh let">Indulge in the tranquility and beauty around you.</h6>
				<h3 class="text-wh my-3">Welcome to Serenity Resort</h3>
				<p>Embrace every moment with your partner in the serene paradise of Serenity Resort.<br>Discover blissful moments that last a lifetime.</p>
			</div>
			<div class="button offset-lg-2 offset-md-1">
				<a href="about.php" class="btn w3ls-button-mobamu">Read More</a>
			</div>
		</div>
	</div>

	<!-- about -->
	<section class="about py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<div class="row py-md-5">
				<div class="col-lg-4 about-left-w3pvt offset-lg-1 mt-lg-4">
					<div class="main-img">
						<img src="images/blog1.jpg" alt="" class="img-fluid pos-aboimg">
						<img src="images/blog2.jpg" alt="" class="img-fluid pos-aboimg2">
					</div>
				</div>
				<div class="col-xl-6 col-lg-7 about-right offset-xl-1">
					<h4 class="sub-tittle-w3layouts let">About Us</h4>
					<h3 class="title-w3layouts text-uppercase pr-lg-5 mt-2">Welcome to Serenity Resort</h3>
					<p class="mt-4 mb-4">At Serenity Resort, we believe in creating unforgettable experiences for couples seeking tranquility and romance. Nestled in the heart of nature, our luxurious villas offer a perfect escape from the hustle and bustle of everyday life.</p>
					<p>Our dedicated team is committed to providing exceptional service, ensuring that every moment you spend with us is filled with joy and relaxation. Whether you’re enjoying a candlelit dinner on your private terrace or exploring the breathtaking surroundings, we strive to make your stay a cherished memory.</p>
					<a href="about.php" class="btn button-style-2 mt-sm-5 mt-4">Read More</a>
				</div>
			</div>
		</div>
	</section>


	<!-- price -->
	<div class="rooms-w3ls bg-li py-5" id="price">
    	<div class="container-fluid py-xl-5 py-lg-3">
        	<h3 class="tittle text-center text-bl font-weight-bold">Rooms & Suites</h3>
        	<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Experience luxury and comfort in our exquisite villas. Enjoy a tranquil getaway designed for relaxation and romance.</p>
        	<div class="row">
            	<div class="col-lg-4 price-mobamus">
                	<div class="price-top">
                    	<a href="luxury_Rdetails.php">
                        	<img src="images/luxury.jpg" alt="Luxury Suite" class="img-fluid" />
                    	</a>
                	</div>
                	<div class="price-w3ls-bottom p-4">
                    	<h4 class="my-2"><a href="luxury_Rdetails.php">Luxury Suite</a></h4>
                    	<div class="lm-item-price">
                        	<h6>
                            	<span class="price-top-head">₹</span>
                            	<span class="price-midd-head">20,000</span>
                            	<span class="price-right-head">/ per night</span>
                        	</h6>
                    	</div>
                    	<ul class="style-lists">
                        	<li>Private terrace with ocean view</li>
                        	<li>Breakfast included</li>
                        	<li>Complimentary spa access</li>
                    	</ul>
                    	<a href="book.php" class="btn button-style-2 mt-sm-5 mt-4">Book Now</a>
                	</div>
            	</div>
            	<div class="col-lg-4 price-mobamus my-lg-0 my-5">
                	<div class="price-top">
                    	<a href="deluxe_Rdetails.php">
                        	<img src="images/deluxe.jpg" alt="Deluxe Room" class="img-fluid" />
                    	</a>
                	</div>
                	<div class="price-w3ls-bottom p-4">
                    	<h4 class="my-2"><a href="deluxe_Rdetails.php">Deluxe Room</a></h4>
                    	<div class="lm-item-price">
                        	<h6>
                            	<span class="price-top-head">₹</span>
                            	<span class="price-midd-head">14,000</span>
                            	<span class="price-right-head">/ per night</span>
                        	</h6>
                    	</div>
                    	<ul class="style-lists">
                        	<li>Spacious living area</li>
                        	<li>Breakfast included</li>
                        	<li>24/7 room service</li>
                    	</ul>
                    	<a href="book.php" class="btn button-style-2 mt-sm-5 mt-4">Book Now</a>
                	</div>
            	</div>
            	<div class="col-lg-4 price-mobamus">
                	<div class="price-top">
                    	<a href="family_Rdetails.php">
                        	<img src="images/family.jpg" alt="Family Room" class="img-fluid" />
                    	</a>
                	</div>
                	<div class="price-w3ls-bottom p-4">
                    	<h4 class="my-2"><a href="family_Rdetails.php">Family Room</a></h4>
                    	<div class="lm-item-price">
                        	<h6>
                            	<span class="price-top-head">₹</span>
                            	<span class="price-midd-head">18,000</span>
                            	<span class="price-right-head">/ per night</span>
                        	</h6>
                    	</div>
                    	<ul class="style-lists">
                        	<li>Two bedrooms with ensuite bathrooms</li>
                        	<li>Child-friendly amenities</li>
                        	<li>Complimentary babysitting services</li>
                    	</ul>
                    	<a href="book.php" class="btn button-style-2 mt-sm-5 mt-4">Book Now</a>
                	</div>
            	</div>
        	</div>
    	</div>
	</div>

	<!-- why -->
	<div class="serives py-5" id="why">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Why Choose Serenity Resort</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">At Serenity Resort, we offer an unparalleled experience that combines luxury, tranquility, and exceptional service. Discover why our villas are the perfect getaway.</p>
			<div class="row text-center">
				<div class="col-lg-3 col-md-6 ser-grid">
					<span class="fa fa-cutlery"></span>
					<h4>On-Site Dining</h4>
					<p>Indulge in gourmet meals prepared with fresh, local ingredients at our exquisite restaurant.</p>
				</div>
				<div class="col-lg-3 col-md-6 ser-grid mt-md-0 mt-5">
					<span class="fa fa-money"></span>
					<h4>Competitive Pricing</h4>
					<p>Experience luxury at affordable rates without compromising on quality and comfort.</p>
				</div>
				<div class="col-lg-3 col-md-6 ser-grid mt-lg-0 mt-5">
					<span class="fa fa-user-secret"></span>
					<h4>Safe & Secure</h4>
					<p>Your safety is our priority. Enjoy peace of mind in our secure and tranquil environment.</p>
				</div>
				<div class="col-lg-3 col-md-6 ser-grid mt-lg-0 mt-5">
					<span class="fa fa-car"></span>
					<h4>Airport Pick-Up</h4>
					<p>We offer complimentary pick-up and drop-off services to ensure a seamless travel experience.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- stats -->
	<div class="stats py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row stats-mobamu py-5">
				<div class="col-lg-4 col-md-6">
					<div class="stats-grid">
						<div class="row">
							<div class="col-4 text-center">
								<span class="fa fa-star"></span>
							</div>
							<div class="col-8">
								<h4 class="numscroller">6000</h4>
								<p>Excellent Ratings</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mt-md-0 mt-4">
					<div class="stats-grid">
						<div class="row">
							<div class="col-4 text-center">
								<span class="fa fa-smile-o"></span>
							</div>
							<div class="col-8">
								<h4 class="numscroller">25k</h4>
								<p>Happy Guests</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mx-lg-0 mx-md-auto mt-lg-0 mt-4">
					<div class="stats-grid">
						<div class="row">
							<div class="col-4 text-center">
								<span class="fa fa-cutlery"></span>
							</div>
							<div class="col-8">
								<h4 class="numscroller">150</h4>
								<p>Food Items</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- services -->
	<div class="serives-mobamu py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-wh font-weight-bold">Our Services</h3>
			<p class="sub-tittle text-center text-li mt-2 mb-sm-5 mb-4 pb-xl-3">At Serenity Resort, we are dedicated to providing you with an unforgettable experience. Explore our exceptional services designed to enhance your stay.</p>
			<div class="row welcome-bottom text-center">
				<div class="col-lg-3 col-sm-6 px-2">
					<div class="welcome-grid bg-wh py-5 px-4">
						<img src="images/wh1.jpg" alt="Spa Services" class="img-fluid">
						<h4 class="mt-4 mb-3 text-bl">Spa & Wellness</h4>
						<p>Relax and rejuvenate with our luxurious spa treatments and wellness programs.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt-sm-0 mt-5 px-2">
					<div class="welcome-grid bg-wh py-5 px-4">
						<img src="images/wh2.jpg" alt="Gourmet Dining" class="img-fluid">
						<h4 class="mt-4 mb-3 text-bl">Gourmet Dining</h4>
						<p>Savor delicious meals crafted by our chefs using the finest local ingredients.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 px-2">
					<div class="welcome-grid bg-wh py-5 px-4">
						<img src="images/wh3.jpg" alt="Concierge Services" class="img-fluid">
						<h4 class="mt-4 mb-3 text-bl">Concierge Services</h4>
						<p>Our dedicated staff is here to assist you with any requests to make your stay perfect.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 px-2">
					<div class="welcome-grid bg-wh py-5 px-4">
						<img src="images/wh4.jpg" alt="Excursions" class="img-fluid">
						<h4 class="mt-4 mb-3 text-bl">Excursions</h4>
						<p>Discover the beauty of the surroundings with our curated excursions and activities.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- testimonials -->
	<section class="team-main-sec bg-li py-5" id="testi">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">What Our Guests Say</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">At Serenity Resort, guest satisfaction is our top priority. Here's what some of our wonderful guests have to say about their experiences.</p>
			<div class="row text-center">
				<div class="col-lg-4 col-md-6 team-gd-info">
					<div class="team-gd">
						<div class="team-img mb-4">
							<img src="images/te1.jpg" class="img-fluid" alt="user-image">
						</div>
						<div class="team-info">
							<h3>Aisha Verma <span class="sub-tittle-team">India</span></h3>
							<ul class="list-unstyled my-md-4 my-3">
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
							</ul>
							<p>“An unforgettable stay! The ambiance was perfect and the staff was incredibly welcoming.”</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 team-gd-info mt-md-0 mt-5">
					<div class="team-gd">
						<div class="team-img mb-4">
							<img src="images/te2.jpg" class="img-fluid" alt="user-image">
						</div>
						<div class="team-info">
							<h3>Luca Rossi <span class="sub-tittle-team">Italy</span></h3>
							<ul class="list-unstyled my-md-4 my-3">
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star-half-o"></span></li>
							</ul>
							<p>“The food was divine, and the service was impeccable. A true paradise!”</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mx-lg-0 mx-md-auto team-gd-info mt-lg-0 mt-5">
					<div class="team-gd">
						<div class="team-img mb-4">
							<img src="images/te3.jpg" class="img-fluid" alt="user-image">
						</div>
						<div class="team-info">
							<h3>Rebecca Alvich <span class="sub-tittle-team">Germany</span></h3>
							<ul class="list-unstyled my-md-4 my-3">
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
							</ul>
							<p>“Every moment spent here was magical. I can't wait to come back!”</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- middle -->
	<div class="middle py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="welcome-left text-center py-md-5 py-3">
				<h3>Create Cherished Memories Together at Serenity Villas Resort</h3>
				<a href="book.php" class="btn button-style button-style mt-sm-5 mt-4">Book Now</a>
			</div>
		</div>
	</div>

	<!-- Newsletter Section -->
	<div class="newsletter_w3w3pvt py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Subscribe to Our Newsletter</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Stay updated with our latest offers and news.</p>
			
			<?php
			// Database configuration
			$host = 'sql302.byethost24.com'; // Usually 'localhost'
			$db = 'b24_37397899_serenityresort'; // Central database name
			$user = 'b24_37397899'; // Your database username (default is usually 'root')
			$pass = 'q236@0!*00prt'; // Your database password (default is usually blank)

			// Create a connection
			$conn = new mysqli($host, $user, $pass, $db);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			// Check if the form is submitted
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
				
				// Validate email
				if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
					// Prepare an SQL statement
					$stmt = $conn->prepare("INSERT INTO subscriptions (email) VALUES (?)");
					$stmt->bind_param("s", $email); // "s" indicates the type is string
					
					// Execute the statement
					if ($stmt->execute()) {
						echo '<p class="text-center text-success">Thank you for subscribing!</p>';
					} else {
						echo '<p class="text-center text-danger">Error saving email. Please try again later.</p>';
					}

					// Close the statement
					$stmt->close();
				} else {
					echo '<p class="text-center text-danger">Invalid email address. Please enter a valid email.</p>';
				}
			}

			// Close the database connection
			$conn->close();
			?>

			<!-- Newsletter Form -->
			<form method="post" action="">
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Enter your email" required="">
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-default">Subscribe</button>
				</div>
			</form>
		</div>
	</div>


	<!-- footer -->
	<footer class="py-5">
		<div class="container pt-xl-4">
			<div class="row footer-top">
				<div class="col-lg-4 col-md-6 footer-grid_section_1its">
					<h2 class="logo-2 mb-lg-4 mb-3">
						<a href="index.php" class="text-uppercase text-wh">Serenity Resort</a>
					</h2>
					<div class="map-fo">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387512.73997398564!2d73.74837349211998!3d10.5609215790455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b5a80983c9f9993%3A0xe48d5a6a9c78760b!2sLakshadweep%20Island!5e0!3m2!1sen!2sin!4v1631824378916"></iframe>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 footer-grid_section_1its mt-md-0 mt-4">
					<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Quick Links</h3>
					<ul class="list-unstyled">
						<li class="mb-3">
							<a href="index.php">Home</a>
						</li>
						<li class="mb-3">
							<a href="about.php">About Us</a>
						</li>
						<li class="mb-3">
							<a href="gallery.php">Gallery</a>
						</li>
						<li class="mb-3">
							<a href="#services">Services</a>
						</li>
						<li class="mb-3">
							<a href="contact.php">Contact Us</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 footer-grid_section_1its mt-lg-0 mt-4">
					<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Contact Us</h3>
					<div class="contact-info">
						<div class="footer-style-w3ls mb-4">
							<h4 class="text-li mb-2">Phone</h4>
							<p>+91 123 456 7890</p>
						</div>
						<div class="footer-style-w3ls mb-4">
							<h4 class="text-li mb-2">Email</h4>
							<p><a href="mailto:info@serenityresort.com">info@serenityresort.com</a></p>
						</div>
						<div class="footer-style-w3ls mb-4">
							<h4 class="text-li mb-2">Location</h4>
							<p>Lakshadweep Island, India</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-grid_section_1its mt-lg-0 mt-4">
					<div class="mobamuinfo_social_icons">
						<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Follow Us</h3>
						<p>Connect with us on social media for updates and special offers!</p>
						<h4 class="sub-con-fo text-li my-4">Social Media</h4>
						<ul class="mobamuits_social_list list-unstyled">
							<li class="w3_mobamu_facebook">
								<a href="#">
									<span class="fa fa-facebook-f"></span>
								</a>
							</li>
							<li class="w3_mobamu_twitter">
								<a href="#">
									<span class="fa fa-twitter"></span>
								</a>
							</li>
							<li class="w3_mobamu_instagram">
								<a href="#">
									<span class="fa fa-instagram"></span>
								</a>
							</li>
							<li class="w3_mobamu_linkedin">
								<a href="#">
									<span class="fa fa-linkedin"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- copyright -->
	<div class="cpy-right text-center py-3">
    	<p>© 2024 Serenity Resort, Lakshadweep Island. All rights reserved.</p>
	</div>

	<!-- move top icon -->
	<a href="#home" class="move-top text-center"></a>

</body>
</html>