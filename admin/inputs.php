<?php
include 'db.php'; // Include your database connection
include 'auth.php';
	
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $eventName = $_POST['ename'];
    $eventDescription = $_POST['ecnt'];
    $targetDir = "uploads/";
    $fileName = basename($_FILES["photo"]["name"]);
    $targetFile = $targetDir . $fileName;

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
        $query = "INSERT INTO events (ename, ecnt, photo) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $eventName, $eventDescription, $fileName);
        $stmt->execute();
		  if (file_exists($targetFile)) {
        echo "<script>alert('The event has been uploaded successfully.');</script>";
    } else {
        echo "<script>alert('File Uploaded was not supported');</script>";
    }
    
}}


?>

<!DOCTYPE html>
<head>
<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Inputs :: w3layouts</title>
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
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
		
</head>
<body class="dashboard-page">

	<nav class="main-menu">
		<ul>
			<li>
				<a href="login.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Dashboard
					</span>
				</a>
			</li>
			
			<li>
				<a href="tables.php">
					<i class="icon-table nav-icon"></i>
					<span class="nav-text">
					Tables
					</span>
				</a>
			</li>
			<li>
				<a href="inputs.php">
					<i class="fa fa-file-text-o nav_icon" aria-hidden="true"></i>
					<span class="nav-text">
					Gallery
					</span>
				</a>
			</li>
			<!--<li>
				<a href="pass.php">
					<i class="fa fa-bar-chart nav_icon" aria-hidden="true"></i>
					<span class="nav-text">
					change Password
					</span>
				</a>
			</li>-->
		</ul>
		<ul class="logout">
			<li>
			<a href="index.php">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			</span>
			</a>
			</li>
		</ul>
	</nav>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<h1><a href="login.php">House Of Beauty</a></h1>
			</div>
			
					<div class="profile_details">		
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">	
                                        <span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
                                    </div>	
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li><a href="index.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- input-forms -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Gallery Input Forms</h2>
					</div>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<h4>Input Form :</h4>
								</div>
								<div class="form-body">
									<form action="inputs.php" method="post" enctype="multipart/form-data"> 
										<div class="form-group"> 
											<label>Event Name</label> 
											<input type="text" name="ename" class="form-control" id="ename" placeholder="Event Name" required> 
										</div> 
										<div class="form-group"> 
											<label>Content</label> 
											<input type="text" name="ecnt" class="form-control" id="ecnt" placeholder="Event Content" required> 
										</div> 
										<div class="form-group"> 
											<label>File input</label> 
											<input type="file" name="photo" id="Photo" required> 
											<p class="help-block"></p> 
										</div>                    Allowed types ('jpg', 'jpeg', 'png', 'gif')
										<button type="submit" class="btn btn-default w3ls-button">Submit</button> 
									</form> 
										
										
								</div>
							</div>
						</div>
					</div>
					</div>
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
	<script src="js/proton.js"></script>
</body>
</html>
