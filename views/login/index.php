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
        <title>Admin-Login</title>
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
        <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/assets/css/styles.css">
        <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/assets/css/plugins.css">
        <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/assets/css/themes/theme-1.css" />
    </head>
    <body class="login">
        <div class="row">
            <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="logo margin-top-30">
                    <h2>Admin Login</h2>
                </div>

                <div class="box-login">
                    <form class="form-login" method="post" action="<?php $_SERVER['DOCUMENT_ROOT']; ?>/MyPharmacy/login/run" role="form">
                        <fieldset>
                            <legend>
                                Sign in to your account
                            </legend>
<!--							<p>
                                    Please enter your name and password to log in.<br />
                                    <span style="color:red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg'] = ""); ?></span>
                            </p>-->
                            <div class="form-group">
                                <span class="input-icon">
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                    <i class="fa fa-user"></i> </span>
                            </div>
                            <div class="form-group form-actions">
                                <span class="input-icon">
                                    <input type="password" class="form-control password" name="password" placeholder="Password"><i class="fa fa-lock"></i>
                                </span>
                            </div>
                            <div class="form-actions">

                                <button type="submit" class="btn btn-primary pull-right" name="submit">
                                    Login <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>

                        </fieldset>
                    </form>

                    <div class="copyright">
                        &copy; <span class="current-year"></span><span class="text-bold text-uppercase"> HMS</span>. <span>All rights reserved</span>
                    </div>

                </div>

            </div>
        </div>
        <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/vendor/jquery/jquery.min.js"></script>
        <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/vendor/modernizr/modernizr.js"></script>
        <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/vendor/jquery-cookie/jquery.cookie.js"></script>
        <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/vendor/switchery/switchery.min.js"></script>
        <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/vendor/jquery-validation/jquery.validate.min.js"></script>

        <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/assets/js/main.js"></script>

        <script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/MyPharmacy/public/assets/js/login.js"></script>
        <script>
            jQuery(document).ready(function () {
                Main.init();
                Login.init();
            });
        </script>

    </body>
    <!-- end: BODY -->
</html>
