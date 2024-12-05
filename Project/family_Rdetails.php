<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Serenity Resort : About Us </title>
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
							url: "family_Rdetails.php",
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
			<li class="breadcrumb-item active" aria-current="page">Family Room Details</li>
		</ol>
	</div>


	<!-- family -->
	<div class="blog-w3l py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Family Room Details</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Create lasting memories in our Serenity Resort's Family Room, designed for comfort and togetherness. Experience spacious accommodations perfect for families.</p>

			<div class="blog-section px-lg-5">
				<div class="card border-0">
					<a href="family_Rdetails.html">
						<img src="images/family.jpg" alt="Family Room" class="img-fluid">
					</a>
					<div class="card-body p-0 py-4">
   						<h4 class="text-bl font-weight-bold blog-grid-title mt-4 mb-3">Enjoy Our Serenity Resort Family Room</h4>
    					<p class="card-text">Our Family Room offers ample space and modern amenities, ensuring a relaxing stay for guests of all ages. The room is thoughtfully designed with a blend of comfort and style, providing the perfect home away from home. With elegant décor, cozy bedding, and a serene ambiance, it’s ideal for families looking to create unforgettable memories together.</p>
    					<p class="card-text">Equipped with a spacious living area and separate sleeping quarters, our Family Room can comfortably accommodate up to four guests. Enjoy the convenience of modern facilities, such as a flat-screen television, high-speed Wi-Fi, and a minibar. The large windows offer breathtaking views of the resort’s lush surroundings, letting in natural light to brighten your day.</p>
    					<p class="card-text">The Family Room also features a private balcony where you can unwind while soaking in the tranquil atmosphere of the resort. Whether you want to relax indoors or explore the resort’s amenities, our Family Room is designed to meet your every need. Come experience the ultimate family vacation at Serenity Resort, where comfort meets luxury.</p>
					</div>
				</div>
					<p class="my-3">The room features a <strong>king-size bed</strong> along with <strong>twin beds</strong>, a cozy sitting area, and a spacious bathroom equipped with <em>family-friendly amenities</em>. Enjoy <strong>complimentary snacks and drinks</strong> to make your stay even more enjoyable.</p>
					<ul class="my-3">
						<li><strong>Comfortable Bedding:</strong> Relax in a plush king-size bed while the kids enjoy the comfort of twin beds, ensuring a restful night for everyone.</li>
						<li><strong>Spacious Layout:</strong> The room’s layout is designed to offer ample space, allowing families to move around freely without feeling cramped.</li>
						<li><strong>Modern Bathroom:</strong> The spacious bathroom includes essentials like a walk-in shower, a separate bathtub, and kid-friendly toiletries.</li>
						<li><strong>Complimentary Refreshments:</strong> Indulge in a selection of snacks and drinks, provided free of charge, for a pleasant and hassle-free experience.</li>
						<li><strong>Cozy Sitting Area:</strong> Spend quality time together in the sitting area, perfect for playing games, watching TV, or simply unwinding after a day of adventure.</li>
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

						$sql = "SELECT * FROM comments WHERE room_type='family' ORDER BY id DESC";
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
						<input type="hidden" name="room_type" value="family">
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