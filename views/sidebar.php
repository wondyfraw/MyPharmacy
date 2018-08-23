
        <?php
        // put your code here
        ?>
   
 <aside class="side-navigation-wrap sidebar-fixed">  <!-- START: Side Navigation -->
            <div class="sidenav-inner">
                
                <ul class="side-nav magic-nav">
                    
                    <li class="side-nav-header">Navigation</li>
                    
                    <li>
                        <a href="home.php"><i class="sli-dashboard"></i> <span class="nav-text">Dashboard</span></a>
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
                                <li><a  href="candidate/candidate_registration">Registration</a></li>
                                <li><a  href="candidate/candidate_list">Candidate List</a></li>
                                <li><a href="../candidate/candidate_status">Candidate Status</a></li>
                                <li><a href="../candidate/candidate_detailInfo">Detail Information</a></li>
                                <li><a href="../candidate/candidate_activity_list">Activity List</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="has-submenu">
                        <a href="#submenuTwo" data-toggle="collapse" aria-expanded="false">
                            <i class="sli-present"></i> 
                            <span class="nav-text">Users</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuTwo">
                            <ul>
                                <li><a href="private/create_user.php">Create User</a></li>
                                <li><a href="ui-buttons.php">Buttons</a></li>
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
                                <li><a href="occupation/occupation_registration.php">Register Occupation</a></li>
                                <li><a href="form-advanced.php">Manage Occupation</a></li>
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
                            <span class="nav-text">Pages</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuFour">
                            <ul>
                                <li><a href="page-blank.php">Blank Page</a></li>
                                <li><a href="page-search.php">Search</a></li>
                                <li><a href="page-404.php">404 Page</a></li>
                                <li><a href="page-500.php">500 Page</a></li>
                                <li><a href="page-invoice.php">Invoice</a></li>
                                <li><a href="page-faq.php">FAQs</a></li>
                                <li><a href="page-timeline.php">Timeline</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="has-submenu">
                        <a href="#submenuFive" data-toggle="collapse" aria-expanded="false">
                            <i class="sli-map"></i> 
                            <span class="nav-text">Maps</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuFive">
                            <ul>
                                <li><a href="map-google.php">Google</a></li>
                                <li><a href="map-vector.php">Vector</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="has-submenu">
                        <a href="#submenuEleven" data-toggle="collapse" aria-expanded="false">
                            <i class="sli-briefcase"></i> 
                            <span class="nav-text">Components</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuEleven">
                            <ul>
                                <li><a href="cmp-nestable.php">Nestable List</a></li>
                                <li><a href="cmp-activity-list.php">Activity Timeline</a></li>
                                <li><a href="cmp-justgage.php">JustGage</a></li>
                                <li><a href="cmp-hr-timeline.php">Horizontal Timeline</a></li>
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
