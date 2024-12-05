<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Serenity Resort : Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"/>

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	<script src="https://cdn.botpress.cloud/webchat/v2.1/inject.js"></script>
	<script src="https://mediafiles.botpress.cloud/2a8e32fa-bf48-421a-b607-c23a750cc63f/webchat/v2.1/config.js"></script>

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
					<!-- logo -->
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
									<label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down"
											aria-hidden="true"></span>
									</label>
									<a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<li><a href="index.php" class="drop-text">Services</a></li>
										<li><a href="index.php" class="drop-text">What We do</a></li>
										<li><a href="index.php" class="drop-text">Pricing</a></li>
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
		<div class="banner_w3lspvt-2"></div>
	</div>


	<!-- page details -->
	<div class="breadcrumb-mobamu">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
		</ol>
	</div>


	<!-- contact -->
	<section class="contact py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Contact Serenity Resort</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Feel free to reach out to us. We are here to answer any queries or concerns you may have.</p>
			<ul class="list-unstyled row text-left pt-4 mb-lg-5">
				<li class="col-lg-4 adress-info mb-lg-0 mb-5">
					<div class="row">
						<div class="col-3 text-lg-center text-sm-right text-center adress-icon">
							<span class="fa fa-map-marker"></span>
						</div>
						<div class="col-9 text-left">
							<h6>Location</h6>
							<p>Serenity Resort,
								<br>Lakshadweep, India.
							</p>
						</div>
					</div>
				</li>
				<li class="col-lg-4 adress-info mb-lg-0 mb-5">
					<div class="row">
						<div class="col-3 text-lg-center text-sm-right text-center adress-icon">
							<span class="fa fa-envelope-open-o"></span>
						</div>
						<div class="col-9 text-left">
							<h6>Email</h6>
							<a href="mailto:info@serenityresort.com">info@serenityresort.com</a>
							<br>
							<a href="mailto:support@serenityresort.com">support@serenityresort.com</a>
						</div>
					</div>
				</li>
				<li class="col-lg-4 adress-info mb-lg-0 mb-5">
					<div class="row">
						<div class="col-3 text-lg-center text-sm-right text-center adress-icon">
							<span class="fa fa-phone"></span>
						</div>
						<div class="col-9 text-left">
							<h6>Phone Number</h6>
							<p>+91 12345 67890</p>
							<p>+91 98765 43210</p>
						</div>
					</div>
				</li>
			</ul>

			<div class="contact-form mx-auto text-left mt-lg-5 mt-4">
				<?php
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$servername = "sql302.byethost24.com";
						$username = "b24_37397899";
						$password = "q236@0!*00prt";
						$dbname = "b24_37397899_serenityresort";
						
						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);

						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}

						$name = $_POST['name'];
						$email = $_POST['email'];
						$phone = $_POST['phone'];
						$issues = $_POST['issues'];

						$sql = "INSERT INTO contacts (name, email, phone, issues) VALUES ('$name', '$email', '$phone', '$issues')";

						if ($conn->query($sql) === TRUE) {
							echo "<div class='alert alert-success'>Thank you for contacting us. We will get back to you shortly!</div>";
						} else {
							echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
						}

						$conn->close();
					}
				?>
				<form name="contactform" id="contactform1" method="post" action="">
					<div class="row">
						<div class="col-lg-4 con-gd">
							<div class="form-group" data-aos="fade-up">
								<label>Name *</label>
								<input type="text" class="form-control" id="name" placeholder="Your Name" name="name" required="">
							</div>
						</div>
						<div class="col-lg-4 con-gd">
							<div class="form-group" data-aos="fade-up">
								<label>Email *</label>
								<input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required="">
							</div>
						</div>
						<div class="col-lg-4 con-gd">
							<div class="form-group" data-aos="fade-up">
								<label>Phone No. *</label>
								<input type="text" class="form-control" id="phone" placeholder="Your Phone Number" name="phone" required="">
							</div>
						</div>
					</div>
					<div class="form-group mb-5">
						<label>How can we help?</label>
						<textarea name="issues" class="form-control" id="iq" placeholder="Write your message here" required=""></textarea>
					</div>
					<div class="contact-page">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</section>


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
							<a href="index.php#services">Services</a>
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