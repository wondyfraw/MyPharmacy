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
                        <h3 class="panel-title">Assessment Schedule Form</h3>

                    </div>
                    <div class="panel-body">
                       
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
                                                                                            
                                                <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessor/editAssessor?assessrId=<?php echo $assessor['assessor_id']; ?>" 
                                                   data-toggle="tooltip" title="Edit" class="btn btn-primary btn-xs btn-link active" role="button" aria-pressed="true" ><i class="fa fa-pencil"></i></a>  
                                                <a href="#" data-toggle="modal" data-target="#ModalAdd" data-toggle="tooltip" title="delete" class="btn btn-primary btn-xs btn-link active" role="button" aria-pressed="true" 
                                                         onclick='openT(<?php echo json_encode($scedule); ?>);'><i class="fa fa-trash"></i></a>

                                           </td> 
                                        </tr> 
                                        <?php }} ?>
                                </tbody>
                                </table>
                        
                          <!--  Assessor deletion modales  -->
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
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" onclick="deleteAssessment()">Yes</button>
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


