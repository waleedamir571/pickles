<?php include 'includes/function.php' ?>
<?php include '../pf_landing/func_data.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php echo $title_name; ?>
    </title>
    
    <meta http-equiv='content-language' content='en-us'>
    <meta http-equiv='content-language' content='en-ca'>
    <meta http-equiv='content-language' content='en-gb'>
  
   
  
    <meta name="google-site-verification" content="Lg096ScU8tBe3B-UXcmKLZpAHCYzb4nDdO7V24XDeyA" />
    <meta name="ahrefs-site-verification" content="3a4227905939061ffe57767c6d1029357f9ed646b19d2649f6428cdb2cd366fe">
    
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/home/favicon.png">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="assets/css/rsmenu-main.css">
    <!-- off canvas css -->
    <link rel="stylesheet" href="assets/css/off-canvas.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- fancybox css -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- swiper bundle css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- aos css -->
    <link rel='stylesheet' href='assets/css/aos.css'>
    <!-- Video Slider  -->
    <link rel='stylesheet' href='assets/css/video-slider.css'>
    <!-- GLIGHT BOX  -->
    <link rel='stylesheet' href='assets/vendors/css/glightbox.min.css'>

    <!-- Google tag (gtag.js) UK 11Sep2023-->
 


    <!-- End Hotjar Tracking Code for https://hoisolutions.com/ -->
    
    <style type="text/css">
        @media only screen and (min-width: 991px) {
            .full-width-header .rs-header .menu-area .main-menu .rs-menu ul.sub-menu li a {
                padding-right: 15px;
            }
        }
    </style>
    <!-- START Mega MeNU-->
    <!--Main Menu File-->
    <script type="text/javascript" src="webslidemenu/jquery/jquery-3.2.1.min.js"></script>
    <link id="effect" rel="stylesheet" type="text/css" media="all" href="webslidemenu/dropdown-effects/fade-down.css" />
    <link rel="stylesheet" type="text/css" media="all" href="webslidemenu/webslidemenu.css" />
    <!-- Include Below JS After Your jQuery.min File -->
    <script type="text/javascript" src="webslidemenu/webslidemenu.js"></script>
    <!--Main Menu File-->
    <!-- END Mega MeNU-->
    <!-- start popup 15 sec and floating window-->
    <link rel="stylesheet" href="assets/css/popupformnew.css">
</head>

<body>
    <!-- <div id="loader" class="loader">
        <div class="loader-container"></div>
    </div> -->
    <!--Full width header Start-->
    <div class="full-width-header">
        <!--Header Start-->
        <header id="rs-header" class="rs-header style3 header-transparent">
            <!-- mega menu start -->
            <div class="menu-area" id="navbar_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="logo-part">
                                <a href="index.php">
                                    <img class="normal-logo" src="assets/images/logo.png" alt="Dev PicklesSolutios Logo"
                                        title="Dev PicklesSolution Logo">
                                    <!-- <img class="sticky-logo" src="assets/images/logo.png" alt="Dev PicklesSolution Logo"
                                        title="Dev PicklesSolution Logo"> -->
                                </a>
                            </div>
                            <!-- Mobile Header -->
                            <div class="wsmobileheader clearfix">
                                <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
                                <span class="smllogo"><img src="assets/images/logo.png" width="80"
                                        alt="Dev PicklesSolution Logo" title="Dev PicklesSolution Logo" /></span>
                            </div>
                            <!-- Mobile Header -->
                        </div>
                        <div class="col-lg-4 offset-lg-1 pl-21 sm-pl-10">
                            <div class="headerfull">
                                <div class="wsmain clearfix">
                                    <!-- <div class="smllogo">
                                        <a href="https://hoisolutions.com/"><img src="images/sml-logo.png" alt="Dev PicklesSolution Logo" title="Dev PicklesSolution Logo"  /></a>
                                    </div> -->
                                    <nav class="wsmenu clearfix">
                                        <ul class="wsmenu-list">
                                            <li aria-haspopup="true"><a href="./index"
                                                    class="navtext"> Home</a> </li>
                                            <li aria-haspopup="true"><a href="./about-us"
                                                    class="navtext"> About Us</a> </li>
                                          
                                            <li aria-haspopup="true"><a href="./portfolio"
                                                    class="navtext"> Portfolio</a> </li>
                                           
                                          
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- mega menu end -->
                        </div>
                        <div class="col-lg-1 icons text-right hidden-sm hidden-tb">
                            <a href="https://www.facebook.com//"><i class="fa fa-facebook active"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                        </div>
                        <div class="col-lg-2 call hidden-sm hidden-tb">
                            <a href="tel:<?php echo $phone_number ?>" onclick="gtag_report_conversion();"
                                class="number pl-30">
                                <?php echo $phone_number ?>
                            </a>
                        </div>
                        <div class="col-lg-2 hidden-sm hidden-tb">
                            <a href="contact-us"><button class="btn bg-button rounded-pill button">Contact
                                    Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    </div>
    <!--Full width header End-->