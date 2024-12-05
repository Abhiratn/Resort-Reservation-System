<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Serenity Resort : Booking Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--Guest number increase-->
	<script>
		function checkGuests() {
    		var guestSelect = document.getElementById("no_of_guests");
    		var guestInput = document.getElementById("guest_count_input");

    		if (guestSelect.value == "7") {
        		guestInput.style.display = "block"; // Show the input for number of guests
        		document.getElementById("custom_guest_count").required = true; // Make the custom input field required
    		} else {
        		guestInput.style.display = "none"; // Hide the input
        		document.getElementById("custom_guest_count").required = false; // Make the custom input field not required
    		}
		}
	</script>
	<!--Date verification-->
	<script>
		document.addEventListener("DOMContentLoaded", function () {
			const arrivalDateInput = document.querySelector('input[name="arrival_date"]');
			const departureDateInput = document.querySelector('input[name="departure_date"]');
			const form = document.querySelector('form');

			// Set min date to today's date for both arrival and departure date inputs
			const today = new Date().toISOString().split('T')[0];
			arrivalDateInput.setAttribute('min', today);
			departureDateInput.setAttribute('min', today);

			form.addEventListener('submit', function (event) {
				const arrivalDate = new Date(arrivalDateInput.value);
				const departureDate = new Date(departureDateInput.value);

				// Check if departure date is the same or earlier than the arrival date
				if (departureDate <= arrivalDate) {
					alert("Departure date must be later than the arrival date.");
					event.preventDefault();  // Prevent form submission
				}
			});
		});
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
			<li class="breadcrumb-item active" aria-current="page">Booking Form</li>
		</ol>
	</div>

<!-- Booking Form -->
<?php
// Database connection variables
$host = "sql302.byethost24.com";  // Change this to your host
$username = "b24_37397899";   // Change this to your MySQL username
$password = "q236@0!*00prt"; // Change this to your MySQL password
$dbname = "b24_37397899_serenityresort";  // Change this to your database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $arrival_date = $_POST['arrival_date'];
    $departure_date = $_POST['departure_date'];
    $room_type = $_POST['room_type'];
    $no_of_guests = $_POST['no_of_guests'];
    $custom_guest_count = isset($_POST['custom_guest_count']) ? $_POST['custom_guest_count'] : null;
    $message = $_POST['message'];

    // Determine the number of guests
    $guest_count = $custom_guest_count ? $custom_guest_count : $no_of_guests;

    // Convert dates to DateTime objects for comparison
    $arrivalDate = new DateTime($arrival_date);
    $departureDate = new DateTime($departure_date);
    $today = new DateTime(); // Get today's date

    // Validate that departure date is not the same or earlier than arrival date
    if ($departureDate <= $arrivalDate) {
        echo "Error: Departure date must be later than the arrival date.<br>";
        exit;
    }

    // Validate that arrival date is not earlier than today
    if ($arrivalDate < $today) {
        echo "Error: Arrival date cannot be earlier than today's date.<br>";
        exit;
    }

    // Validate that departure date is not earlier than today
    if ($departureDate < $today) {
        echo "Error: Departure date cannot be earlier than today's date.<br>";
        exit;
    }

    // Prepare SQL query to insert the data into the 'bookings' table
    $stmt = $conn->prepare("INSERT INTO bookings (first_name, last_name, email, phone, arrival_date, departure_date, room_type, no_of_guests, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters to the SQL query
    $stmt->bind_param("sssssssis", $first_name, $last_name, $email, $phone, $arrival_date, $departure_date, $room_type, $guest_count, $message);

    // Execute the query and check if it was successful
    if ($stmt->execute()) {
        echo "<div class='container py-5'>";
        echo "<h3 class='tittle text-center text-bl font-weight-bold'>Booking Confirmed</h3>";
        echo "<p class='text-center'>Thank you for booking with Serenity Resort. Your booking has been saved.</p>";
        echo "<ul class='list-group'>";
        echo "<li class='list-group-item'><strong>Name:</strong> " . htmlspecialchars($first_name) . " " . htmlspecialchars($last_name) . "</li>";
        echo "<li class='list-group-item'><strong>Email:</strong> " . htmlspecialchars($email) . "</li>";
        echo "<li class='list-group-item'><strong>Phone:</strong> " . htmlspecialchars($phone) . "</li>";
        echo "<li class='list-group-item'><strong>Arrival Date:</strong> " . htmlspecialchars($arrival_date) . "</li>";
        echo "<li class='list-group-item'><strong>Departure Date:</strong> " . htmlspecialchars($departure_date) . "</li>";
        echo "<li class='list-group-item'><strong>Room Type:</strong> " . htmlspecialchars($room_type) . "</li>";
        echo "<li class='list-group-item'><strong>Number of Guests:</strong> " . htmlspecialchars($guest_count) . "</li>";
        echo "<li class='list-group-item'><strong>Message:</strong> " . htmlspecialchars($message) . "</li>";
        echo "</ul>";
        echo "<div class='text-center mt-3'><a href='" . $_SERVER['PHP_SELF'] . "' class='btn btn-primary'>Book Another Room</a></div>";
        echo "</div>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Display the booking form (same as your original form)
    ?>

	<div class="register-w3 py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Booking Form</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Please fill in the form below to reserve your stay at Serenity Resort.</p>
			<div class="comment-top mt-5">
				<div class="comment-bottom mobamuinfo_mail_grid_right">
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<div class="row">
							<div class="col-lg-6 form-group">
								<label>First Name</label>
								<input class="form-control" type="text" name="first_name" placeholder="Type Here.." required="">
							</div>
							<div class="col-lg-6 form-group">
								<label>Last Name</label>
								<input class="form-control" type="text" name="last_name" placeholder="Type Here.." required="">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 form-group">
								<label>Email</label>
								<input class="form-control" type="email" name="email" placeholder="Email" required="">
							</div>
							<div class="col-lg-6 form-group">
								<label>Phone Number</label>
								<input class="form-control" type="text" name="phone" placeholder="Phone Number" required="">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 form-group date-plu">
								<label>Departure Date</label>
								<input type="date" name="departure_date" required="">
							</div>
							<div class="col-lg-6 form-group date-plu">
								<label>Arrival Date</label>
								<input type="date" name="arrival_date" required="">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 form-group">
								<label>Select Your Room</label>
								<select name="room_type" required="" class="form-control">
									<option value="">Room Type</option>
									<option value="Single Room">Single Room</option>
									<option value="Double Room">Double Room</option>
									<option value="Suite Room">Suite Room</option>
								</select>
							</div>

							<div class="col-lg-6 form-group">
								<label>No Of Guests</label>
								<select name="no_of_guests" id="no_of_guests" class="form-control" required="" onchange="checkGuests()">
									<option value="">No. of guests</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7 or more</option>
								</select>
							</div>
						</div>
						<!-- The guest count input field that appears when "7 or more" is selected -->
						<div class="row">
							<div class="col-lg-6 form-group" id="guest_count_input" style="display:none;">
								<label>Enter Number of Guests</label>
								<input class="form-control" type="number" id="custom_guest_count" name="custom_guest_count" placeholder="Enter number of guests" min="8">
							</div>
						</div>

						<div class="form-group">
							<label>Write Message</label>
							<textarea class="form-control" name="message" placeholder="Write Here.." required=""></textarea>
						</div>
						<button type="submit" class="btn submit mt-3">Book Now</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php
	}
	?>

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