<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php URL; ?>public/assets/css/lib/page-login.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/css/lib/page-login.css">
    </head>

 <div class="container">
        
        <div class="animatedParent">
            <div class="row">
                
                <div class="col-md-6 col-sm-6 hidden-xs" style="margin-left: 30px;">
                    
                    <h3 class="sign animated flipInX">Take it all of with you and we</h3>
                    <p class="small animated flipInX">Smart device and pick up every where our service.</p>
                    
                    <div class='slider'>
                        <div class='slide1'></div>
                        <div class='slide2'></div>
                        <div class='slide3'></div>
                        <div class='slide4'></div>
                    </div>
                    
                    <h3 class="sign animated flipInX">One account give all service</h3>
                    <p class="small animated flipInX">you can connect with us.</p>
                    
                    <ul class="list-inline social">
                        <li><a href="#"><i class="fa fa-facebook hvr-buzz-out" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter hvr-buzz-out" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus hvr-buzz-out" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin hvr-buzz-out" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p hvr-buzz-out" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype hvr-buzz-out" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-wordpress hvr-buzz-out" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo hvr-buzz-out" aria-hidden="true"></i></a></li>
                    </ul>
                    
                    <ul class="list-inline text-center">
                        <li><a href="#"><img src="../public/img/appstore.png" class="img-responsive app"></a></li>
                        <li><a href="#"><img src="../public/img/googleplay.png" class="img-responsive app"></a></li>
                    </ul>
                </div>
                
                <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4">
                    
                    <div class="blue-line sm normal"></div>
                    
                    <div class="signup-box">
                        <div class="logo"><img src="../public/img/logo-c.svg" alt="" style="height: 40px;"></div>
                        
                        <form action="<?php $_SERVER['DOCUMENT_ROOT'];?>/snnprcoc/user/runQuery" method="post">
                            <div class="form-group">
                                <input type="text" name="myName" id="myName" class="form-control" placeholder="First Name" data-validation="required" style="width: 100%">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span id="error_name" class="text-danger"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name" data-validation="required" style="width: 100%">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span id="error_lastname" class="text-danger"/>
                            </div>
                            <div class="form-group">
                                <!--<input type="email" name="email" class="form-control" placeholder="Email">-->
                                <input type="email" name="email" id="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" data-validation="required" style="width: 100%">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span id="error_email" class="text-danger"/>
                            </div>
                            
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" data-validation = "required" style="width: 100%">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                <span id="error_password" class="text-danger"/>
                            </div>                           
                            <div class="form-group">
                                <select class="form-control" id="gender" data-validation="required" name="gender" style="width: 100%">
                                            <option>M</option>
                                            <option>F</option>
                                        </select>
                                        <span id="error_gender" class="text-danger" ></span>   
                            </div>   
                            <div class="form-group">
                                <select class="form-control" id="userType" data-validation="required" name="userType" style="width: 100%">
                                            <option>Admin</option>
                                            <option>Scheduler</option>
                                            <option>Certifier</option>
                                        </select>
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>                            
<!--                            <div class="checkbox checkbox-primary">
                                <input id="agree"  type="checkbox" checked>
                                <label for="agree"> I agree to the account <a href="#">Terms</a> & <a href="#">Privacy</a>.</label>
                            </div>-->
                            <div class="form-check form-check-inline checkbox-primary">
                                <input class="form-check-input styled"  type="checkbox" id="agree"  name="agree">
                                <label class="form-check-label" for="agree">I agree to the account <a href="#">Terms</a> & <a href="#">Privacy</a>.</label>
                            </div>
                            
                      <button  type="submit" class="btn btn-primary btn-block" name="submit" id="submit">Create account</button>
                      
                        </form>
                        
                        <ul class="list-inline text-center social-signup">
                            <li>
                                <a class="btn btn-social btn-facebook" href="#"><span class="fa fa-facebook"></span>Login Facebook</a>
                            </li>
                            <li>
                                <a class="btn btn-social btn-linkedin" href="#"><span class="fa fa-linkedin"></span>Login LinkedIn</a>
                            </li>
                        </ul>
                    </div>
                    
                    <br>
<!--                    <div class="signup-box">
                        <p class="signac animated flipInX">If you have an account? <a href="../../login.php">Sign in</a></p>
                    </div>-->
                    
                    <div class="blue-line lg normal"></div>
                </div>
            </div>
        </div>
    </div>  <!-- Container End -->
    </html>