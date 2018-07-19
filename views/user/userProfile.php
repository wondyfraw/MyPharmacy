<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

 <div class="main-container">    <!-- START: Main Container -->
            
     <div class="page-header dataBgImage" data-bg-image="../public/img/img-wall-02.jpg" style=" margin-top: -10px;
    padding-top: 150px;
    margin-bottom: 50px;"> 
         <img class="img-profile" src="../public/img/img-user-03.jpg" style="width: 150px;
    position: relative;
    bottom: -20px;
    background: #FFFFFF;
    padding: 3px;">
         <h3 class="user-name" style="color: #FFFFFF;
    position: absolute;
    margin-top: -40px;
    margin-left: 160px;"><?php echo Session::get('admin_name'); ?></h3>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-7">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <textarea rows="2" class="form-control" placeholder="What are you thinking?"></textarea>
                                <div class="clearfix">
                                    <button type="submit" class="btn btn-sm btn-primary pull-right mt-xs"><i class="fa fa-pencil"></i> Post</button>
                                    <a href="javascript:;" class="btn btn-link btn-icon"><i class="fa fa-location-arrow"></i></a>
                                    <a href="javascript:;" class="btn btn-link btn-icon"><i class="fa fa-microphone"></i></a>
                                    <a href="javascript:;" class="btn btn-link btn-icon"><i class="fa fa-camera"></i></a>
                                    <a href="javascript:;" class="btn btn-link btn-icon"><i class="fa fa-file"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
<!--                    <div class="col-md-5">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <ul class="list-flow-info">
                                    <li class="col-xs-4 text-primary">
                                        <h3>Followers</h3>
                                        <h4>2753</h4>
                                    </li>
                                    <li class="col-xs-4 text-info">
                                        <h3>Posts</h3>
                                        <h4>381</h4>
                                    </li>
                                    <li class="col-xs-4 text-success">
                                        <h3>Following</h3>
                                        <h4>1946</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>-->
                    
                </div>
                
                <div class="row">
                    
                    <div class="col-md-7">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                
                                <h4>Activity Timeline</h4>
                                <ul class="flik-timeline flik-timeline-3" data-scroll-effect="slide-down-up-effect">
                                    
                                    <li class="event" data-date="<?php echo $this->user['registration_date']; ?>">
                                        <h3>User Created</h3>
                                        <p class="event-content" data-date="<?php echo $this->user['registration_date']; ?>">
                                            Admin created new user <a href="#"><?php echo Session::get('admin_name'); ?></a>
                                        </p>
                                    </li>
                                    
                                    <li class="event" data-date="29 June 2016">
                                        <h3>Lorem ipsum dolor sit amet</h3>
                                        <p class="event-content" data-date="29 June 2016">
                                            consectetur adipiscing elit. Aenean vulputate ornare lacinia. Cras ut augue nulla. Nullam quis molestie leo. Integer et vehicula lectus. Quisque cursus lorem sed interdum ultricies.
                                        </p>
                                    </li>
                                    
                                    <li class="event" data-date="28 June 2016">
                                        <h3>Lorem ipsum dolor sit amet</h3>
                                        <p class="event-content" data-date="28 June 2016">
                                            consectetur adipiscing elit. Aenean vulputate ornare lacinia. Cras ut augue nulla. Nullam quis molestie leo. Integer et vehicula lectus. Quisque cursus lorem sed interdum ultricies.
                                        </p>
                                        
                                        <ul class="list-inline lightgallery" data-mode="lg-slide-skew-rev" loop="1">
                                            <li data-src="demo/photos/img-wall-01.jpg"> 
                                                <a href><img src="demo/photos/img-wall-01.jpg" alt="" style="width: 90px;"></a>
                                            </li>
                                            <li data-src="demo/photos/img-wall-03.jpg">
                                                <a href><img src="demo/photos/img-wall-03.jpg" alt="" style="width: 90px;"></a>
                                            </li>
                                            <li data-src="demo/photos/img-wall-04.jpg">
                                                <a href><img src="demo/photos/img-wall-04.jpg" alt="" style="width: 90px;"></a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li class="event" data-date="27 June 2016">
                                        <h3>Nullam efficitur, odio sed varius consectetur</h3>
                                        <p class="event-content" data-date="27 June 2016">
                                            Nulla nibh sollicitudin lacus, non finibus turpis libero ut elit. Pellentesque hendrerit ipsum risus, eu tincidunt nunc feugiat eget. Donec vel egestas sem. Aenean commodo erat et elit auctor, sed aliquet urna luctus. Aliquam viverra risus odio, eleifend eleifend eros aliquet nec.
                                        </p>
                                        <p>nulla nibh sollicitudin lacus, non finibus turpis libero ut elit. Pellentesque hendrerit ipsum risus, eu tincidunt nunc feugiat eget. Donec vel egestas sem. Aenean commodo erat et elit auctor, sed aliquet urna luctus. Aliquam viverra risus odio, eleifend eleifend eros aliquet nec.</p>
                                    </li>
                                    
                                    <li class="event" data-date="27 June 2016">
                                        <h3>Financial/legal</h3>
                                        <p class="event-content" data-date="27 June 2016">
                                            Facebook settles both lawsuits, ConnectU vs Facebook, Mark Zuckerberg et al.
                                            and intellectual property theft, Wayne Chang et al. over The Winklevoss Chang Group's Social Butterfly project.
                                            The settlement effectively had Facebook acquiring ConnectU for $20 million in cash and over
                                            $1.2 million in shares, valued at $45 million based on $15 billion company valuation
                                        </p>
                                    </li>
                                    
                                    <li class="event" data-date="26 June 2016">
                                        <h3>Popular culture</h3>
                                        <p class="event-content" data-date="26 June 2016">
                                            The Social Network, a film about the beginnings of Facebook directed by David Fincher is released.
                                            The film is met with widespread critical acclaim as well as commercial success;
                                            however, Mark Zuckerberg says that the film is a largely inaccurate account of what happened
                                        </p>
                                    </li>
                                    
                                    <li class="event" data-date="25 June 2016">
                                        <h3>Open sourcing</h3>
                                        <p class="event-content" data-date="25 June 2016">
                                            Facebook releases its <a href="https://facebook.github.io/react/">React</a> native framework for building native apps as open source.
                                            This is announced on the second day of the F8 conference.
                                        </p>
                                    </li>
                                    
                                </ul> <!-- END TIMELINE -->
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-5">
                        
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4>About</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget odio nulla. Quisque sem tortor, sodales in felis non, sodales volutpat velit. Nullam quis quam et elit sollicitudin congue. Morbi eu lobortis ligula. Quisque volutpat, lorem ut interdum venenatis, urna ex dictum enim, non vulputate tellus dolor ut enim.</p>
                                
                                <form class="form-horizontal basic-info">
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">First Name</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-static">Marco</p>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-static">Lopes</p>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-static">email@example.com</p>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Location</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-static">London</p>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Languages</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-static">Telugu · Tamil · English</p>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Gender</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-static">Male</p>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Date of birth</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-static">31 March</p>
                                        </div>
                                    </div>
                                    
                                </form>
                                
                            </div>
                        </div>
                        
<!--                        <div class="panel panel-default">
                            <div class="panel-body">
                                <ul class="media-list">
                                    
                                    <li class="media">
                                        <a href="#" class="pull-left">
                                            <img src="demo/users/img-user-03.jpg" alt="Avatar" class="img-circle" width="64" height="64">
                                        </a>
                                        <div class="media-body">
                                            <p>
                                                <span class="text-muted pull-right"><small>just now</small></span>
                                                <strong><a href="#">User</a> uploaded 2 new photos.</strong>
                                            </p>
                                            <div class="row pb-xs">
                                                <div class="col-sm-6 col-md-4">
                                                    <img src="demo/photos/img-wall-05.jpg" alt="image" class="img-responsive">
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <img src="demo/photos/img-wall-06.jpg" alt="image" class="img-responsive">
                                                </div>
                                            </div>
                                            <p>
                                                <a href="javascript:;" class="btn btn-xs btn-default"><i class="fa fa-thumbs-o-up"></i></a>
                                                <a href="javascript:;" class="btn btn-xs btn-default"><i class="fa fa-comments-o"></i></a>
                                                <a href="javascript:;" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i></a>
                                            </p>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="pull-left">
                                            <img src="demo/users/img-user-05.jpg" alt="Avatar" class="img-circle" width="64" height="64">
                                        </a>
                                        <div class="media-body">
                                            <p class="push-bit">
                                                <span class="text-muted pull-right"><small>1 hour ago</small></span>
                                                <strong><a href="#">Adventurer</a> checked in at <a href="javascript:;">Cafe-Bar</a>.</strong>
                                            </p>
                                            <div id="gmap-checkin" class="gmap " style="height: 200px; position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 35px; top: -204px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 35px; top: 52px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 291px; top: -204px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 291px; top: 52px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -221px; top: -204px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -221px; top: 52px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 547px; top: -204px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 547px; top: 52px;"></div></div></div></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 35px; top: -204px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 35px; top: 52px;"><canvas draggable="false" height="512" width="512" style="-webkit-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 291px; top: -204px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 291px; top: 52px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -221px; top: -204px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -221px; top: 52px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 547px; top: -204px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 547px; top: 52px;"></div></div></div></div><div style="position: absolute; z-index: 0; transform: translateZ(0px); left: 0px; top: 0px;"><div style="overflow: hidden; width: 626px; height: 200px;"><img src="http://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i7717602&amp;2i5033676&amp;2e1&amp;3u15&amp;4m2&amp;1u626&amp;2u200&amp;5m5&amp;1e0&amp;5sen-US&amp;6sus&amp;10b1&amp;12b1&amp;token=111093" style="width: 636px; height: 200px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="transform: translateZ(0px); position: absolute; left: 291px; top: -204px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i30148!3i19662!4i256!2m3!1e0!2sm!3i344010645!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=12937" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 35px; top: 52px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i30147!3i19663!4i256!2m3!1e0!2sm!3i344010657!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=66129" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 547px; top: -204px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i30149!3i19662!4i256!2m3!1e0!2sm!3i344010645!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=74899" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 547px; top: 52px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i30149!3i19663!4i256!2m3!1e0!2sm!3i344010645!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=35178" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 35px; top: -204px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i30147!3i19662!4i256!2m3!1e0!2sm!3i344010645!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=82046" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 291px; top: 52px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i30148!3i19663!4i256!2m3!1e0!2sm!3i344010657!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=128091" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: -221px; top: -204px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i30146!3i19662!4i256!2m3!1e0!2sm!3i344010645!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=20084" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: -221px; top: 52px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i30146!3i19663!4i256!2m3!1e0!2sm!3i344010657!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=4167" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%; transition-duration: 0.3s; opacity: 0; display: none;"><p class="gm-style-pbt">Use two fingers to move the map</p></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 4; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=-33.863,151.215412&amp;z=15&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/google4_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 131px; top: 10px; background-color: white;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2016 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 166px; bottom: 0px; width: 121px;"><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2016 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2016 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; -webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div style="width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/sv5.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 112px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@-33.863,151.2154121,15z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div></div></div>
                                            <p>
                                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-thumbs-o-up"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-comments-o"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i></a>
                                            </p>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="pull-left">
                                            <img src="demo/users/img-user-06.jpg" alt="Avatar" class="img-circle" width="64" height="64">
                                        </a>
                                        <div class="media-body">
                                            <p>
                                                <span class="text-muted pull-right"><small>5 hours ago</small></span>
                                                <strong><a href="#">User</a> updated status.</strong>
                                            </p>
                                            <p>Hey there! First post from the new application!</p>
                                            <p>
                                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-thumbs-o-up"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i></a>
                                            </p>
                                            <ul class="media-list">
                                                <li class="media">
                                                    <a href="#" class="pull-left">
                                                        <img src="demo/users/img-user-07.jpg" alt="Avatar" class="img-circle" width="64" height="64">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="#"><strong>User</strong></a>
                                                        <span class="text-muted"><small><em>1 hour ago</em></small></span>
                                                        <p>Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum.</p>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a href="#" class="pull-left">
                                                        <img src="demo/users/img-user-06.jpg" alt="Avatar" class="img-circle" width="64" height="64">
                                                    </a>
                                                    <div class="media-body">
                                                        <form action="#" method="post" onsubmit="return false;">
                                                            <textarea class="form-control" rows="2" placeholder="Your comment.."></textarea>
                                                            <button type="submit" class="btn btn-xs btn-primary pt-xs"><i class="fa fa-pencil"></i> Post Comment</button>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media text-center">
                                        <a href="javascript:void(0)" class="btn btn-xs btn-default btn-block">View more..</a>
                                    </li>
                                </ul>
                            </div>
                        </div>-->
                        
                    </div>
                    
                </div>
                    
                
            </div>  <!--END: Content Wrap-->
            
        </div>  <!-- END: Main Container -->

