<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="main-container">
    <div class="content-wrap">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Assessment Schedule Form</h3>

                    </div>
                    <div class="panel-body">
                       
                         <table class="table table-bordered table-dataTable" style="width: 100%">
                                    <thead style="background-color: #2ECC71">
                                        <tr>
                                            <th>Assessment Date</th>
                                           <th>Time</th>
                                            <th>N.Candidates</th>
                                            <th>Action</th>                                         
<!--                                         <th>Assessor Schedule</th>
                                            <th>Supervisor Schedule</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(count($this->schedules)>0){                                         
                                            foreach ($this->schedules as $scedule) {?>
                                        <tr>
                                            <td><?php echo $scedule['assessment_date']; ?></td>  
                                            <td><?php echo $scedule['assessment_time']; ?></td> 
<!--                                            <td><?php echo $this->totalCandidates[0]['COUNT(*)']; ?></td> -->
                                            <td><?php echo $this->totalCandidates; ?></td>
                                            <td><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/assessmentScheduleDetails?id=<?php echo $scedule['assessment_schedule_id']; ?>&idA=<?php echo $scedule['assessmentId']; ?>" data-toggle="tooltip" title="view" class="btn btn-primary btn-xs btn-link active" role="button" aria-pressed="true"><i class="fa fa-search"></i></a>
                                               <?php if(count($this->assessmet) > 0 ) {
                                                   if($this->assessmet[0]['assessment_state'] == 'READY'){?>
                                                <a href="#" data-toggle="modal"  data-target="#myAssessmentSchesuleEdit" data-toggle="tooltip" title="Edit" class="btn btn-primary btn-xs btn-link active" role="button" aria-pressed="true" 
                                                         onclick='passAssessmentSchedule(<?php echo json_encode($scedule); ?>);'><i class="fa fa-pencil"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#ModalAdd" data-toggle="tooltip" title="delete" class="btn btn-primary btn-xs btn-link active" role="button" aria-pressed="true" 
                                                         onclick='openT(<?php echo json_encode($scedule); ?>);'><i class="fa fa-trash"></i></a>

                                            </td>
                                            
                                                   <?php  }}?>
                                        </tr> 
                                        <?php }} ?>
                                </tbody>
                                </table>
                        
                            <!-- Assessment schedule momodal -->
                         <div class="modal modal-success fade" id="myAssessmentSchesuleEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <form class="form-horizontal" action="" method="post">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Assessment Schedule Date</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Schedule date -->
                                        
<!--                                </div> -->
<!--                                   <div class="form-group">
					<label for="assessmentDate" class="col-sm-2 control-label" data-sideBySide="1">Assessment Date </label>
					<div class="col-sm-10 input-group date dateTime-picker"  data-date-format="mm-dd-yyyy">
                                            <input type="text" name="assessmentDate" class="form-control" id="assessmentDate">
                                            <span class="input-group-addon">
                                                <span class="sli-calendar"></span>
                                            </span>
					  <span id="error_assessmentDate" class="text-danger"></span>
                                        </div>
				  </div>-->
                                     <div class="form-group">
                                    <label for="assessmentDate" class="col-sm-2 control-label" data-sideBySide="1">Assessment Date</label>
                                    <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                                        <input type="text" name="assessmentDate" id="assessmentDate" class="form-control" placeholder="Select Date">
                                        <div class="input-group-addon">
                                            <span class="sli-calendar"></span>
                                        </div>
                                        <span id="error_assessmentDate" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label for="assessmentTime" class="col-sm-2 control-label" data-sideBySide="1">Assessment Time</label>  
                                  <div class="input-group bootstrap-timepicker timepicker">
                                      <input type="text" class="form-control time-picker" name="assessmentTime" id="assessmentTime">
                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                </div>
<!--                                       <div class="form-group">
                                            <label for="assessmentTime" class="col-sm-2">Assessment Time *</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="2012-05-15 21:05" id="datetimepicker">
                                                <span id="error_assessmentTime" class="text-danger"></span>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="idAS" class="form-control" id="idAS">
                                    </div>     
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" onclick="updateAssessmentSchedule()">Save</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>    
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
