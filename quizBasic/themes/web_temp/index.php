<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

?>

<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
   <title>Ceevee Web Design</title>
   <meta name="description" content="">
   <meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
   <link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">

   <!-- Script
   ================================================== -->
   <script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
   <link rel="shortcut icon" href="favicon.png">

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
         <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">HOME</a></li>
            <li><a class="smoothscroll" data-toggle="modal" data-target="#modalForm">Guru</a></li>
            <li><a class="smoothscroll" href="#portfolio">Murid</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">I'm Giri Designs.</h1>
            <h3>I'm a <span>graphic designer</span>, <span>illustrator</span> and <span>webdesigner</span> creating awesome and
               effective visual identities for companies of all sizes around the globe. Let's <a class="smoothscroll" href="#about">start scrolling</a>
               and learn more <a class="smoothscroll" href="#about">about me</a>.</h3>
            <hr />

            <!-- Button to trigger modal -->
            <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
               GURU
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modalForm" role="dialog">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <!-- Modal Header -->
                     <!-- <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                           <span aria-hidden="true">&times;</span>
                           <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Login Guru</h4>
                     </div> -->

                     <!-- Modal Body -->
                     <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal">
                           <span aria-hidden="true">&times;</span>
                           <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Login Guru</h4>
                        <hr>
                        <p class="statusMsg"></p>
                        <form role="form">
                           <div class="form-group">
                              <label for="inputName">Nama</label>
                              <input type="text" class="form-control" id="inputName" placeholder="Enter your name" />
                           </div>
                        </form>
                        <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">Next</button>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic" src="images/profilepic.jpg" alt="" />

         </div>

         <div class="nine columns main-col">

            <h2>About Me</h2>

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
               eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
               voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
               voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
               sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
               Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.
            </p>

            <div class="row">

               <div class="columns contact-details">

                  <h2>Contact Details</h2>
                  <p class="address">
                     <span>Giri Designs</span><br>
                     <span>50, Thiruvoodal Street,<br>
                        Thiruvannamalai - 606 601, TN.
                     </span><br>
                     <span>+91 94884 87853</span><br>
                     <span>giridesigns5@gmail.com</span>
                  </p>

               </div>

               <div class="columns download">
                  <p>
                     <a href="#" class="button"><i class="fa fa-download"></i>Download Resume</a>
                  </p>
               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->

   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="social-links">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>

            <ul class="copyright">
               <li>Ceevee &copy; Copyright 2016</li>
               <li>Design by <a href="http://srikrishnacommunication.com/Giridesigns.html" title="Styleshout" target="_blank">Giri Designs</a></li>
            </ul>

         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <!-- Latest minified bootstrap css -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

   <!-- Latest minified bootstrap js -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>
      window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')
   </script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>

</body>

</html>