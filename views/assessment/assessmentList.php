<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<div class="main-container">    <!-- START: Main Container -->

    <div class="page-header">
        <h1>Registered <small>Assessment List</small></h1>
        <ol class="breadcrumb">
            <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/snnprcoc/dashboard">Home</a></li>
            <li class="active">List</li>
        </ol>
    </div>

    <div class="content-wrap">  <!--START: Content Wrap-->

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
                        <table class="table table-bordered table-dataTable">
                            <thead style="background-color: #2ECC71">
                                <tr>
                                    <th>Purpose</th>
                                    <th>Candidate Catagory</th>
                                    <th>Occupation</th>
                                    <th>Level</th>
                                    <th>Education Mode</th> 
                                    <th>Employment Type</th>
                                    <th>Ownership</th>
<!--                                            <th>Num Cand</th>-->
                                    <th>Action</th>
                                    <th>Schedule</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                if (count($this->assessment) > 0) {
                                    foreach ($this->assessment as $assessment) {
                                        $encod = json_encode($assessment);
                                        ?>
                                        <tr>                                        
                                            <td><?php echo $assessment['assessment_purpose']; ?></td>
                                            <td><?php echo $assessment['candidate_catagory']; ?></td>
                                            <td><?php echo $assessment['occupationName']; ?></td>
                                            <td><?php echo $assessment['levels']; ?></td>
                                            <td><?php echo $assessment['education_mode']; ?></td>
                                            <td><?php echo $assessment['employement_type']; ?></td>
                                            <td><?php echo $assessment['ownership_type_of_institution']; ?></td>
        <!--                                            <td>0</td>-->
        <!--                                            <td><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/occupation/occupationDetails?id=<?php echo $assessment['assessmet_id']; ?>" data-toggle="tooltip" title="view" class="btn btn-primary btn-link active" role="button" aria-pressed="true">View</a></td>-->
                                            <td><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/assessmentDetailes?id=<?php echo $assessment['assessmet_id']; ?>" data-toggle="tooltip" title="view" class="btn btn-primary btn-xs btn-link active" role="button" aria-pressed="true"><i class="fa fa-search"></i></a>
                                               <?php if($assessment['assessment_state'] == 'READY') {?> 
                                                
                                                <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/editAssessment?assessmentId=<?php echo $assessment['assessmet_id']; ?>" 
                                                   data-toggle="tooltip" title="Edit" class="btn btn-primary btn-xs btn-link active" role="button" aria-pressed="true" ><i class="fa fa-pencil"></i></a>                                             
                                                <a href="#" data-toggle="modal" data-target="#myAssessmentDeleteModal" data-toggle="tooltip" title="delete" class="btn btn-primary btn-xs btn-link active" role="button" aria-pressed="true" 
                                                   onclick='passAssessmentId(<?php echo $assessment["assessmet_id"]; ?>);'><i class="fa fa-trash"></i></a>
                                                <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/candidates/index?id=<?php echo $assessment['assessmet_id']; ?>"   data-toggle="tooltip" title="Add Candidate" class="btn btn-primary btn-xs btn-link active" role="button" 
                                                   aria-pressed="true"><i class="fa fa-plus"></i></a>
                                            </td>
                                            <?php } ?>
                                            <td>
                                              <?php if(($assessment['assessment_state'] == 'READY') && $assessment['schedule_status'] == 'NO') {?>  
                                                <a href="#" data-toggle="modal" data-target="#myAssessmentSchesuleAdd" data-toggle="tooltip" title="Add Assessment Schedule" class="btn btn-primary btn-xs btn-link active" role="button" aria-pressed="true" 
                                                   onclick='passAssessmentIdS(<?php echo $assessment["assessmet_id"]; ?>);'><i class="fa fa-plus"></i></a>
                                              <?php } ?>
                                                <?php if(($assessment['assessment_state'] == 'READY') && ($assessment['schedule_status'] == 'YES')){ ?>
                                              <a href="<?php  $_SERVER['DOCUMENT_ROOT'];?>/snnprcoc/assessment/assessmentSchedule?assessmentId=<?php echo $assessment['assessmet_id']; ?>" data-toggle="tooltip" title="View" class="btn btn-primary btn-xs btn-link active" role="button" aria-pressed="true" ><i class="fa fa-search"></i></a>  
<!--                                              <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-primary btn-link active" role="button" aria-pressed="true" ><i class="fa fa-trash"></i></a>      -->
                                              <?php } ?>
                                            </td>
                                              
                                        <?php }
                                    } ?>
                            </tbody>
                        </table>

                        <!-- Modal -->
                        <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form class="form-horizontal" method="POST" action="">

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Add Event</h4>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="sector" class="col-sm-2 control-label">Sector</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="sector" class="form-control" id="sector" placeholder="Sector">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="subSector" class="col-sm-2 control-label">Sub Sector</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="subSector" class="form-control" id="subSector" placeholder="Sub Sector">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="occupation" class="col-sm-2 control-label">Occupation</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="occupation" class="form-control" id="occupation" placeholder="Occupation">
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" name="id" class="form-control" id="id">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" onclick="save()">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

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
                                        Are you sure you want to delete Assessment?
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="idAS" class="form-control" id="idAS">
                                     </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" onclick="deleteAssessment()">Yes</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Assessment schedule momodal -->
                         <div class="modal modal-success fade" id="myAssessmentSchesuleAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <form class="form-horizontal" action="" method="post">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Assessment Schedule Date</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Schedule date -->
                                       
<!--                                         <div class="form-group">
					<label for="assessmentDate" class="col-sm-2 control-label" data-sideBySide="1">Assessment Date </label>
					<div class="col-sm-10 input-group date dateTime-picker">
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
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="idA" class="form-control" id="idA">
                                     </div>                   
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" onclick="saveAssessmentSchedule()">Save</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>    
                                    </div>                       
                                </div>
                             </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>  <!--END: Content Wrap-->

</div>  <!-- END: Main Container -->