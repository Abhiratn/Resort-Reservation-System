<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Serenity Resort : Lurxury Room </title>
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
	<script>
		$(document).ready(function() {
			$("#commentForm").submit(function(event) {
				event.preventDefault();
				var formData = $(this).serialize();
				$.ajax({
					type: "POST",
					url: "submit.php",
					data: formData,
					success: function(data) {
						$("#confirmationMessage").html("Comment added successfully!");
						// Update the comment section dynamically
						$.ajax({
							type: "GET",
							url: "luxury_Rdetails.php",
							success: function(data) {
								var comments = $(data).find(".comment-top");
								$("#comment-top").html(comments);
							}
						});
					}
				});
			});
		});
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
										<li><a href="index.php#services" class="drop-text">Services</a></li>
										<li><a href="index.php#why" class="drop-text">What We do</a></li>
										<li><a href="index.php#price" class="drop-text">Pricing</a></li>
										<li><a href="index.php#testi" class="drop-text">Testimonials</a></li>
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
			<li class="breadcrumb-item active" aria-current="page">Luxury Suite Details</li>
		</ol>
	</div>


	<!-- single -->
	<div class="blog-w3l py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Luxury Suite Details</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Experience the epitome of luxury and comfort at our Serenity Resort's exclusive suite. Unwind and relax in the beautifully crafted spaces designed to offer you a perfect escape.</p>

			<div class="blog-section px-lg-5">
				<div class="card border-0">
					<a href="luxury_Rdetails.html">
						<img src="images/luxxury.jpg" alt="Luxury Suite" class="img-fluid">
					</a>
					<div class="card-body p-0 py-4">
    					<h4 class="text-bl font-weight-bold blog-grid-title mt-4 mb-3">Indulge in Our Serenity Resort Luxury Suite</h4>
   		 				<p class="card-text">Our Luxury Suite redefines elegance and comfort, offering a spacious retreat for discerning guests. With its sophisticated design and upscale amenities, the suite provides an unparalleled experience for those seeking a lavish getaway. Enjoy the exquisite décor, plush furnishings, and serene ambiance that make it an ideal choice for couples or special occasions.</p>
    					<p class="card-text">The Luxury Suite features a generous living area with stylish seating and a separate bedroom with a king-size bed, accommodating up to two guests. Modern conveniences abound, including a large flat-screen television, high-speed Wi-Fi, and a well-stocked minibar. Expansive windows provide breathtaking views of the surrounding landscape, allowing natural light to create an inviting atmosphere throughout the suite.</p>
    					<p class="card-text">Step out onto your private terrace, where you can unwind in style while taking in the stunning scenery. The luxurious en-suite bathroom offers a deep soaking tub, a walk-in shower, and premium toiletries, creating a spa-like experience for your relaxation. Whether you’re celebrating a special occasion or simply seeking a serene escape, our Luxury Suite at Serenity Resort promises a memorable and indulgent stay.</p>
						</div>
					</div>
					<p class="my-3">The suite includes a <strong>king-size bed</strong>, a <strong>separate living area</strong>, and a fully equipped bathroom with a <em>jacuzzi</em>. Guests can also enjoy <strong>complimentary breakfast</strong> and <strong>evening refreshments</strong> during their stay.</p>
					<ul class="my-3">
						<li><strong>Sumptuous King-Size Bed:</strong> Experience ultimate comfort with a plush king-size bed, designed to ensure a restful night’s sleep.</li>
						<li><strong>Spacious Living Area:</strong> The separate living area is perfect for relaxation, featuring stylish seating and a flat-screen TV for entertainment.</li>
						<li><strong>Luxurious Bathroom:</strong> Indulge in the fully equipped bathroom that boasts a jacuzzi, offering the perfect way to unwind after a day of exploring.</li>
						<li><strong>Complimentary Breakfast:</strong> Start your day with a delicious breakfast included in your stay, featuring a variety of options to suit all tastes.</li>
						<li><strong>Evening Refreshments:</strong> Enjoy evening refreshments, including a selection of snacks and beverages, to enhance your luxurious experience.</li>
					</ul>
					
				<div class="comment-section">
					<h4>Comments</h4>
					<!-- Comments List (PHP to display stored comments) -->
					<?php
	                   // Database connection (use your actual connection details)
						$conn = new mysqli("sql302.byethost24.com", "b24_37397899", "q236@0!*00prt", "b24_37397899_serenityresort");

						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}

						$sql = "SELECT * FROM comments WHERE room_type='luxury' ORDER BY id DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo '<div class="comment">';
								echo '<img src="images/comment.jpg" alt="Commenter" class="img-fluid" />';
								echo '<div class="comment-body">';
								echo '<h5 class="mb-2">'. $row["name"] .'</h5>';
								echo '<p>'. $row["message"] .'</p>';
								echo '</div></div>';
							}
						} else {
							echo "<p>No comments yet. Be the first to leave a comment!</p>";
						}
						$conn->close();
					?>
				</div>

				<div id="confirmationMessage" class="my-3"></div>

				<div class="comment-form">
					<h4>Leave a Comment</h4>
					<form id="commentForm" action="submit.php" method="post">
						<input type="hidden" name="room_type" value="luxury">
						<div class="form-group">
							<input class="form-control" type="text" name="name" placeholder="Name" required="">
						</div>
						<div class="form-group">
							<input class="form-control" type="email" name="email" placeholder="Email" required="">
						</div>
						<div class="form-group">
							<textarea class="form-control" name="message" placeholder="Message..." required=""></textarea>
						</div>
						<button type="submit" class="btn submit mt-4">Submit</button>
					</form>
				</div>
			</div>
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