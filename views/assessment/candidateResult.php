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
<div class="main-container">
    <div class="content-wrap">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Candidates Registered for this occupation</h3>

                    </div>    
                    <div class="panel-body">      

                        <div class="row">

                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        
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
                                                <?php
                                                if (count($this->schedules) > 0) {
                                                    foreach ($this->schedules as $schedule) {
                                                        ?>
                                                        <label>Assessment Date:  <?php echo $schedule['assessment_date']; ?></label><br/>
                                                        <strong>Assessment Time:  <?php echo $schedule['assessment_time']; ?></strong><br/>

                                                    <?php }
                                                } ?>
                                                <?php if (count($this->assessments) > 0) {
                                                    foreach ($this->assessments as $assessment) {
                                                        ?>
                                                        <strong>Occupation: <?php echo $assessment['occupationName']; ?></strong><br/>
                                                        <strong>Level: <?php echo $assessment['levels']; ?></strong><br/>                          
                                                    <?php }
                                                } ?>
                                          <?php if (count($this->assessors) > 0) {
                                                     foreach ($this->assessors as $assessor) {
                                                        ?>
                                                        <strong>Assessor FullName: <?php echo $assessor['assessor_first_name'] . " " . $assessor['assessor_middle_name'] . " " . $assessor['assessor_last_name']; ?></strong>                                       
                                                         <?php }
                                                    } ?>
                                            </fieldset><br/>

                                            <table class="table table-bordered table-dataTable" style="width: 100%">
                                                <thead style="background-color: #2ECC71">
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>SurName</th>                                                    
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                 <?php if (count($this->cadidates) > 0) {
                                                     foreach ($this->cadidates as $cadidate) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $cadidate['first_name'] . " " . $cadidate['middle_name'] ?></td>  
                                                                <td><?php echo $cadidate['last_name']; ?></td>                                                                                                                                                         
                                                                <td>
                                                                 <?php if($cadidate['result_status'] == 'NO'){ ?>
                                                                    <a href="#" data-toggle="modal" data-target="#myAssessmentResult" data-toggle="tooltip" title="add result" class="btn btn-primary btn-xs btn-link active" role="button" aria-pressed="true" 
                                                                       onclick='passCanndidateAssessmentScheduleId(<?php echo $assessor['assessor_id']; ?>,<?php echo $assessor['assessment_schedule_id']; ?>,<?php echo $cadidate['candidate_id']; ?>);'><i class="fa fa-plus-circle"></i></a>
                                                                 <?php }?>
                                                                 <?php if($cadidate['result_status'] == 'YES'){ ?> 
                                                                    <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/assessmentScheduleDetails?id=<?php echo $scedule['assessment_schedule_id']; ?>&idA=<?php echo $scedule['assessmentId']; ?>" data-toggle="tooltip" title="view" class="btn btn-primary btn-xs btn-link active" role="button" aria-pressed="true"><i class="fa fa-search"></i></a>
                                                                    <a href="#" data-toggle="modal" data-target="#myAssessmentDeleteModal" data-toggle="tooltip" title="delete" class="btn btn-primary btn-xs btn-link active" role="button" aria-pressed="true" 
                                                                       onclick='passAssessmentScheduleId(<?php echo $assessor['assessor_id']; ?>,<?php echo $assessor['assessment_schedule_id']; ?>);'><i class="fa fa-pencil"></i></a>
                                                                    
                                                                    <a href="#" data-toggle="modal" data-target="#myAssessmentDeleteModal" data-toggle="tooltip" title="delete" class="btn btn-primary btn-xs btn-link active" role="button" aria-pressed="true" 
                                                                       onclick='passAssessmentScheduleId(<?php echo $assessor['assessor_id']; ?>,<?php echo $assessor['assessment_schedule_id']; ?>);'><i class="fa fa-trash"></i></a>   
                                                                 <?php } ?>
                                                                </td>                                                                                           
                                                            </tr> 
                                                        <?php }
                                                    } ?>
                                                </tbody>
                                            </table>                                                                               
                                        </form>

                                        <!--  Assessment deletion modales  -->
                                        <div class="modal fade" id="myAssessmentResult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog " role="document">
                                                <div class="modal-content">
                                                    <form class="form-horizontal" action="" method="post">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                                        </div>
                                                         <div class="form-group">
                                                            <label for="subSector" class="col-sm-2 control-label">Assessment Result</label>
                                                            <div class="col-sm-10">
                                                              <input style="width: 80%" type="text" name="assessmentResult" class="form-control" id="assessmentResult" placeholder="Result">
                                                            </div>
                                                      </div>
                                                        <div class="col-sm-10">
                                                            <input type="hidden" name="idAS" class="form-control" id="idAS">
                                                        </div>
                                                        <div class="form-group">
                                                        <div class="col-sm-10">
                                                            <input type="hidden" name="scheduleId" id="scheduleId" class="form-control">
                                                        </div>
                                                            <div class="col-sm-10">
                                                            <input type="hidden" name="candidateId" id="candidateIds" class="form-control">
                                                        </div>
                                                        </div>     
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary" onclick="saveResult()">Yes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                  
                        </div>                                  
                    </div>              
                </div> 
            </div>
        </div>
    </div>
</div>

