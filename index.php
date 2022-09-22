<?php
session_start();
?>
<!DOCTYPE php>
<php lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>My Sports World</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                        <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Hurry up
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                    <div class="right-phone-box">
                        <p>Call Us :- <a href="#"> +91 1234567890</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            &nbsp;
                            <li><a href="login.php">My Account</a></li>
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
               
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo1.png" class="logo" alt=""></a>
                    <?php
                if(isset($_SESSION['xyz'])){
                    echo $_SESSION['xyz'];
                }
                ?>
                </div>
                <!-- End Header Navigation -->
                
                <!-- Collect the nav links, forms, and other content for toggling -->
               
                <div class="collapse navbar-collapse" id="navbar-menu">
               
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                   
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                         <li class="nav-item"><a class="nav-link" href="cricket.php">Cricket</a></li>
                         <li class="nav-item"><a class="nav-link" href="football.php">FootBall</a></li>
                         <li class="nav-item"><a class="nav-link" href="tennis.php">Tennis</a></li>
                         <li class="nav-item"><a class="nav-link" href="Hockey.php">Hockey</a></li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Product</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Cricket</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="cricket.php">Shoes</a></li>
                                                    <li><a href="cricket.php">Bat</a></li>
                                                    <li><a href="cricket.php">Gloves</a></li>
                                                    <li><a href="cricket.php">Balls</a></li>
                                                    <li><a href="cricket.php">Stumps</a></li>
                                                    <li><a href="cricket.php">Pads</a></li>
                                                    <li><a href="cricket.php">Helmets</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">FootBall</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="football.php">Encounter Shoes</a></li>
                                                    <li><a href="football.php">Soccer Balls</a></li>
                                                    <li><a href="football.php">T-Shirts</a></li>
                                                    <li><a href="football.php">Trousers</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Tennis</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="tennis.php">Racket</a></li>
                                                    <li><a href="tennis.php">Ball</a></li>
                                                    <li><a href="tennis.php">Net</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Hockey</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="Hockey.php">Hockey Stick</a></li>
                                                    <li><a href="Hockey.php">Jersey</a></li>
                                                    <li><a href="Hockey.php">Gloves</a></li>
                                                    <li><a href="Hockey.php">Elbow Pad</a></li>
                                                    <li><a href="Hockey.php">Helmet</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        
                        
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <?php 
                    $count=0;
                    if(isset($_SESSION['cart']))
                    {
                        $count=count($_SESSION['cart']);
                    }
                ?>
                <a href="mycart.php" class="btn btn-outline-info">My Cart (<?php echo $count;?>) </a>

                <!-- Start Atribute Navigation -->
                
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
           
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Sports World</strong></h1>
                            <p class="m-b-40">"I KNOW WHAT I CAN DO,SO I NEVER DOUBT MYSELF"-USAIN BOLT </p>
                            <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Sports World</strong></h1>
                            <p class="m-b-40">"Self-belief and hard work will always earn you success." -Virat Kohli</p>
                            <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Sports World</strong></h1>
                            <p class="m-b-40">"I have never tried to compare myself to anyone else" - Sachin Tendulkar</p>
                            <p><a class="btn hvr-hover" href="#">Shop now</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/cricket kit.jpg" alt="" />
                        <a class="btn hvr-hover" href="cricket.php">Cricket</a>
                    </div>
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/hockey kit.jpg" alt="" />
                        <a class="btn hvr-hover" href="Hockey.php">Hockey</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/football kit.jpg" alt="" />
                        <a class="btn hvr-hover" href="football.php">FootBall</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/tennis kit.jpg" alt="" />
                        <a class="btn hvr-hover" href="tennis.php">Tennis</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->

    

    


    


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Us</h4>
                            <p>We Provide Quality Product With Reasonable Price.<br>
                              Here Users Can See Sports Equipments In Very Category-Vise
                              Please Visit!</p>
                        </div>
                    </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer's Choice Products</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: 7 , P.N ROAD, BHANDUP (WEST)  <br><br>MUMBAI-400078  </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+022 22445678">+91-888 605 8805</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:Admin@gmail.com">Admin@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inowsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</php>