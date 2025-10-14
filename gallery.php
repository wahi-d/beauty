<?php
include 'db.php'; // Include your database connection

$query = "SELECT id, ename, ecnt, photo FROM events";
$result = mysqli_query($conn, $query);
?>

<html lang="en">
<head>
<title>Gallery </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="assets/css/style-starter.css">
<link href="//fonts.googleapis.com/css2?family=Spartan:wght@300;400;600;700&display=swap" rel="stylesheet">
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
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>	
</head>
<body >


	<section class="wrapper scrollable">
		
		<section class="title-bar">
		  <header id="site-header" class="fixed-top" style="background-color: wheat;">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0 pt-lg-0" style="     margin-bottom: -15px;">
                <h1>
                    <a class="navbar-brand" style="margin-top: 5vh;" href="index.php">
                        <span class="logo-sub" style="color:0000" >House Of<span style="color:#f9506f"> Beauty</span></span></a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.php">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars" style="width: 5vh;"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times" style="width: 5vh;"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                   <ul class="navbar-nav mx-lg-auto" style="margin-top: 3vh;">
                        <li class="nav-item" >
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="services.php">Services</a>
                        </li> 
						<li class="nav-item active">
                            <a class="nav-link" href="gallery.php">gallery</a>
                        </li>
						
						  <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact US</a>
                        </li>
                    </ul>
                   
                </div>
               
            </nav>
        </div>
    </header>
		</section>
		<div class="main-grid" style="margin-top: 15vh;">
			
			<div class="agile-grids">	
				<!-- gallery -->
				<div class="grids-heading gallery-heading">
					<h2>Gallery</h2>
				</div>
				<div class="gallery-grids">
						<div class="show-reel">
						   <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-3 agile-gallery-grid">
                <div class="agile-gallery">
                    <?php 
                    $imagePath = "admin/uploads/" . htmlspecialchars($row['photo']);
                    if (file_exists($imagePath)) { // Check if the file exists
                    ?>
                        <a href="<?php echo $imagePath; ?>" class="lsb-preview" data-lsb-group="header">
                            <img src="<?php echo $imagePath; ?>" alt="<?php echo htmlspecialchars($row['ename']); ?>" style="max-width: 100%; height: auto;" />
                            <div class="agileits-caption">
                                <h4><?php echo htmlspecialchars($row['ename']); ?></h4>
                                <p><?php echo htmlspecialchars($row['ecnt']); ?></p>
								
                            </div>
                        </a>
                    <?php 
                    } 
                    ?>
                </div>
				
            </div>
        <?php } ?>
							<div class="clearfix"> </div>
						</div>
						
					
						
				</div>
			<!-- //gallery -->

			</div>
		</div>
		
		<!-- footer -->
		<div class="footer">
			<p>© 2024 HOUSE OF BEAUTY. All rights reserved |<br> Designed by <a
                        href="tel:+(91) 63698 65319"><span style="color:#f9506f;  FONT-WEIGHT: 700;">ABDUL WAHID S</SPAN></a></p>
		</div>
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	
	<!-- gallery -->
	<link rel="stylesheet" href="css/lsb.css">
	<script src="js/lsb.js"></script>
	<!-- //gallery -->
	<script src="js/proton.js"></script>
</body>
</html>
