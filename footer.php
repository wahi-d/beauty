 <!--/contact1-->
        <div class="map-iframe">
            <iframe
                src="https://maps.google.com/maps?q=%20The%20House%20Of%20Beauty%20%20Ground%20Floor,%201st%20shop,%20No%204,%20Kamala%201st%20street,%20Chinna%20Chokkikulam,%20Madurai%20-%20625002%20%20https://jsdl.in/DT-41A6AI62MAQ&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
        </div>
    <!--//contact-block -->
    <!-- //testimonials -->
    <section class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4 py-sm-3">
                <div class="row footer-top-29">
                    <div class="col-lg-4 footer-list-29 footer-1 pr-lg-5">
                        <h2><a class="navbar-brand" href="index.php">
                                HOUSE OF<span style="color:#f9506f"> BEAUTY</span></a></h2>
                        <p class="pr-lg-5 mr-xl-4 mb-4">Beauty parlour providing services such as hair styling, hair do, hair rebonding, hd makeup and basic makeup.
                        </p>
                        <a href="contact.php" class="btn btn-style btn-primary mt-2">Contact Us</a>
                    </div>
                    <div class="col-lg-4 footer-list-29 footer-3 mt-lg-0 mt-5 pr-lg-5">
                        <h6 class="footer-title-29">Quick <span class="thinw3">Links</span></h6>
                        <div class="footer-listw3-grids">
                            <ul class="footer-listw3">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact.php">Contact</a></li>

                            </ul>
                           
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-list-29 footer-4 mt-lg-0 mt-5">
                        <h6 class="footer-title-29">Keep <span class="thinw3">Connected</span></h6>
                        <p>Get Updates By Subscribe Our Weekly Newsletter</p>

                        <form action="#" class="subscribe" method="post">
                            <input type="email" name="email" placeholder="Your Email Address" required="">
                            <button><span class="fas fa-paper-plane"></span></button>
                        </form>
                        <div class="main-social-footer-29 mt-4">
                            <a href="https://www.facebook.com/mathina.shahan" class="facebook"><span class="fab fa-facebook-f"></span></a>
                            <a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a>
                            <a href="https://www.instagram.com/mathina_shahan__" class="instagram"><span class="fab fa-instagram"></span></a>
                            <a href="#google" class="google"><span class="fab fa-google-plus-g"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="bottom-copies text-center">
            <div class="container">
                <p class="copy-footer-29">© 2024 HOUSE OF BEAUTY. All rights reserved |<br> Designed by <a
                        href="tel:+(91) 63698 65319"><span style="color:#f9506f;  FONT-WEIGHT: 700;">ABDUL WAHID S</SPAN></a></p>
            </div>
        </div>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-angle-up"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- //move top -->
    </section>

    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <script id="rendered-js">
        (function () {
            var $slides = document.querySelectorAll('.slide');
            var $controls = document.querySelectorAll('.slider__control');
            var numOfSlides = $slides.length;
            var slidingAT = 1300; // sync this with scss variable
            var slidingBlocked = false;

            [].slice.call($slides).forEach(function ($el, index) {
                var i = index + 1;
                $el.classList.add('slide-' + i);
                $el.dataset.slide = i;
            });

            [].slice.call($controls).forEach(function ($el) {
                $el.addEventListener('click', controlClickHandler);
            });

            function controlClickHandler() {
                if (slidingBlocked) return;
                slidingBlocked = true;

                var $control = this;
                var isRight = $control.classList.contains('m--right');
                var $curActive = document.querySelector('.slide.s--active');
                var index = +$curActive.dataset.slide;
                isRight ? index++ : index--;
                if (index < 1) index = numOfSlides;
                if (index > numOfSlides) index = 1;
                var $newActive = document.querySelector('.slide-' + index);

                $control.classList.add('a--rotation');
                $curActive.classList.remove('s--active', 's--active-prev');
                document.querySelector('.slide.s--prev').classList.remove('s--prev');

                $newActive.classList.add('s--active');
                if (!isRight) $newActive.classList.add('s--active-prev');


                var prevIndex = index - 1;
                if (prevIndex < 1) prevIndex = numOfSlides;

                document.querySelector('.slide-' + prevIndex).classList.add('s--prev');

                setTimeout(function () {
                    $control.classList.remove('a--rotation');
                    slidingBlocked = false;
                }, slidingAT * 0.75);
            };
        })();
        //# sourceURL=pen.js
    </script>
    <!--light-box-files -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <script src="assets/js/jquery.chocolat.js"></script>
    <script type="text/javascript ">
        $(function () {
            $('.w3_agile_portfolio_grid a').Chocolat();
        });
    </script>
    <!-- /js for portfolio lightbox -->
    <!-- stats number counter-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats number counter -->
    <!-- script for testimonials -->
    <script>
        $(document).ready(function () {
            $('.owl-testimonial').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                dots: false,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    480: {
                        items: 1,
                        nav: true
                    },
                    667: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script for testimonials -->

    <!-- script for blog slider -->
    <script>
        $(document).ready(function () {
            $('.owl-two').owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 2,
                        nav: false
                    },
                    992: {
                        items: 3,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for blog slider -->

    <script src="assets/js/owl.carousel.js"></script>

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>