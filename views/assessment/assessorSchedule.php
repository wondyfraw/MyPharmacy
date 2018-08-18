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
                                <h3 class="panel-title">Assessment</h3>
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
                                                                     
                                    <?php }} ?>
                                    <?php if(count($this->assessments)>0){
                                      foreach ($this->assessments as $assessment) {  ?>
                                    <strong>Occupation: <?php echo $assessment['occupationName']; ?></strong><br/>
                                    <strong>Level: <?php echo $assessment['levels']; ?></strong><br/>                          
                                      <?php }} ?>
                                      
                                      <?php if($this->totalCandidates){ ?>
                                      <strong>Total Number of Candidate: <?php echo $this->totalCandidates; ?></strong>                                      
                                      <?php } ?>
                                </fieldset><br/>
                                    
                                      <table class="table table-bordered table-dataTable" style="width: 100%">
                                    <thead style="background-color: #2ECC71">
                                        <tr>
                                            <th>Assessor Full Name</th>
                                           <th>Level</th>
                                            <th>Accreditation Date</th>
                                            <th>Phone</th>                                         
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(count($this->assessors)>0){                                         
                                            foreach ($this->assessors as $assessor) {?>
                                        <tr>
                                            <td><?php echo $assessor['assessor_first_name'] . " ". $assessor['assessor_middle_name']." ".$assessor['assessor_last_name']; ?></td>  
                                            <td><?php echo $assessor['level_assessed']; ?></td> 
                                            <td><?php echo $assessor['accreditation_date']; ?></td>
                                            <td><?php echo $assessor['phone_number']; ?></td>
                                            <td><?php echo $assessor['email']; ?></td>                                                                                         
                                            <td><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/assessmentScheduleDetails?id=<?php echo $scedule['assessment_schedule_id']; ?>&idA=<?php echo $scedule['assessmentId']; ?>" data-toggle="tooltip" title="view" class="btn btn-primary btn-xs btn-link active" role="button" aria-pressed="true"><i class="fa fa-search"></i></a>
                                                                                           
                                                <a href="#" data-toggle="modal" data-target="#myAssessmentDeleteModal" data-toggle="tooltip" title="delete" class="btn btn-primary btn-xs btn-link active" role="button" aria-pressed="true" 
                                                   onclick='passAssessmentScheduleId(<?php echo $assessor['assessor_id']; ?>,<?php echo $assessor['assessment_schedule_id']; ?>);'><i class="fa fa-trash"></i></a>

                                           </td>                                                                                           
                                        </tr> 
                                        <?php }} ?>
                                </tbody>
                                </table>
                                
                                <div class="form-group">
                                    <label>Assessors</label>
                                    <select class="form-control" id="assessorId" name="assessorId" data-validation="required" style=" font-size: 14px;width: 60%">
                                        <option selected hidden> select assessor</option>
                                        <?php foreach ($this->assessorWithOccupation as $assessorW) {?>
                                        <option value="<?php echo $assessorW['assessor_id'] ;  ?>">
                                                <?php echo $assessorW['assessor_first_name'] . " ". $assessorW['assessor_middle_name']." ".$assessorW['assessor_last_name'];  ?> 
                                        </option>
                                        <?php } ?>
                                    </select>
                                    
                                    <div id="DivSpan" class="form-group"></div>
                                </div>
                                 <button type="submit" name="submit" id="submit" class="btn btn-primary" style="margin-left: 100px;width: 200px;padding: 10px;margin-top:30px" onclick='selectAssessor(<?php echo $this->assessmentScheduleId; ?>);'>
                                     <i class="sli-plus" style="margin-right: 10px;"></i>Add Assessor</button>
<!--                        <a class="btn btn-primary" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/snnprcoc/assessment/assessmentList" role="button" style="margin-left: 3px;width: 200px;padding: 10px;margin-top:30px">Back to Home page</a>-->
                                </form>
                                
                                <!--  Assessment deletion modales  -->
                        <div class="modal fade" id="myAssessmentDeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <form class="form-horizontal" action="" method="post">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete Assessor?
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="idAS" class="form-control" id="idAS">
                                     </div>
                                        <div class="col-sm-10">
                                            <input type="hidden" name="scheduleId" id="scheduleId" class="form-control">
                                        </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" onclick="deleteAssessorFromSchedule()">Yes</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                    
                
<!--            </div>  END: Content Wrap-->
            
<!--        </div>   END: Main Container -->
    </div>
</div>

