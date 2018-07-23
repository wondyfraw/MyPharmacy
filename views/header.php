<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
    <title>SNNPRS OCAIMS</title>
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
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/animate-it/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/css/lib/page-acctivity-timeline.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/plugins/lightGallery/css/lightgallery.min.css"/>
    
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/cmp-bs-checkbox.css">
    
     <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/jasny-bootstrap/css/jasny-bootstrap.min.css">
<!--     <link href="<?php echo URL; ?>public/css/stylezend.css" rel="stylesheet">-->
     
     <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/plugins/date-picker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/plugins/dateTime-picker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/plugins/timepicker/bootstrap-timepicker.min.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/plugins/jvectormap/jquery-jvectormap-2.0.4.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/plugins/morris/morris.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/plugins/fullcalendar/fullcalendar.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/css/lib/page-acctivity-timeline.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/font-awesome/css/font-awesome.min.css">
    <!--<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/css/lib/page-login.css">-->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/assets/css/style-default.css">
    
</head>

<script type="text/javascript">
     function openT(occupation){
            //var val = JSON.parse(occupation);
            //JSON.stringify(val);
            var id =  occupation['occupation_id'];
            document.getElementById("sector").value =  occupation['sector'];
            document.getElementById("subSector").value = occupation['sub_sector'];
            document.getElementById("occupation").value = occupation['occupation_name'];
            document.getElementById("id").value = occupation['occupation_id'];
           
        }
        
      function save(){ 
        var id = document.getElementById("id").value;
        occup = [];
        occup[0] = document.getElementById("id").value;
        occup[1] = document.getElementById("sector").value;
        occup[2] = document.getElementById("subSector").value;
        occup[3] = document.getElementById("occupation").value;
         jQuery.ajax( {
                    url : '<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/occupation/saveEdit',
                    type : "POST",
                    data : {occup:occup},
                    success: function(res){
                        if(res === 'OK')
                          alert("Update Occupation correctly!!");
                        else{
                            alert('Edit is failed. Try again');
                        }
                    }
                });
    }
    
    function passAssessmentId(id){  
       document.getElementById("idA").value = id;
    }
    function passAssessmentIdS(id){
       document.getElementById("idAS").value = id;   
    }
    function deleteAssessment(){
      var id = document.getElementById('idA').value;
      jQuery.ajax({
            url : '<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/delete',
            type : "POST",
            data : {id:id},
            success : function(res){
                if(res === 'OK')
                  alert("Successfully delete Assessment");
                else{
                    alert("Deletion of Assessment is failed");
                }
            }
      });
    }
    
     function checkAvailability(tableName) {
       //$("#loaderIcon").show();
       var email = document.getElementById("myEmail").value;
       check = [];
       check[0] = email;
       check[1] = tableName;
       jQuery.ajax({
                    url: '<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessor/check_availability',
                    data:{username:check},
                    type: "POST",
                    success:function(data){
                    //jQuery("#user-availability-status").html(data);
                    if(data == 'OK'){                      
                         jQuery("#user-availability-status").text("*Email address is already exist");
                         jQuery('#submit').attr('disabled',true);  
                       }
                     else{
                         jQuery("#user-availability-status").text("");
                         jQuery('#submit').attr('disabled',false);
                     }
                    //$("#loaderIcon").hide();
                    },
                    error:function (){}
          });
  }
  function checkAvailabilityS(tableName){
        var email = document.getElementById("myEmail").value;
       check = [];
       check[0] = email;
       check[1] = tableName;
       jQuery.ajax({
                    url: '<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/supervisor/check_availability',
                    data:{username:check},
                    type: "POST",
                    success:function(data){
                    //jQuery("#user-availability-status").html(data);
                    if(data == 'OK'){                      
                         jQuery("#user-availability-status").text("*Email address is already exist");
                         jQuery('#submit').attr('disabled',true);  
                       }
                     else{
                         jQuery("#user-availability-status").text("");
                         jQuery('#submit').attr('disabled',false);
                     }
                    //$("#loaderIcon").hide();
                    },
                    error:function (){}
          });
    }
    function saveAssessmentSchedule(){
          schedule = [];
          schedule[0] = document.getElementById("idAS").value;
          
          scedule[2] = document.getElementById("assessmentTime").value;
          jQuery.ajax({
                       url: '<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/persistSchedule',
                       data: {schedule:schedule},
                       type: "POST",
                       success:function(data){
                         if(data == 'OK'){
                             alert("Successfullt save schedule");
                             window.location.href = '<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/assessmentList';                            
                             }
                             else
                                 alert("fail to save schedule");
                   },
                   error:function(){}
          });
          
    }
    
    function passAssessmentSchedule(schedule){ 
          document.getElementById("idAS").value = schedule['assessment_schedule_id'];
          document.getElementById("assessmentDate").value = schedule['assessment_date'];
          document.getElementById("assessmentTime").value = schedule['assessment_time']; 
    }
    function updateAssessmentSchedule(){
        schedule = [];
          schedule[0] = document.getElementById("idAS").value;
          schedule[1] = document.getElementById("assessmentDate").value;
          schedule[2] = document.getElementById("assessmentTime").value; 
          //alert(schedule[1]);
          jQuery.ajax({
                       url:  '<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/updateAssessmentSchedule',
                       data: {schedule:schedule},
                       type: "POST",
                       success:function(data){
                           if(data == "OK")
                               alert("Successfully update schedule");
                           else
                               alert("Schedule editing is fail. Please try again");
                      },
                      error:function(){}
          });
    }
    
    function selectAssessor(assessmentScheduleId){
       var e = document.getElementById ("assessorId");
       var assessorId = e.options [e.selectedIndex] .value;
       assessor = [];
       //alert(assessorId);
          if(assessorId != null){
              assessor[0] = assessorId;
              assessor[1] = assessmentScheduleId;
              //alert(assessor[0]);
             jQuery.ajax({
                 url: '<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/selectAssessor',
                 data:{assessor:assessor},
                 type: "POST",
                 success:function(data){
                   if(data == 'OK'){
                       alert('successfully add assessor');
                       $("#DivSpan").append("Assessor added successfullys..!!");
                   } 
              },
              error:function(){}
             });      
        }
    }
    
    function selectSupervisor(assessmentScheduleId){
       
    }
    function closeAssessmentSession(id){
       alert(id);
    }
 
</script>
<body>
    <div class="wrapper has-footer">
     <header class="header-top navbar fixed-top">
            
            <div class="top-bar">   <!-- START: Responsive Search -->
                <div class="container">
                    <div class="main-search">
                        <div class="input-wrap">
                            <input class="form-control" type="text" placeholder="Search Here...">
                            <a href="page-search.php"><i class="sli-magnifier"></i></a>
                        </div>
                        <span class="close-search search-toggle"><i class="ti-close"></i></span>
                    </div>
                </div>
            </div>  <!-- END: Responsive Search -->

            <div class="navbar-header">
                <button type="button" class="navbar-toggle side-nav-toggle">
                    <i class="ti-align-left"></i>
                </button>

                <a class="navbar-brand" href="index.php">
                    <img src="<?php echo URL; ?>public/assets/images/logo-w.svg">
                    <span>Big Ben</span>
                </a>

                <ul class="nav navbar-nav-xs">  <!-- START: Responsive Top Right tool bar -->
                    <li>
                        <a href="javascript:;" class="collapse" data-toggle="collapse" data-target="#headerNavbarCollapse">
                            <i class="sli-user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="search-toggle">
                            <i class="sli-magnifier"></i>
                        </a>
                    </li>
                    
                </ul>   <!-- END: Responsive Top Right tool bar -->
                
            </div>
            
            <div class="collapse navbar-collapse" id="headerNavbarCollapse">
                
                <ul class="nav navbar-nav">
                    
                    <li class="hidden-xs">
                        <a href="javascript:;" class="sidenav-size-toggle">
                            <i class="ti-align-left"></i>
                        </a>
                    </li>
                    
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="sli-bell"></i>
                            <div class="new-alert active"></div>
                        </a>
                        <ul class="dropdown-menu dropdown-lg list-group-dropdown">
                            <li class="no-link">4 New Notifications</li>
                            <li>
                                <a href="#">
                                    <div class="user-list-wrap">
                                        <div class="profile-pic profile-icon"><i class="ti-file"></i></div>
                                        <div class="detail">
                                            <span class="text-normal">Ricky Palmer</span>
                                            <span class="time">3 hrs ago</span>
                                            <p class="font-11 no-m-b text-overflow">Sent you a file</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="user-list-wrap">
                                        <div class="profile-pic profile-icon"><i class="ti-email"></i></div>
                                        <div class="detail">
                                            <span class="text-normal">Charles Dockery</span>
                                            <span class="time">Jun 03, 2015</span>
                                            <p class="font-11 no-m-b text-overflow">Sent you a message</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="user-list-wrap">
                                        <div class="profile-pic profile-icon"><i class="ti-shopping-cart-full"></i></div>
                                        <div class="detail">
                                            <span class="text-normal">Kimberly Crouch</span>
                                            <span class="time">May 17, 2015</span>
                                            <p class="font-11 no-m-b text-overflow">Purchased your item</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><a href="#" class="text-center">See all</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="sli-envelope"></i>
                            <span class="badge bg-danger">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-lg list-group-dropdown">
                            
                            <li class="no-link font-12">You have 4 new notifications</li>
                            
                            <li>
                                <a href="#">
                                    <div class="user-list-wrap">
                                        <div class="profile-pic"><img src="<?php echo URL; ?>public/demo/users/img-user-02.jpg" alt=""></div>
                                        <div class="detail">
                                            <span class="text-normal">Cynthianawen</span>
                                            <span class="time">2 mins ago</span>
                                            <p class="font-11 no-m-b text-overflow">Start following you</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="user-list-wrap">
                                        <div class="profile-pic"><img src="<?php echo URL; ?>public/demo/users/img-user-03.jpg" alt=""></div>
                                        <div class="detail">
                                            <span class="text-normal">Megan Stamper</span>
                                            <span class="time">1 hr ago</span>
                                            <p class="font-11 no-m-b text-overflow">Accepted your friend request</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="user-list-wrap">
                                        <div class="profile-pic"><img src="<?php echo URL; ?>public/demo/users/img-user-04.jpg" alt=""></div>
                                        <div class="detail">
                                            <span class="text-normal">Alex Pushkin</span>
                                            <span class="time">yesterday</span>
                                            <p class="font-11 no-m-b text-overflow">Sent you a friend request</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="user-list-wrap">
                                        <div class="profile-pic"><img src="<?php echo URL; ?>public/demo/users/img-user-05.jpg" alt=""></div>
                                        <div class="detail">
                                            <span class="text-normal">Bjarne Flur Kvistad</span>
                                            <span class="time">2 days ago</span>
                                            <p class="font-11 no-m-b text-overflow">Start following you</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            
                            <li><a href="#" class="text-center">See all</a></li>
                        </ul>
                    </li>

                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="main-search hidden-xs">
                        <div class="input-wrap">
                            <input class="form-control" type="text" placeholder="Search Here...">
                            <a href="page-search.php"><i class="sli-magnifier"></i></a>
                        </div>
                    </li>
                    
                    <li class="user-profile dropdown">
                        <a href="javascript:;" class="clearfix dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo URL; ?>public/demo/users/img-user-01.jpg" alt="" class="hidden-sm">
                            <div class="user-name">Maria Fällström <small class="fa fa-angle-down"></small></div>
                        </a>
                        <ul class="dropdown-menu dropdown-animated pop-effect" role="menu">
                            <li><a href="user-profile.php"><i class="sli-user"></i> My Profile</a></li>
                            <li><a href="app-calendar.php"><i class="sli-calendar"></i> Calendar</a></li>
                            <li><a href="msg-inbox.php"><i class="fa fa-envelope-o"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="page-faq.php"><i class="sli-question"></i> FAQ's</a></li>
                            <li><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/dashboard/logout"><i class="sli-logout"></i> Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                
            </div><!-- END: Navbar-collapse -->
            
        </header>   <!-- END: Header -->
        
        <aside class="side-navigation-wrap sidebar-fixed">  <!-- START: Side Navigation -->
            <div class="sidenav-inner">
                
                <ul class="side-nav magic-nav">
                    
                    <li class="side-nav-header">Navigation</li>
                    
                    <li>
                        <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/dashboard"><i class="sli-dashboard"></i> <span class="nav-text">Dashboard</span></a>
                    </li>
                    
                    <li>
                        <a href="msg-inbox.php">
                            <i class="sli-envelope"></i> 
                            <span class="nav-text">Messages</span>
                            <span class="badge bg-danger">3</span>
                        </a>
                    </li>
                    
                    <li class="has-submenu">
                        <a href="#submenuOne" data-toggle="collapse" aria-expanded="false">
                            <i class="sli-user"></i> 
                            <span class="nav-text">Candidates</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuOne">
                            <ul>
                                <li><a  href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/candidates/index">Registration</a></li>
                                <li><a  href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/candidates/candidateList">Candidate List</a></li>
                                <li><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/candidates/candidate_status">Candidate Status</a></li>
                                <li><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/candidates/candidate_detailInfo">Detail Information</a></li>
                                <li><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/candidates/candidate_activity_list">Activity List</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="has-submenu">
                        <a href="#submenuTwo" data-toggle="collapse" aria-expanded="false">
                            <i class="sli-user"></i> 
                            <span class="nav-text">Users</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuTwo">
                            <ul>
                                <li><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/user/createUser">Create User</a></li>
                                <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/snnprcoc/user/userList">User List</a></li>
                                <li><a href="ui-typography.php">Typography</a></li>
                                <li><a href="ui-tabs-navs.php">Tabs & Navs</a></li>
                                <li><a href="ui-accordions.php">Accordions</a></li>                              
                            </ul>
                        </div>
                    </li>
                    
                    <li class="has-submenu">
                        <a href="#submenuThree" data-toggle="collapse" aria-expanded="false">
                            <i class="sli-layers"></i> 
                            <span class="nav-text">Occupation</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuThree">
                            <ul>
                                <li><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/occupation/occupationRegistration">Register Occupation</a></li>
                                <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/snnprcoc/occupation/occupationList">Manage Occupation</a></li>
                                <li><a href="form-css-toggle.php">CSS Toggle</a></li>
                                <li><a href="form-validation.php">Validation</a></li>
                                <li><a href="form-wizard.php">Wizard</a></li>
                                <li><a href="form-upload.php">Upload</a></li>
                                <li><a href="form-editors.php">Editors</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="has-submenu">
                        <a href="#submenuFour" data-toggle="collapse" aria-expanded="false">
                            <i class="sli-docs"></i> 
                            <span class="nav-text">Assessment</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuFour">
                            <ul>
                                <li><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/assessmentRegistration">Assessment Registration</a></li>
                                <li><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/assessmentList">Manage Assessment</a></li>
                                <li><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/assessmentDetailes">Assessment Details</a></li>

                            </ul>
                        </div>
                    </li>
                    
                    <li class="has-submenu">
                        <a href="#submenuFive" data-toggle="collapse" aria-expanded="false">
                            <i class="sli-user"></i> 
                            <span class="nav-text">Assessor</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuFive">
                            <ul>
                                <li><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessor/assessorRegistration">Assessor Registration</a></li>
                                <li><a href="map-vector.php">Manage Assessor</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="has-submenu">
                        <a href="#submenuEleven" data-toggle="collapse" aria-expanded="false">
                            <i class="sli-briefcase"></i> 
                            <span class="nav-text">Supervisor</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuEleven">
                            <ul>
                                <li><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/supervisor/supervisorRegistration">Supervisor Registration</a></li>
                                <li><a href="#">Manage Supervisor</a></li>
                                <li><a href="#">Supervisor Activities</a></li>                           
                            </ul>
                        </div>
                    </li>
                    
                    <li class="has-submenu">
                        <a href="#submenuSix" data-toggle="collapse" aria-expanded="false">
                            <i class="sli-pie-chart"></i> 
                            <span class="nav-text">Charts</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuSix">
                            <ul>
                                <li><a href="chart-flot.php">Flot Chart</a></li>
                                <li><a href="chart-morris.php">Morris</a></li>
                                <li><a href="chart-chart-js.php">Chart JS</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="has-submenu">
                        <a href="#submenuSeven" data-toggle="collapse" aria-expanded="false">
                            <i class="sli-user"></i> 
                            <span class="nav-text">User</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuSeven">
                            <ul>
                                <li><a href="user-profile.php">Profile</a></li>
                                <li><a href="user-contact-list.php">Contact List</a></li>
                                <li><a href="user-login.php">Login</a></li>
                                <li><a href="user-signup.php">Sign up</a></li>
                                <li><a href="user-forgotpassword.php">Forgot Password</a></li>
                                <li><a href="user-login-2.php">Login 2</a></li>
                                <li><a href="user-lock.php">Lock</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="side-nav-header">More</li>
                    
                    <li>
                        <a href="widgets.php">
                            <i class="sli-rocket"></i> 
                            <span class="nav-text">Widgets</span>
                            <span class="badge bg-danger">10</span>
                        </a>
                    </li>
                    
                    <li class="has-submenu">
                        <a href="#submenuEight" data-toggle="collapse" aria-expanded="false">
                            <i class="sli-compass"></i> 
                            <span class="nav-text">Icons</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuEight">
                            <ul>
                                <li><a href="icons-dashicons.php">DashIcons</a></li>
                                <li><a href="icons-fontawesome.php">Font Awesome</a></li>
                                <li><a href="icons-fsicons.php">FS Icons</a></li>
                                <li><a href="icons-themify.php">Themify</a></li>
                                <li><a href="icons-lineicons.php">Line Icons</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="has-submenu">
                        <a href="#submenuNine" data-toggle="collapse" aria-expanded="false">
                            <i class="sli-trophy"></i> 
                            <span class="nav-text">Applications</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuNine">
                            <ul>
                                <li><a href="app-log-view.php">Log View</a></li>
                                <li><a href="app-calendar.php">Calendar</a></li>
                                <li><a href="app-year-calendar.php">Year Calendar</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="has-submenu">
                        <a href="#submenuTen" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-sitemap"></i> <span class="nav-text">Menu Levels</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuTen">
                            <ul>
                                <li><a href="#" class="animsition-link">Menu 1.1</a></li>
                                <li><a href="#" class="animsition-link">Menu 1.2</a></li>
                                <li class="has-submenu">
                                    <a href="#submenuTenOne" data-toggle="collapse">Menu 1.3</a>
                                    <div class="sub-menu collapse" id="submenuTenOne">
                                        <ul>
                                            <li><a href="#">Menu 3.1</a></li>
                                            <li><a href="#">Menu 3.2</a></li>
                                            <li><a href="#">Menu 3.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="side-nav-header">Progress</li>
                    
                    <li>
                        <div class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-cog"></i></a>
                            <ul class="dropdown-menu dropdown-animated pop-effect pull-right">
                                <li><a href="#">Add new milestone</a></li>
                                <li><a href="#">Remove milestone</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="milestone">
                        <a href="#">
                            UX Design
                            <small class="pull-right">12/20</small>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 60%;"></div>
                            </div>
                        </a>
                    </li>
                    
                    <li class="milestone">
                        <a href="#">
                            Frontend Development
                            <small class="pull-right">9/9</small>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" style="width: 100%;"></div>
                            </div>
                        </a>
                    </li>
                    
                    <li class="milestone">
                        <a href="#">
                            Backend Development
                            <small class="pull-right">2/10</small>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-warning" style="width: 20%;"></div>
                            </div>
                        </a>
                    </li>
                    
                </ul>
                
            </div><!-- END: sidebar-inner -->
            
        </aside>    <!-- END: Side Navigation -->