<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
   
    <title>success | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Prakasam Mathaiyan">
    <meta name="description" content="">

    <!--[if lt IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="../../js/lib/modernizr.js"></script>
    <link rel="icon" href="../../img/favicon.png" type="image/gif">
    
    <link rel="stylesheet" type="text/css" href="../../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/bs-overide/bootstrap.buttons.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/lib/page-404.css">
    </head>
    <body class="page500">
    
    <div class="cont_principal">
        <div class="cont_error">
            <i class="fa fa-check-circle-o" style="font-size: 60px; color: green"></i>
            <h1>OK</h1>  
            <p>Successfully finish the operation!</p>
            <?php
        
        ?>
            <a class="btn btn-success" href="home.php"><i class="fa fa-home"></i> Back to Dashboard</a>
            <a class="btn btn-primary" href="#"><i class="fa fa-envelope"></i> Contact Us</a>
            
        </div>
        <div class="cont_aura_1"></div>
        <div class="cont_aura_2"></div>
    </div>
    
    <script type="text/javascript" src="../../js/lib/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="../../bootstrap/js//bootstrap.min.js"></script>
    <script>
    window.onload = function(){
        document.querySelector('.cont_principal').className= "cont_principal cont_error_active"; 
    };
    </script>
        
    </body>
</html>
