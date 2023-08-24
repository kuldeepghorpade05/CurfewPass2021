<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Curfew e-Pass Portal - Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!--================ Header Menu Area start =================-->
 <?php include_once('includes/header.php');?>
  <!--================Header Menu Area =================-->


  <!--================ Banner Section start =================-->
  <section class="about-banner text-center">
    <div class="container">
      <h1 style="text-align:left;">About Us</h1>
 
    </div>
  </section>
  <!--================ Banner Section end =================-->


  <!--================ Domain Search section start =================-->
  <section class="bg-gray domain-search">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-12 col-lg-12 text-center  mb-3 mb-md-0">
          <h1>About Our Portal</h1>
        </div>
		<div class="row">
		<div class="col-md-12 col-lg-12 text-center  mb-3 mb-md-0">
		<h4>Curfew Pass Management system is a web-based technology that will manage the records of pass which issue by administrative. Curfew Pass Management System is an automatic system that delivers data processing at a very high speed in a systematic manner. <br/> 
		This is an online curfew e-Pass management software which is very helpful at the time curfew or emergency time issued by the state.</h4>
		</div>
		</div>
        
      </div>
    </div>
  </section>
  <!--================ Domain Search section end =================-->
   
   




  <!-- ================ start footer Area ================= -->
  <div style="padding:50px" class="container-fluid bg-white">
  <div class="footer-bottom row align-items-center text-center text-lg-left">
                <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="ti-heart" aria-hidden="true"></i> by <a href="http://rcsinfo.in/" target="_blank">Interns Team</a>
</p>
            </div></div>
  <!-- ================ End footer Area ================= -->




  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>