<?php
session_start();
include 'db.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $username = mysqli_real_escape_string($conn, $_POST['Username']);
    $password = $_POST['Password'];

   
    $query = "SELECT password FROM admin WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        
        
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            header('Location: login.php'); 
            exit();
        }
    }

    
    echo "<script>alert('Invalid username or password!');</script>";
    echo "<script>window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<head>
<title>House of Beauty Madurai || Adminn</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
</head>
<body class="signup-body">
		<div class="agile-signup">	
			
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Login</h2>
				</div>
				<form action="" method="post">
					<input type="text" name="Username" value="" placeholder="Username" required="" >
					<input type="password" name="Password" value="" placeholder="PassWord" required=""  >
					<input type="submit" class="register" value="Login">
				</form>
				<div class="signin-text">
					<div class="text-left">
						<p><a href="#"> Forgot Password? </a></p>
					</div>
					
			</div>
			
			
			
		</div>
		<!-- footer -->
			<div class="copyright">
				<p>© 2024 HOUSE OF BEAUTY. All rights reserved. Design by  <a
                        href="tel:+(91) 63698 65319"><span style="color:#fcb216;  FONT-WEIGHT: 700;">ABDUL WAHID S</SPAN></a></p>
			</div>
			<!-- //footer -->
	<script src="js/proton.js"></script>
</body>
</html>
