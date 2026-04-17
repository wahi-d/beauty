<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>THE HOUSE OF BEAUTY MADURAI</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Spartan:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!--/header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0 pt-lg-0">
                <h1>
                    <a class="navbar-brand" href="index.php">
                        <span class="logo-sub">House Of<span style="color:#f9506f"> Beauty</span></span></a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.php">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                      <ul class="navbar-nav mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
						<li class="nav-item ">
                            <a class="nav-link" href="gallery.php">gallery</a>
                        </li>
						  <li class="nav-item active">
                            <a class="nav-link" href="contact.php">Contact US</a>
                        </li>
                    </ul>

                    <div class="top-quote mr-lg-3 mt-lg-0 mr-lg-4">
                        <a href="booking.php" class="btn btn-style btn-white btn-primary" style="padding: 8px 10px;   padding-top: 10px;">Book Now</a>
                    </div>
                </div>
                <!-- toggle-switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle-switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->
    <div class="section-mid-gap"></div>
    <!--/Banner-inner-pages-->
    <div class="inner-banner">
        <section class="w3l-breadcrumb text-left">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active"><span class="fas fa-chevron-right mx-2" aria-hidden="true"></span> Contact Us</li>
            </ul>
          </div>
        </section>
      </div>
    <!--//Banner-inner-pages-->
     <!--/contact1-->
        <section class="w3l-contact-1 py-5" id="contact">
            <div class="contacts-9 py-lg-5 py-md-4">
                <div class="container">
                    <div class="row contact-view">
                        <div class="col-lg-6 cont-details mb-lg-0 mb-5 pr-lg-5">
                            <h6 class="title-subw3hny">Get in touch</h6>
                            <h3 class="title-w3l mb-4">Contact <span class="thin">Us</span></h3>
                            <p class="mb-sm-5 mb-4">Start working with Us that can provide everything you need to generate awareness, drive traffic,
                                connect. <br> We guarantee that you’ll be able to have any issue resolved within 24 hours.</p>
                            <div class="cont-top">
                                <div class="cont-left text-center">
                                    <span class="fas fa-phone-alt"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Phone number</h6>
                                    <p><a href="tel:+(91) 88837 67671">+(91) 88837 67671</a></p>
                                </div>
                            </div>
                            <div class="cont-top margin-up">
                                <div class="cont-left text-center">
                                    <span class="fas fa-envelope-open-text"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Send Email</h6>
                                    <p><a href="mailto:passionkraft@mail.com" class="mail">passionKraft@mail.com</a></p>
                                </div>
                            </div>
                            <div class="cont-top margin-up">
                                <div class="cont-left text-center">
                                    <span class="fas fa-map-marked-alt"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Address</h6>
                                    <p class="pr-lg-5">Ground Floor, 1st shop, No 4, Kamala 1st street, Chinna Chokkikulam, Madurai - 625002</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 map-content-9">
                            <h5 class="mb-sm-4 mb-3">Drop Us a Line</h5>
                            <form action="#" method="post">
                                <div class="twice-two">
                                    <input type="text" class="form-control" name="Name" placeholder="Name"
                                        required="">
                                    <input type="email" class="form-control" name="Email" placeholder="Email"
                                        required="">
                                </div>
                                <div class="twice">
                                    <input type="text" class="form-control" name="Subject" 
                                        placeholder="Subject" required="">
                                </div>
                                <textarea name="Message" class="form-control" placeholder="Message"
                                    required=""></textarea>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary btn-style mt-4">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php include'footer.php';?>