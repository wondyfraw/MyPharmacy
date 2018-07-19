<?php 
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login 2 | Big Ben Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Wondyfraw Hailu">
    <meta name="description" content="SNNPRS OCAIMS">

    <!--[if IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo URL; ?>public/js/lib/modernizr.js"></script>
    <link rel="icon" href="<?php echo URL; ?>public/img/favicon.png" type="image/gif">
    
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/animate-it/animate.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/css/style-default.css">
</head>

<body class="login2">
    
    <!-- Login Div Start Here -->
    <div class="login animated flipInY" id="logindiv">   
        <div class="text-center logo">
            <img src="<?php echo URL; ?>public/img/logo-c.svg" alt="logo">
        </div>

        <form role="form" class="loginForm" action="login/run" method="post">

            <div class="form-group">
                <div class="input-icon">
                    <input type="email" class="form-control" name="useradmin" id="useradmin" placeholder="email@example.com">
                </div>
            </div>

            <div class="form-group">
                <div class="input-icon">
                    <input type="password" class="form-control" name="adminpass" id="adminpass" placeholder="Password">
                </div>
            </div>                        

            <div class="clearfix">

                <div class="checkbox pull-left">
                    <div class="mk-trc" data-style="check">
                        <input id="chkRemember" type="checkbox">
                        <label for="chkRemember"> Remember Me</label>
                    </div>
                </div>

                <a href="javascript:void(0);" class="pull-right lnkForgot">Forgot Password?</a>
            </div>                        

            <div class="clearfix">
                <button type="submit" class="btn btn-primary pull-right" name="submit" id="submit">LOGIN</button>
            </div>
            
            <div class="clearfix mt-md">
                If you don't have an account <a href="javascript:;" class="lnkRegister">Register</a> here
            </div>
        </form>

    </div>  
    <!-- Login Div Ends Here -->
    
    <!-- Forgot Div Start Here -->
    <div class="login animated flipInY" id="forgotDiv">  
        <div class="text-center logo">
            <img src="<?php echo URL; ?>public/img/logo-c.svg" alt="logo">
        </div>

        <form role="form" class="ForgotForm">

            <div class="clearfix">
                <p>Enter your e-mail address below to reset your password.</p>
            </div>

            <div class="form-group">
                <div class="input-icon">
                    <input type="email" class="form-control" name="forgot_email" placeholder="email@example.com">
                </div>
            </div>                        

            <div class="clearfix">
                <button type="button" class="btn btn-danger pull-left lnkLogin">BACK</button>
                <button type="submit" class="btn btn-primary pull-right">SUBMIT</button>
            </div>     

        </form>


    </div>  
    <!-- Forgot Div End Here -->
    
    <!-- Register Div Start Here -->
    <div class="login animated flipInY" id="registerDiv">  
        <div class="text-center logo">
            <img src="<?php echo URL; ?>public/img/logo-c.svg" alt="logo">
        </div>

        <form role="form" class="registerForm">
            
            <div class="form-group">
                <div class="input-icon">
                    <input type="text" class="form-control" name="register_fulName" placeholder="Full Name">
                </div>
            </div>                        
            
            <div class="form-group">
                <div class="input-icon">
                    <input type="email" class="form-control" name="register_email" placeholder="email@example.com">
                </div>
            </div>                        
            
            <div class="form-group">
                <div class="input-icon">
                    <input type="password" class="form-control" name="forgot_password" placeholder="Password">
                </div>
            </div>                        
            
            <div class="form-group">
                <div class="input-icon">
                    <input type="password" class="form-control" name="forgot_cpassword" placeholder="Confirm Password">
                </div>
            </div>                        

            <div class="clearfix">
                <button type="button" class="btn btn-danger pull-left lnkLogin">BACK</button>
                <button type="submit" class="btn btn-primary pull-right">REGISTER</button>
            </div>     

        </form>

    </div>  
    <!-- Register Div End Here -->

    <script type="text/javascript" src="<?php echo URL; ?>public/js/lib/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/bootstrap/js//bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/lib/plugins.js"></script>
    
    <script type="text/javascript" src="<?php echo URL; ?>public/css/validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/css/validation/additional-methods.min.js"></script>

    <script type="text/javascript" src="<?php echo URL; ?>public/assets/js/page-login2.js"></script>
</body>
</html>