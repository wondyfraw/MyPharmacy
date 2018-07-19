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
                        <h3 class="panel-title">Assessment Registration Form</h3>

                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/update/<?php echo $this->assessmentsEdit[0]['assessmet_id']; ?>">
                        <table style="border-spacing: 20px;border-collapse: separate;">
                            <?php if(count($this->assessmentsEdit) >0){ ?>
                            <tr>
                            <div class="form-group" style="margin-left: 20px;">
                                <td>
                                    <label for="occupation">Occupation *</label>
                                </td>
                                <td>
                                    <select class="form-control" data-validation="required" name="occupation" id="occupation" style="font-size: 14px;width: 200%">
                                        <?php if(count($this->occupationsE)>0){ 
                                            foreach ($this->occupationsE as $occup) {
                                           
                                        ?>
                                        <option value="<?php echo $this->occupationName[0]['occupation_id'] ?>"><?php echo $this->occupationName[0]['occupation_name']; ?></option>
                                        <option value="<?php echo $occup['occupation_id']; ?>"><?php echo $occup['occupation_name']; ?></option>
                                        <?php  }}?>
<!--                                        <option value="1-For Employee">1-For Employee</option>
                                        <option value="1-Higher Education">1-Higher Education</option>
                                        <option value="1C-CLavel Teacher">1C-CLavel Teacher</option>
                                        <option value="2-Industry Worker">2-Industry Worker</option>-->
                                    </select>   
                                </td>
                            </div>
                            </tr>
                            <tr>
                            <div class="form-group"> 
                                <td>
                                    <label for="assessmentPurpose">Purpose of Assessment *</label> 
                                </td>
                                <td>
                                    <select class="form-control" id="assessmentPurpose" name="assessmentPurpose" data-validation="required" style=" font-size: 14px;width: 200%">
                                        <option value="<?php echo $this->assessmentsEdit[0]['assessment_purpose']; ?>"><?php echo $this->assessmentsEdit[0]['assessment_purpose']; ?></option>
                                        <option value="1-For Employee">1-For Employee</option>
                                        <option value="2-Higher Education">2-Higher Education</option>
                                        <option value="1C-CLavel Teacher">1C-CLavel Teacher</option>
                                        <option value="2-Industry Worker">2-Industry Worker</option>
                                        <option value="3-TVET Graduate">3-TVET Graduate</option>
                                        <option value="4-Other Candidates">4-Other Candidates</option>
                                    </select>
                                    <span id="error_assessmentPurpose" class="text-danger" ></span> 
                                <td>
                            </div>                           
                            </tr> 
                             <tr>
                            <div class="form-group"> 
                                <td>
                                    <label for="candidateCatagory">Candidate Catagory *</label> 
                                </td>
                                <td>
                                    <select class="form-control" id="candidateCatagory" name="candidateCatagory" data-validation="required" style=" font-size: 14px;width: 200%">
                                        <option value="<?php echo $this->assessmentsEdit[0]['candidate_catagory']; ?>"><?php echo $this->assessmentsEdit[0]['candidate_catagory']; ?></option>
                                        <option value="1A-A Level Teacher">1A-A Level Teacher</option>
                                        <option value="1B-B Level Teacher">1B-B Level Teacher</option>
                                        <option value="2-Industry Worker">2-Industry Worker</option>                                 
                                        <option value="3-TVET Graduate">3-TVET Graduate</option>
                                        <option value="4-Other Candidates">4-Other Candidates</option>
                                    </select>
                                    <span id="error_candidateCatagory" class="text-danger" ></span> 
                                <td>
                            </div>                           
                            </tr>
                            <tr>
                                <div class="form-group">
                                    <td>
                                        <label for="level">Level *</label> </td>
                                    <td>		
                                        <select class="form-control" id="level" name="level" data-validation="required" style="font-size: 14px;width: 200%">
                                            <option value="<?php echo $this->assessmentsEdit[0]['levels']; ?>"><?php echo $this->assessmentsEdit[0]['levels']; ?></option>
                                            <option value="Level-1">Level-1</option>
                                            <option value="Level-2">Level-2</option>
                                            <option value="Level-3">Level-3</option>
                                            <option value="Level-4">Level-4</option>
                                            <option value="Level-5">Level-5</option>
                                        </select>
                                        <span id="error_level" class="text-danger" ></span>
                                    </td>
                                    </tr>
                            <tr> 
                                <div class="form-group">
                                    <td>
                                        <label for="education">Education/Mode of TVET Delivery *</label> </td>
                                    <td>		
                                        <select class="form-control" id="education" name="education" data-validation="required" style="font-size: 14px;width: 200%">
                                            <option value="<?php echo $this->assessmentsEdit[0]['education_mode']; ?>"><?php echo $this->assessmentsEdit[0]['education_mode']; ?></option>
                                            <option value="1-Elem Grad">1-Elem Grad</option>
                                            <option value="2-High School">2-High School</option>
                                            <option value="3-Diploma">3-Diploma</option>
                                            <option value="4-Degree">4-Degree</option>
                                            <option value="5-(10+X)+ Apprenticeship">5-(10+X)+ Apprenticeship</option>
                                        </select>
                                        <span id="error_education" class="text-danger" ></span>
                                    </td>
                                </div>
                                </tr>
                                <tr>
                                  <div class="form-group">
                                    <td>
                                        <label for="occupationId">Employment Type *</label> </td>
                                    <td>		
                                        <select class="form-control" id="typeOfEmp" name="typeOfEmp" data-validation="required" style="font-size: 14px;width: 200%">
                                            <option value="<?php echo $this->assessmentsEdit[0]['employement_type']; ?>"><?php echo $this->assessmentsEdit[0]['employement_type']; ?></option>
                                            <option value="1-SelfEmployed">1-SelfEmployed</option>
                                            <option value="2-Wage Employed">Wage EMployeed</option>
                                            <option value="3-UnEmployeed">3-UnEmployeed</option>                                           
                                        </select>
                                        <span id="error_typeOfEmp" class="text-danger" ></span>
                                    </td>
                                </div>
                                </tr>
                                 <tr>
                                <div class="form-group">
                                    <td>
                                        <label for="occupationId">Type of Ownership of Training Institution *</label> </td>
                                    <td>		
                                        <select class="form-control" id="typeOfOwnership" name="typeOfOwnership" data-validation="required" style="font-size: 14px;width: 200%">
                                            <option value="<?php echo $this->assessmentsEdit[0]['ownership_type_of_institution']; ?>"><?php echo $this->assessmentsEdit[0]['ownership_type_of_institution']; ?></option>
                                            <option value="1-Public/Government">1-Public/Government</option>
                                            <option value="2-Private">2-Private</option>
                                            <option value="3-NGO">3-NGO</option>
                                        </select>
                                        <span id="error_typeOfOwnership" class="text-danger" ></span>
                                    </td>
                                    </tr>
                            <?php } ?>        
                        </table>
                            <button type="submit" name="submit" id="submit" class="btn btn-primary" style="margin-left: 100px;width: 200px;padding: 10px;margin-top:30px" onclick="test()">Submit</button>
                        <a class="btn btn-primary" href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/assessmentList" role="button" style="margin-left: 3px;width: 200px;padding: 10px;margin-top:30px">Back to Home page</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

