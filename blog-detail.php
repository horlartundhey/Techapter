<?php include 'includes/config.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate, postImage  FROM blog_posts_seo WHERE postSlug = :postSlug');
$stmt->execute(array(':postSlug' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
    header('Location: ./');
    exit;
}
?>

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
                            <a href="index.php" >Home</a>                            
                        </li>
                        <li><a href="about.php">About Us</a></li>                                               
                        <li class="dropdown">
                            <a href="team.php">Team</a>                            
                        </li>
                        <li><a href="gallery.php">Gallery</a></li>

                        <li><a href="blog.php" class="active">Blog</a></li>
                       
                        <li>
                            <a href="contact.php">contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->


    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/bane1.jpg);">
        <div class="container">
        <?php
                $stmt2 = $db->prepare('SELECT catTitle, catSlug	FROM blog_cats, blog_post_cats WHERE blog_cats.catID = blog_post_cats.catID AND blog_post_cats.postID = :postID');
                $stmt2->execute(array(':postID' => $row['postID']));

                $catRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);
                $links = array();
                foreach ($catRow as $cat)
                {
                    $links[] = "<a class='event-target' href='c-".$cat['catSlug']."'>".$cat['catTitle']."</a>";
                }
                ?>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1><?php echo $row['postTitle'];?></h1>
                    <ul class="breadcrumb">
                        <li><a><i class="fas fa-home"></i> Blog</a></li>                        
                        <li class="active"><?php echo $row['postTitle'];?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-8">
                    <?php
                $stmt2 = $db->prepare('SELECT catTitle, catSlug	FROM blog_cats, blog_post_cats WHERE blog_cats.catID = blog_post_cats.catID AND blog_post_cats.postID = :postID');
                $stmt2->execute(array(':postID' => $row['postID']));

                $catRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);
                $links = array();
                foreach ($catRow as $cat)
                {
                    $links[] = "<a class='event-target' href='c-".$cat['catSlug']."'>".$cat['catTitle']."</a>";
                }
                ?>
                        <div class="single-item item">

                            <!-- Start Post Thumb -->
                            <div class="thumb">
                                <a>
                                    <img src="admin/<?php echo $row['postImage'] ;?>" alt="Thumb">
                                    <div class="post-type">
                                        <i class="ti-image"></i>
                                    </div>
                                </a>
                            </div>
                            <!-- Start Post Thumb -->

                            <div class="info">
                                <div class="meta tags">
                                    <ul>
                                        <li>
                                        <?php echo implode(" , " , $links);?>
                                        </li>                                       
                                    </ul>
                                    <div class="date">
                                        <i class="ti-calendar"></i> <?php echo date('jS M Y',strtotime($row['postDate']));?>
                                    </div>
                                </div>
                                <h3>
                                <?php echo $row['postTitle'];?>
                                </h3>
                                <p>
                                <?php echo $row['postCont'];?>
                                </p>                                                                

                                <!-- Start Post Tag s-->
                                <!-- <div class="post-tags share">
                                    <div class="tags">
                                        <span>Tags: </span>
                                        <a href="#">Consulting</a>
                                        <a href="#">Planing</a>
                                        <a href="#">Business</a>
                                        <a href="#">Fashion</a>
                                    </div>
                                </div> -->
                                <!-- End Post Tags -->
                            </div>
                        </div>
                    </div>

                    <!-- Start Sidebar -->
                  <?php include_once "sidebar.php"; ?>						
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Star Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="row">

                <div class="f-items default-padding">
                    <div class="equal-height col-md-5 col-sm-6 item">
                        <div class="f-item about">
                            <h4 class="widget-title">About</h4>
                            <p>
                                TEC is a literary and social organisation that seeks <br/> to improve reading culture and encourage creativity,<br/>  especially amongst the youth. 
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
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                            <!-- <div class="newsletter">
                                <h5>Send us a newsletter to get update</h5>
                                <form action="#">
                                    <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
                                    <button type="submit"><i class="fa fa-paper-plane"></i></button>  
                                </form>
                            </div> -->
                        </div>
                    </div>

                    <div class="equal-height col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Links</h4>
                            <ul>
                                <li>
                                    <a href="index.php"><i class="ti-angle-right"></i> Home</a>
                                </li>
                                <li>
                                    <a href="about.php"><i class="ti-angle-right"></i> About</a>
                                </li>
                                <li>
                                    <a href="gallery.php"><i class="ti-angle-right"></i>Gallery</a>
                                </li>
                                <li>
                                    <a href="team.php"><i class="ti-angle-right"></i> Team</a>
                                </li>                             
                            </ul>
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
                        <p>&copy; Copyright 2022. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-7 text-right link">
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