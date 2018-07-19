<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * *************************************
 *  Developed by Wondyfraw Hailu 2018  *
 * *************************************
 */
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Assessment Schedule</h3>

    </div>
    <div class="panel-body">      
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Assessmet</h3>
                                <div class="tools">
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>	                                
                                </div>
                            </div>
                            <div class="panel-body">
                                <form method="post" >
                                <fieldset>
                                    <legend class="panel-title">
                                        Assessment Details
                                    </legend>
                                    <?php if(count($this->schedules)>0){ 
                                           foreach ($this->schedules as $schedule) {    
                                     ?>
                                    <label>Assessment Date:  <?php echo $schedule['assessment_date']; ?></label><br/>
                                    <strong>Assessment Time:  <?php echo $schedule['assessment_time']; ?></strong><br/>
                                    <strong>Total Number of Candidates: </strong><br/>
                                    <strong>Total Number of Assessor: </strong>
                                    
                                    <?php }} ?>
                                </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
                    
                
<!--            </div>  END: Content Wrap-->
            
<!--        </div>   END: Main Container -->
    </div>
</div>

