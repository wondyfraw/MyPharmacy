<?php  
?>
<!-- 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
   -->         
         <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Dashboard <small>Welcome back <span class="text-primary">Maria Fällström</span></small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Dashboard V2</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                
                                <div class="dbMapWorld" style="height: 300px;"></div>
                                
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="mini-data-progress">
                            <h3>Registered Candidate</h3>
                            <i class="sli-users text-primary"></i>
                            <h2><span class="num-animater" data-delay="2000">2784</span> <small class="text-danger">-13%</small></h2>
                            <div class="progress progress-xxs mb-0 mt-md">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="mini-data-progress">
                            <h3>TOTAL AC</h3>
                            <i class="sli-eye text-info"></i>
                            <h2><span class="num-animater" data-delay="3000">9784</span> <small class="text-success">+9%</small></h2>
                            <div class="progress progress-xxs mb-0 mt-md">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                    <span class="sr-only">30% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="mini-data-progress">
                            <h3>TOTAL Assessed Candidate</h3>
                            <i class="sli-basket-loaded text-warning"></i>
                            <h2><span class="num-animater" data-delay="800">215</span> <small class="text-warning">-4%</small></h2>
                            <div class="progress progress-xxs mb-0 mt-md">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="mini-data-progress">
                            <h3>TOTAL Categories</h3>
                            <i class="sli-wallet text-success"></i>
                            <h2><span class="num-animater" data-delay="1500">7194</span> <small class="text-success">$</small></h2>
                            <div class="progress progress-xxs mb-0 mt-md">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Sales & Visitors</h3>
                                <div class="tools">
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="chaerSales" style="height: 250px;"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Web Stats</h3>
                                <div class="tools">
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="chartStats" style="height: 250px;"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Visitors</h3>
                                <div class="tools">
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="chartVisitors" style="height: 250px;"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="calaendar"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Products</h3>
                                <div class="tools">
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>SKU</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="<?php echo URL; ?>public/demo/products/img-pro-01.jpg" alt="" class="img-rounded" style="width: 50px;"></td>
                                            <td>A6020a46</td>
                                            <td>Lenovo Vibe K5 Plus 3 GB (Dark Grey, 16 GB)</td>
                                            <td>₹8,499</td>
                                        </tr>
                                        <tr>
                                            <td><img src="<?php echo URL; ?>public/demo/products/img-pro-02.jpg" alt="" class="img-rounded" style="width: 50px;"></td>
                                            <td>MSM8937</td>
                                            <td>Swipe Elite Max (Onyx Black, 32 GB)</td>
                                            <td>₹10,999</td>
                                        </tr>
                                        <tr>
                                            <td><img src="<?php echo URL; ?>public/demo/products/img-pro-03.jpg" alt="" class="img-rounded" style="width: 50px;"></td>
                                            <td>A6020a46</td>
                                            <td>LYF Water 3 (Silver, 16 GB)</td>
                                            <td>₹6,599</td>
                                        </tr>
                                        <tr>
                                            <td><img src="<?php echo URL; ?>public/demo/products/img-pro-04.jpg" alt="" class="img-rounded" style="width: 50px;"></td>
                                            <td>XT1557</td>
                                            <td>Virat FanBox Moto G Turbo Virat Kohli (Black, 16 GB)</td>
                                            <td>₹16,999</td>
                                        </tr>
                                        <tr>
                                            <td><img src="<?php echo URL; ?>public/demo/products/img-pro-05.jpg" alt="" class="img-rounded" style="width: 50px;"></td>
                                            <td>MSM8952</td>
                                            <td>Alcatel Idol 4 (Gold, 16 GB)</td>
                                            <td>₹16,999</td>
                                        </tr>
                                    </tbody>
                                        
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>  <!--END: Content Wrap-->
            
        </div>  <!-- END: Main Container -->
 
