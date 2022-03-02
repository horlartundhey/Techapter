<?php require('includes/config.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bushub - Multipurpose Consulting & Business Template">

    <!-- ========== Page Title ========== -->
    <title>THE EVERYDAY CHAPTER- TEC</title>

     <!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/fave/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/fave/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/fave/favicon-16x16.png">
	<link rel="manifest" href="assets/fave/site.webmanifest">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->   

    <!-- Start Topbar 
    ============================================= -->
     <div class="topbar-area bottom-border">
        <div class="container">
            <div class="row">
                <div class="col-md-3 logo">
                    <a href="index.html">                    
                        <img src="assets/img/TEClogo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <div class="col-md-9 address-info text-right">
                    <div class="info box">
                        <ul>                           
                            <li>
                                <div class="icon">
                                    <i class="ti-email"></i>
                                </div>
                                <div class="info">
                                    <span>Email</span> Info@theeverydaychapter.com
                                </div>
                            </li>                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky active-border logo-less attr-border bootsnav">            

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>                        
                        <li class="contact"><a href="#"> Call <strong> +234 - 7069697426</strong></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/TEClogo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left" data-in="#" data-out="#">
                    <li class="dropdown">
                            <a href="index.php" class="active">Home</a>                            
                        </li>
                        <li><a href="about.php">About Us</a></li>                                               
                        <li class="dropdown">
                            <a href="team.php">Team</a>                            
                        </li>
                        <li><a href="gallery.php">Gallery</a></li>

                        <li><a href="blog.php">Blog</a></li>
                                              
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star Contact Area
    ============================================= -->
    <div class="contact-area default-padding-top">
        <div class="container">
            <div class="row">

                <!-- Start Contact Info -->
                <div class="col-md-8 col-md-offset-2 text-center contact-forms">
                    <div class="contact-box">
                        <h2>leave a <strong>message</strong></h2>
                        <p>
                            We would like to Hear from You
                        </p>
                        <form action="assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <i class="fas fa-user"></i>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <i class="fas fa-envelope-open"></i>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <i class="fas fa-phone"></i>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                        <i class="fas fa-pencil-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Contact Info -->

            </div>
        </div>
        <!-- Google Maps -->
        <div class="maps-area">
            <div class="container-full">
                <div class="row">
                    <div class="google-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Star Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="row">

                <div class="f-items default-padding">
                    <div class="equal-height col-md-4 col-sm-6 item">
                        <div class="f-item about">
                            <h4 class="widget-title">About</h4>
                            <p>
                                Required honoured trifling eat pleasure man relation. Assurance yet bed was improving furniture man. Distrusts delighted
                            </p>
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </li>
                            </ul>
                            <div class="newsletter">
                                <h5>Send us a newsletter to get update</h5>
                                <form action="#">
                                    <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
                                    <button type="submit"><i class="fa fa-paper-plane"></i></button>  
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="equal-height col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Services</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Lead Generation</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Mutual Funds</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Social Marketing</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Markets Research</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Growth Hacking</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Affiliate Program</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="equal-height col-md-3 col-sm-6 item">
                        <div class="f-item recent-post">
                            <h4 class="widget-title">Recent Post</h4>

                            <div class="single">
                                <div class="content">
                                    <a href="#">
                                         Indulgence but assistance favourable cultivated.
                                    </a>
                                    <ul class="meta">
                                        <li>
                                            <i class="ti-calendar"></i> 16 Aug, 2019
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="single">
                                <div class="content">
                                    <a href="#">
                                         Has and upon his last here must. Domestic replying 
                                    </a>
                                    <ul class="meta">
                                        <li>
                                            <i class="ti-calendar"></i> 24 Sep, 2019
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="equal-height col-md-3 col-sm-6 item">
                        <div class="f-item contact">
                            <h4 class="widget-title">Contact Us</h4>
                            <ul>
                                
                                <li>
                                    <h5>Phone</h5>
                                    <span>+2347069697426</span>
                                </li>
                                <li>
                                    <h5>Email</h5>
                                    <span>info@theeverydaychapter.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 copyright">
                        <p>&copy; Copyright 2020. All Rights Reserved by <a href="#">validthemes</a></p>
                    </div>
                    <div class="col-md-7 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms of user</a>
                            </li>
                            <li>
                                <a href="#">License</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer-->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>