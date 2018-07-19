<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 **************************************
 *  Developed by Wondyfraw Hailu 2018 *
 * ************************************
 */
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Details</h3>

    </div>
    <div class="panel-body">
        
    <?php if(count($this->assessments)>0){ ?>
    <!-- BEGIN TIMELINE -->
                                <ul class="flik-timeline flik-timeline-1" data-scroll-effect="slide-down-up-effect">
                                    
                                    <li class="event" data-date="<?php echo $this->assessments[0]['registration_date']; ?>">
                                        <h3>Assessment Registration</h3>
                                        <p class="event-content" data-date="30 June 2016">
                                            Focal person insert assessment
                                        </p>
                                    </li>
                                    
                                    <li class="event" data-date="<?php echo $this->assessments[0]['registration_date']; ?>">
                                        <h3>Assessment details</h3>
                                        <p class="event-content" data-date="29 June 2016">
                                            Occupation Name: <strong><?php echo $this->assessments[0]['occupationName']; ?></strong>
                                        <p>
                                            Purpose of Assessment: <strong><?php echo $this->assessments[0]['assessment_purpose']; ?></strong> 
                                        </p>
                                        <p>
                                            Candidate Catagory: <strong><?php echo $this->assessments[0]['candidate_catagory']; ?></strong>
                                        </p>
                                        <p>
                                            Level: <strong><?php echo $this->assessments[0]['levels']; ?></strong>
                                        </p>
                                        <p>
                                            Education/Mode of TVET Delivery : <strong><?php echo $this->assessments[0]['education_mode']; ?></strong>
                                        </p>
                                        <p>
                                            Employment Type: <strong><?php echo $this->assessments[0]['employement_type']; ?></strong>
                                        </p>
                                        <p>
                                            Type of Ownership of Training Institution: <strong><?php echo $this->assessments[0]['ownership_type_of_institution']; ?></strong>
                                        </p>
                                    </li>
                                    
                                    <li class="event">
                                        <h3>Assessment State</h3>
                                        <p class="event-content" data-date="28 June 2016">
                                            State: <strong><?php echo $this->assessments[0]['assessment_state']; ?></strong>
                                        </p>
                                        
<!--                                        <ul class="list-inline lightgallery" data-mode="lg-slide-skew-rev" loop="1">
                                            <li data-src="demo/photos/img-wall-01.jpg"> 
                                                <a href><img src="demo/photos/img-wall-01.jpg" alt="" style="width: 100px;"></a>
                                            </li>
                                            <li data-src="demo/photos/img-wall-02.jpg">
                                                <a href><img src="demo/photos/img-wall-02.jpg" alt="" style="width: 100px;"></a>
                                            </li>
                                            <li data-src="demo/photos/img-wall-03.jpg">
                                                <a href><img src="demo/photos/img-wall-03.jpg" alt="" style="width: 100px;"></a>
                                            </li>
                                        </ul>-->
                                    </li>
                                    
                                    <li class="event" data-date="<?php echo $this->assessments[0]['closing_date']; ?>">
                                        <h3>Assessment Closed Date</h3>
                                        <p class="event-content" data-date="<?php echo $this->assessments[0]['closing_date']; ?>">
                                            <?php echo $this->assessments[0]['closing_date']; ?>
                                        </p>
                                    </li>                                                                     
                                    
                                </ul> <!-- END TIMELINE -->
    <?php   }?>
    </div>
</div>
