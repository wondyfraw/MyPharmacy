<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * ************************************
 *  Developed by Wondyfraw Hailu 2018 *
 * ************************************
 */
?>
<div class="main-container">
    <div class="content-wrap">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Assessment Detailes</a></li>
                    <li><a data-toggle="tab" href="#menu1">Candidate Information</a></li>
                    <li><a data-toggle="tab" href="#menu2">Candidate Result</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <?php include 'assessmentInfo.php'; ?>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <?php include 'candidate_within_assessment.php'; ?>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <?php include 'candidate_result_within_assessment.php'; ?>
                    </div>
                </div>
                
                <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/assessmentList" data-toggle="tooltip" title="Back to assessment list" class="btn btn-primary btn-link active" role="button" aria-pressed="true">Back To Assessment</a>
                <?php if($this->assessments[0]['assessment_state'] == 'READY'){ ?>
                <a href="#" data-toggle="modal" data-target="#myAssessmentCloseModal" data-toggle="tooltip" title="Close session" 
                   onclick='passAssessmentId(<?php echo $this->assessments[0]['assessmet_id']; ?>);' class="btn btn-danger btn-link active" role="button" aria-pressed="true" >Close Assessment Session</a>
                <?php } ?>
                
                  <!--  Assessment deletion modales  -->
                        <div class="modal fade" id="myAssessmentCloseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <form class="form-horizontal" action="" method="post">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        Once you close the session the operation can not be undo!!Confirm please
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="idAS" class="form-control" id="idAS">
                                     </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" onclick="closeAssessmentSession()">Confirm</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>

