<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
   <div class="main-container">    <!-- START: Main Container -->

                <div class="page-header">
                    <h1>Occupation Information</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/dashboard">Home</a></li>
                        <li class="active">Occupation Info</li>
                    </ol>
                </div>

                <div class="content-wrap">  <!--START: Content Wrap-->

                    <div class="row">

                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <!--                            <div class="panel-heading">
                                                                <h3 class="panel-title">Panel title</h3>
                                                                <div class="tools">
                                                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>	                                
                                                                </div>
                                                            </div>-->
                                <div class="panel-body">
                                    <fieldset style=" display: block;
                                                        margin-left: 2px;
                                                        margin-right: 2px;
                                                        padding-top: 0.35em;
                                                        padding-bottom: 0.625em;
                                                        padding-left: 0.75em;
                                                        padding-right: 0.75em;
                                                        border: 2px groove (internal value);">
                                        <legend>
                                            Occupation Details
                                        </legend>
                                        <?php if($this->occupation) {
                                         foreach ($this->occupation as $data) {
                                        ?>
                                                <p><strong>Sector: </strong><?php echo $data['sector']; ?></p>
                                                <p><strong>Sub Sector: </strong><?php echo $data['sub_sector']; ?></p>
                                                <p><strong>Occupation: </strong><?php echo $data['occupation_name']; ?></p>
                                                <p><strong>Registration Date: </strong><?php echo $data['registration_date']; ?></p>
                                                <p><strong>Modification Date: </strong><?php echo $data['modification_date']; ?></p>
                                        <?php  }}?>     
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>  <!--END: Content Wrap-->

            </div>  <!-- END: Main Container -->

