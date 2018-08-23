<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>User  | Dashboard</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/vendor/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/vendor/themify-icons/themify-icons.min.css">
        <link href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
        <link href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
        <link href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
        <link href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
        <link href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/vendor/select2/select2.min.css" rel="stylesheet" media="screen">
        <link href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
        <link href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/assets/css/styles.css">
        <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/assets/css/plugins.css">
        <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/assets/css/themes/theme-1.css"  />


    </head>
    <body>
        <div id="app">
            <div class="sidebar app-aside" id="sidebar">
				<div class="sidebar-container perfect-scrollbar">

<nav>
						
						<!-- start: MAIN NAVIGATION MENU -->
						<div class="navbar-title">
							<span>Main Navigation</span>
						</div>
						<ul class="main-navigation-menu">
							<li>
								<a href="dashboard.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-home"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Dashboard </span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Pharmacist </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">
									<!--<li>
										<a href="doctor-specilization.php">
											<span class="title"> Doctor Specialization </span>
										</a>
									</li>-->
									<li>
										<a href="add-doctor.php">
											<span class="title"> Add Pharmacist</span>
										</a>
									</li>
									<li>
										<a href="manage-farmacist.php">
											<span class="title"> Manage Pharmacist </span>
										</a>
									</li>
									
								</ul>
								</li>

				               <li>
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Drugs </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">
									
									<li>
										<a href="manage-drugs.php">
											<span class="title"> Manage Drugs </span>
										</a>
									</li>
									<li>
									  <a href="add-drugs.php">
									      <span class="title">Add Drugs </span></a>
									</li>
									
								</ul>
								</li>	
								<li>
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Report </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">
									
									<li>
										<a href="manage-users.php">
											<span class="title"> Daily Report </span>
										</a>
									</li>
									<li>
									  <a href="#">
									      <span class="title">Weekly Report </span></a>
									</li>
									<li>
									    <a href="#">
										  <span class="title">Monthly Report</span>
										</a>
									</li>
									
								</ul>
								</li>	
                              <li>
								<a href="appointment-history.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-file"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Appointment History </span>
										</div>
									</div>
								</a>
							</li>

	<li>
								<a href="doctor-logs.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-list"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Doctor Session Logs </span>
										</div>
									</div>
								</a>
							</li>		



							<li>
								<a href="user-logs.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-list"></i>
										</div>
										<div class="item-inner">
											<span class="title"> User Session Logs </span>
										</div>
									</div>
								</a>
							</li>						
				

						</ul>
						<!-- end: CORE FEATURES -->
						
					</nav>
					</div>
			</div>
            <div class="app-content">

                <?php error_reporting(0); ?>
                <header class="navbar navbar-default navbar-static-top">
                    <!-- start: NAVBAR HEADER -->
                    <div class="navbar-header">
                        <a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
                            <i class="ti-align-justify"></i>
                        </a>
                        <a class="navbar-brand" href="#">
                            <h2 style="padding-top:2% ">PIMS</h2>
                        </a>
                        <a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
                            <i class="ti-align-justify"></i>
                        </a>
                        <a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="ti-view-grid"></i>
                        </a>
                    </div>
                    <!-- end: NAVBAR HEADER -->
                    <!-- start: NAVBAR COLLAPSE -->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-right">
                            <!-- start: MESSAGES DROPDOWN -->
                            <li  style="padding-top:2% ">
                                <h2>Pharmacy Inventory Management System</h2>
                            </li>


                            <li class="dropdown current-user">
                                <a href class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="assets/images/avatar-1.jpg" alt="<?php echo $_SESSION['admin_name'];
                                        ?>"> <span class="username">
                                         <i class="ti-angle-down"></i></i></span>
                                </a>
                                <ul class="dropdown-menu dropdown-dark">
                                    <li>
                                        <a href="edit-profile.php">
                                            My Profile
                                        </a>
                                    </li>

                                    <li>
                                        <a href="change-password.php">
                                            Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="logout.php">
                                            Log Out
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- end: USER OPTIONS DROPDOWN -->
                        </ul>
                        <!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
                        <div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
                            <div class="arrow-left"></div>
                            <div class="arrow-right"></div>
                        </div>
                        <!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
                    </div>


                    <!-- end: NAVBAR COLLAPSE -->
                </header>
               