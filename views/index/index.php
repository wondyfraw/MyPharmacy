<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Pharmacy Inventory Management System</title>
		<link href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/css/responsiveslides.css">
		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
		<script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/js/jquery.min.js"> </script>
		<script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/" style="font-size: 30px;">Pharmacy Inventory Management system</a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li class="active"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/">Home</a></li>
						
						<li><a href="contact.php">contact</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		<div class="clear"> </div>
			<!--start-image-slider---->
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <!--<li><img src="images/slider-image1.jpg" alt=""></li>
					      <li><img src="images/slider-image2.jpg" alt=""></li>
					      <li><img src="images/slider-image1.jpg" alt=""></li>-->
						  <li><img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/images/Pamper-Banner-Desktop-v2-R2.jpg" alt=""></li>
						  <li><img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/images/VPC_FARMACY_Banners_GreenClean-9-27.jpg" alt=""></li>
						  <li><img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/images/01.07_HoneyButterLaunch_Desktop_FINAL.jpg" alt=""></li>
						  <li><img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/images/newsrelease_130711_pharmaceuticals.jpg" alt=""></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
		    <div class="clear"> </div>
		    <div class="content-grids">
		    	<div class="wrap">
		    	<div class="section group">
								
							
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/images/grid-img3.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Farmacist Login</h3>
						  
						  <div class="button"><span><a href="hms/user-login.php">Click Here</a></span></div>
				    </div>
				</div>	


					<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/images/grid-img2.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Admin Login</h3>
						
						  <div class="button"><span><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/login/">Click Here</a></span></div>
				     </div>
				</div>			
			</div>
		    </div>
		   </div>
		   <div class="wrap">
		   <div class="content-box">
		   <div class="section group">
				<div class="col_1_of_3 span_1_of_3 frist">
				
				</div>
				<div class="col_1_of_3 span_1_of_3 second">
					
				</div>
				<div class="col_1_of_3 span_1_of_3 frist">
					
					
				</div>
			</div>
		   </div>
		   </div>
		   <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/">Home</a></li>
						<li><a href="contact.php">contact</a></li>
					</ul>
		   	</div>
		   
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>



