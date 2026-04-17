<?php
session_start(); // Start the session
include 'db.php';

$success_message = ''; // Initialize success message variable

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data and sanitize it
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $phone = mysqli_real_escape_string($conn, $_POST['Phone']);
    $evntname = mysqli_real_escape_string($conn, $_POST['evntname']);
    $service = mysqli_real_escape_string($conn, $_POST['service']);
    $evntdate = mysqli_real_escape_string($conn, $_POST['date']);
    $cmt = mysqli_real_escape_string($conn, $_POST['cmt']);

    // Check if the date is in the correct format (YYYY-MM-DD)
    $date_format = DateTime::createFromFormat('Y-m-d', $evntdate);
    if ($date_format && $date_format->format('Y-m-d') === $evntdate) {
        // Insert the data into the database
        $query = "INSERT INTO booking (fname, phone, evntname, service, evntdate, cmt) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'ssssss', $fname, $phone, $evntname, $service, $evntdate, $cmt);

        if (mysqli_stmt_execute($stmt)) {
            $success_message = "Booking successful!";
            echo "<script>alert('Booked successfuly');</script>";
            header("refresh:0; url=index.php");
        } else {
            $error_message = "Error: " . mysqli_error($conn);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        $error_message = 'Invalid date format. Please enter date as YYYY-MM-DD.';
    }
}

// Close the database connection
mysqli_close($conn);
?>
<html lang="en">
<head>
	<title>Booking-House Of Beauty Madurai</title>
	<link href="assets/css/style.css" rel='stylesheet' type='text/css'/>
	<link href="//fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Hotel Enquiry  Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
	<h1>BOOK YOUR SLOT</h1>
	<div class="main-agile">
		<form action="" method="post">
		<input type="text"  class="fname" name="fname" placeholder="Enter Your Name" required="">	
		<input type="text"  class="phone" name="Phone" placeholder="Phone Number" required="">
		<input type="text"  class="evntname" name="evntname" placeholder="Event name" required="">	
		
		
<select class="num" name="service" id="service" >
				<option value="">Service Needed</option>
				<option value="Wedding Makeup">Wedding Makeup</option>
				<option value="Groom Makeup">Groom Makeup</option>
				<option value="Bridal Makeup">Bridal Makeup</option>
				<option value="Basic Makeup">Basic Makeup</option>
				<option value="HD Makeup">HD Makeup</option>
				<option value="Air Brush Makeup">Air Brush Makeup</option>
				<option value="Hair Rebonding">Hair Rebonding</option>
				<option value="air Styling">Hair Styling</option>
				<option value="Hair Straightening">Hair Straightening</option>
				<option value="Hair Smoothening">Hair Smoothening</option>
				<option value="Hair Do (Female)">Hair Do (Female)</option>
				<option value="Steam Bath">Steam Bath</option>
				<option value="Saree Draping">Saree Draping</option>
				<option value="Waxing">Waxing </option>
				<option value="Hair Care">Hair Care </option>
				<option value="Face Care">Face Care</option>
				<option value="Manicure & Pedicure">Manicure & Pedicure </option>
				<option value="Beard Grooming">Beard Grooming</option>
				<option value="Massage">Massage</option>
				<option value="Hair Treatment">Hair Treatment</option>
			</select>		
		<input  id="datepicker" name="date" type="text" placeholder="Event Date"  required="">
		<input type="text"  class="cmt" name="cmt" placeholder="Comment" required="">
			
			
			
			
			<input type="submit" value="BOOK YOUR SLOT"><br><br>
			<a href="index.php" style="color:white;">back</a>
		</form>
	</div>
	<div class="footer-w3l">
		<p class="agileinfo"> © 2024 HOUSE OF BEAUTY. All rights reserved |<br> Designed by <a
                        href="tel:+(91) 63698 65319"><span style="color:#f9506f;  FONT-WEIGHT: 700;">ABDUL WAHID S</SPAN></a></p>
	</div>
<!-- Calendar -->
	<script src="assets/js/jquery.min.js"></script>
	<link rel="stylesheet" href="assets/css/jquery-ui.css" />
	<script src="assets/js/jquery-ui.js"></script>
		<script>
		   $(function() {
            $("#datepicker").datepicker({
                dateFormat: 'yy-mm-dd' // Ensure date is in the correct format
            });
        });
	 </script>
<!-- //Calendar -->
</body>
</html>