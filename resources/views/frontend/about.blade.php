<!DOCTYPE html>
 <html lang="en">

 <head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

     <meta charset="utf-8" />
     <title>Rimak | About </title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />

     <!-- Favicon -->
     <link rel="shortcut icon" href="img/favicon.png" />

     <!-- Template CSS Files -->
     <link rel="stylesheet" href="css/font-awesome.min.css" />
     <link rel="stylesheet" href="css/bootstrap.min.css" />
     <link rel="stylesheet" href="css/magnific-popup.css" />
     <link rel="stylesheet" href="css/select2.min.css" />
     <link rel="stylesheet" href="css/style.css" />
   <link rel="stylesheet" href="css/skins/orange.css" />
  
   <!-- Live Style Switcher - demo only -->
     <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
     <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
     <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
     <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />

     <!-- Template JS Files -->
     <script src="js/modernizr.js"></script>

 </head>

 <body>
    
     <div class="wrapper">
         <!-- Header Starts -->
         <header class="header">
             <div class="container">
                 <div class="row">
                     <!-- Logo Starts -->
                     <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                         <a href="{{URL::to('/')}}">
               <!-- <img id="logo" class="img-responsive" src="img/logo-dark.png" alt="logo" /> -->
                             <span style="font-size: 170%"><b>RIMAK</b></span>
             </a>
                     </div>
                     <!-- Logo Ends -->
                     <!-- Statistics Starts -->
                     <div class="col-md-7 col-lg-7">
                         <ul class="unstyled bitcoin-stats text-center">
                             <li>
                                 <h6>9,450 USD </h6><span>Last Share price </span></li>
                             <li>
                                 <h6>+5.26% </h6><span>24 hour price </span></li>
                             <li>
                                 <h6>12</h6><span>Total Share </span></li>
                             <li>
                                 <h6>2,231,775 </h6><span>active User </span></li>
                            <!--  <li>
                                 <div class="btcwdgt-price" data-bw-theme="light" data-bw-cur="usd"></div>
                                 <span>Live Bitcoin price </span>
               </li> -->
                         </ul>
                     </div>
                     <!-- Statistics Ends -->
                     <!-- User Sign In/Sign Up Starts -->
                     <div class="col-md-3 col-lg-3">
                         <ul class="unstyled user">
                         <li class="sign-in"><a href="{{URL::to('/signin')}}" class="btn btn-primary"><i class="fa fa-user"></i> sign in </a></li>
                             <li class="sign-up"><a href="{{URL::to('/signup')}}" class="btn btn-primary"><i class="fa fa-user-plus"></i> register </a></li>
                         </ul>
                     </div>
                     <!-- User Sign In/Sign Up Ends -->
                 </div>
             </div>
             <!-- Navigation Menu Starts -->
             <nav class="site-navigation navigation" id="site-navigation">
                 <div class="container">
                     <div class="site-nav-inner">
                         <!-- Logo For ONLY Mobile display Starts -->
                         <a class="logo-mobile" href="index.html">
               <img id="logo-mobile" class="img-responsive" src="img/logo-dark.png" alt="" />
             </a>
                         <!-- Logo For ONLY Mobile display Ends -->
                         <!-- Toggle Icon for Mobile Starts -->
                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation </span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
                         <!-- Toggle Icon for Mobile Ends -->
                         <div class="collapse navbar-collapse navbar-responsive-collapse">
                             <!-- Main Menu Starts -->
                             <ul class="nav navbar-nav">
                                 <li class="active"><a href="{{URL::to('/')}}">Home </a></li>
                                 <li><a href="{{URL::to('/about')}}">About Us </a></li>
                               
                                <!--  <li class="dropdown">
                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">pages  <i class="fa fa-angle-down"></i></a>
                                     <ul class="dropdown-menu" role="menu">
                                         <li><a href="register.html">Register page </a></li>
                                         <li><a href="login.html">Login page </a></li>
                     <li><a href="shopping-cart.html">Shopping cart </a></li>
                                         <li><a href="shopping-checkout.html">shopping checkout </a></li>
                                         <li><a href="faq.html">FAQ page </a></li>
                                         <li><a href="404.html">404 Page </a></li>
                     <li><a href="503.html">Server Error Page </a></li>
                                         <li><a href="terms-of-services.html">Terms of Services </a></li>
                     <li><a href="coming-soon.html">Coming Soon </a></li>
                                     </ul>
                                 </li> -->
                                 <li><a href="{{URL::to('/contact')}}">Contact </a></li>
                
                                 <li class="search"><button class="fa fa-search"></button></li>
                                 <!-- Search Icon Ends -->
                             </ul>
                             <!-- Main Menu Ends -->
                         </div>
                     </div>
                 </div>
                 <!-- Search Input Starts -->
                 <div class="site-search">
                     <div class="container">
                         <input type="text" placeholder="type your keyword and hit enter ..." />
                         <span class="close">× </span>
                     </div>
                 </div>
                 <!-- Search Input Ends -->
             </nav>
             <!-- Navigation Menu Ends -->
         </header>

        <section class="banner-area" style="background-image: url(img/backgrounds/bg-banner.jpg);">
             <div class="banner-overlay">
                 <div class="banner-text text-center">
                     <div class="container">
                         <!-- Section Title Starts -->
                         <div class="row text-center">
                             <div class="col-xs-12">
                                 <!-- Title Starts -->
                                 <h2 class="title-head">About  <span>Us </span></h2>
                                 <!-- Title Ends -->
                                 <hr>
                                 <!-- Breadcrumb Starts -->
                                 <ul class="breadcrumb">
                                     <li><a href="{{URL::to('/')}}"> home </a></li>
                                     <li>About </li>
                                 </ul>
                                 <!-- Breadcrumb Ends -->
                             </div>
                         </div>
                         <!-- Section Title Ends -->
                     </div>
                 </div>
             </div>
         </section>

            <div class="container">
                 <!-- Section Title Starts -->
                 <div class="row text-center">
                     <h2 class="title-head">About  <span>Us </span></h2>
                     <div class="title-head-subtitle">
                         <p>a commercial website that _____ wallets, exchanges and other _______ related info </p>
                     </div>
                 </div>
                 <!-- Section Title Ends -->
                 <!-- Section Content Starts -->
                 <div class="row about-content">
                     <!-- Image Starts -->
                     <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                         <img id="about-us" class="img-responsive img-about-us" src="img/about-us.png" alt="about us" />
                     </div>
                     <!-- Image Ends -->
                     <!-- Content Starts -->
                     <div class="col-sm-12 col-md-7 col-lg-6">
                         <h3 class="title-about">WE ARE Rimak </h3>
                         <p class="about-text">A place for everyone ___ wants to simply buy ___ sell Share. Deposit funds _____  Instant buy/sell of Share __ fair price is guaranteed. _______ extra. Join over 700,000 _____ from all over the _____ satisfied with our services. </p>
                        
                         <br><br>
                         <a class="btn btn-primary" href="about.html">Read More </a>
                     </div>
                     <!-- Content Ends -->
                 </div>
                 <!-- Section Content Ends -->
             </div>
            <section class="call-action-all" style="background: url(img/backgrounds/call-to-action-bg.jpg);">
       <div class="call-action-all-overlay">
         <div class="container">
           <div class="row">
             <div class="col-xs-12">
               <!-- Call To Action Text Starts -->
               <div class="action-text">
                 <h2>Get Started Today With _______ </h2>
                 <p class="lead">Open account for free ___ start trading Rimak! </p>
               </div>
               <!-- Call To Action Text Ends -->
               <!-- Call To Action Button Starts -->
               <p class="action-btn"><a class="btn btn-primary" href="{{URL::to('/signup')}}">Register Now </a></p>
               <!-- Call To Action Button Ends -->
             </div>
           </div>
         </div>
       </div>
         </section>
         <!-- Call To Action Section Ends -->
         <!-- Footer Starts -->
         <section class="contact">
             <div class="container">
                 <div class="row">
                     <div class="col-xs-12 col-md-8 contact-form">
                         <h3 class="col-xs-12">feel free to drop __ a message </h3>
                         <p class="col-xs-12">Need to speak to __? Do you have any _______ or suggestions? Please contact __ about all enquiries including __________ and volunteer work using ___ form below. </p>
                         <!-- Contact Form Starts -->
                         <form class="form-contact" method="post" action="php/process-form.php">
                             <!-- Input Field Starts -->
                             <div class="form-group col-md-6">
                                 <input class="form-control" name="firstname" id="firstname" placeholder="FIRST NAME" type="text" required="">
                             </div>
                             <!-- Input Field Ends -->
                             <!-- Input Field Starts -->
                             <div class="form-group col-md-6">
                                 <input class="form-control" name="lastname" id="lastname" placeholder="LAST NAME" type="text" required="">
                             </div>
                             <!-- Input Field Ends -->
                             <!-- Input Field Starts -->
                             <div class="form-group col-md-6">
                                 <input class="form-control" name="email" id="email" placeholder="EMAIL" type="email" required="">
                             </div>
                             <!-- Input Field Ends -->
                             <!-- Input Field Starts -->
                             <div class="form-group col-md-6">
                                 <input class="form-control" name="text" id="subject" placeholder="SUBJECT" type="text" required="">
                             </div>
                             <!-- Input Field Ends -->
                             <!-- Input Field Starts -->
                             <div class="form-group col-xs-12">
                                 <textarea class="form-control" id="message" name="message" placeholder="MESSAGE" required=""></textarea>
                             </div>
                             <!-- Input Field Ends -->
                             <!-- Submit Form Button Starts -->
                             <div class="form-group col-xs-12 col-sm-4">
                                 <button class="btn btn-primary btn-contact" type="submit">send message </button>
                             </div>
                             <!-- Submit Form Button Ends -->
                             <!-- Form Submit Message Starts -->
                             <div class="col-xs-12 text-center output_message_holder d-none">
                                 <p class="output_message">
                             </p></div>
                              <!-- Form Submit Message Ends -->
                         </form>
                         <!-- Contact Form Ends -->
                     </div>
                     <!-- Contact Widget Starts -->
                     <div class="col-xs-12 col-md-4">
                         <div class="widget">
                             <div class="contact-page-info">
                                 <!-- Contact Info Box Starts -->
                                 <div class="contact-info-box">
                                     <i class="fa fa-home big-icon"></i>
                                     <div class="contact-info-box-content">
                                         <h4>Address </h4>
                                         <p>123 dhaka, bangladesh </p>
                                     </div>
                                 </div>
                                 <!-- Contact Info Box Ends -->
                                 <!-- Contact Info Box Starts -->
                                 <div class="contact-info-box">
                                     <i class="fa fa-phone big-icon"></i>
                                     <div class="contact-info-box-content">
                                         <h4>Phone Numbers </h4>
                                         <p>+880189000000<br>+880189000000 </p>
                                     </div>
                                 </div>
                                 <!-- Contact Info Box Ends -->
                                 <!-- Contact Info Box Starts -->
                                 <div class="contact-info-box">
                                     <i class="fa fa-envelope big-icon"></i>
                                     <div class="contact-info-box-content">
                                         <h4>Email Addresses </h4>

                                         <p>Rimak@Rimak.com <br>info@Rimak.com </p>
                                     </div>
                                 </div>
                                 <!-- Contact Info Box Ends -->
                                 <!-- Social Media Icons Starts -->
                                 <div class="contact-info-box">
                                     <i class="fa fa-share-alt big-icon"></i>
                                     <div class="contact-info-box-content">
                                         <h4>Social Profiles </h4>
                                         <div class="social-contact">
                                             <ul>
                                                 <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                 <li class="twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                 <li class="google-plus"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- Social Media Icons Starts -->
                             </div>
                         </div>
                     </div>
                     <!-- Contact Widget Ends -->
                 </div>
             </div>
         </section>
         <hr>
         <div class="bottom-footer">
                 <div class="container">
                     <div class="row">
                         <div class="col-xs-12">
                             <!-- Copyright Text Starts -->
                             <p class="text-center">Copyright © 2019 Rights Reserved </p>
                             <!-- Copyright Text Ends -->
                         </div>
                     </div>
                 </div>
             </div>
         <!-- Footer Ends -->
     <!-- Back To Top Starts  -->
         <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
     <!-- Back To Top Ends  -->
    
         <!-- Template JS Files -->
         <script src="js/jquery-2.2.4.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
         <script src="js/select2.min.js"></script>
         <script src="js/jquery.magnific-popup.min.js"></script>
         <script src="js/custom.js"></script>
    
     <!-- Live Style Switcher JS File - only demo -->
     <script src="js/styleswitcher.js"></script>

     </div>
     <!-- Wrapper Ends -->
 </body>

 </html>