<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<section class="action-area-mini" style="margin-top: 100px;">
    <div class="foto-pattern">
        <ul class="container breadcrumb">
            <li><a href="<?php echo URL; ?>dashboard/">Home</a> <span class="divider">//</span></li>
            <li class="active">Registration</li>                
        </ul>
    </div> 
</section>

<div id="contain_all" style="width:88%; margin-left:auto; margin-right:auto;">
    <section class="action-area" style="height:1000px; background-color: #fff;">
        <div style="padding:20px;width:100%; float:left;">
            <form method="POST" id="myform" action="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/candidates/persistCandidate" enctype="multipart/form-data">
                <fieldset >
                    <legend>Candidate Registration</legend>
                    <table>
                        <tr>
                        <div class="form-group has-success">
                            <td>
                                <label for="myName">First Name *</label> </td>
                            <td>		
                                <input id="myName" name="myName" class="form-control form-control-success" type="text" data-validation="required">
                                <span id="error_name" class="text-danger"></span>
                            </td>
                        </div>
                        </tr>
                        <tr>
                        <div class="form-group">
                            <td>
                                <label for="myMiddleName">Middle Name *</label> </td>
                            <td>		
                                <input id="myMiddleName" name="myMiddleName" class="form-control" type="text" data-validation="required">
                                <span id="error_middlename" class="text-danger" ></span>
                            </td>
                        </div>
                        </tr>
                        <tr>
                        <div class="form-group">
                            <td>
                                <label for="lastname">Last Name *</label> </td>
                            <td>		
                                <input id="lastname" name="lastname" class="form-control" type="text" data-validation="required">
                                <span id="error_lastname" class="text-danger" ></span>
                            </td>
                        </div>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" name="id" id="id" value="<?php echo $this->ssessmentId; ?>" >
                            </td>
                        </tr>
                        <tr>
                        <div class="form-group">
                            <td>
                                <label for="address">Date of Birth * </label></td>
                            <td> <input id="dob" name="dob" class="form-control" type="date" value="2011-08-19">
                                <span id="error_dob" class="text-danger"></span></td>
                        </div>
                        </tr>
                        <tr>
                        <div class="form-group">
                            <td>
                                <label for="myEmail">Email address * </label></td>
                            <td> <input id="myEmail" name="myEmail" class="form-control" type="email" onblur='checkAvailability();'>
                                <span class="text-danger" id="user-availability-status"></span>
                                <span id="error_email" class="text-danger"></span></td>
                        </div>
                        </tr>	                               

                        <tr>
                        <div class="form-group">
                            <td>
                                <label for="gender">Gender *</label> </td>
                            <td>		
                                <select class="form-control" name="gender" id="gender" data-validation="required" style="margin-bottom: 20px;">
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                </select>
                                <span id="error_gender" class="text-danger" ></span>
                            </td>
                        </div>
                        </tr>
                        <tr>
                        <div class="form-group">
                            <td>
                                <label for="phone">Address * </label></td>
                            <td> <input id="address" name="address" class="form-control" data-validation="required" type="text">
                                <span id="error_address" class="text-danger"></span></td>
                        </div>
                        </tr>

                        <tr>
                        <div class="form-group">
                            <td>
                                <label for="phone">Phone Number * </label></td>
                            <td> <input id="phone" name="phone" class="form-control" data-validation="required" type="number">
                                <span id="error_phone" class="text-danger"></span></td>
                        </div>
                        <td> 
                            <div class="fileinput fileinput-new" data-provides="fileinput" style="margin-left: 450px;
                                 margin-top: -400px;">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 75px;"></div>
                                <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="hidden" value="" name="..."><input type="file" name="imageUpload" id="imageUpload"></span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </td>
                        </tr>
                    </table>
                </fieldset>

                <!--                        <fieldset>
                                            <legend>
                                                Assessment Details
                                            </legend>
                                            <table>
                                                   <tr>
                                                <div class="form-group">
                                                    <td>
                                                        <label for="occupationId">Purpose of Assessment *</label> </td>
                                                    <td>		
                                                        <select class="form-control" id="assessmentPurpose" data-validation="required" style="margin-bottom: 20px;width: 180px">
                                                            <option>1-For Employee</option>
                                                            <option>1-Higher Education</option>
                                                            <option>1C-CLavel Teacher</option>
                                                            <option>2-Industry Worker</option>
                                                            <option>3-TVET Graduate</option>
                                                            <option>4-Other Candidates</option>
                                                        </select>
                                                        <span id="error_lavel" class="text-danger" ></span>
                                                    </td>
                                                    <td>
                                                   
                                                <div class="form-group">
                                                    <td>
                                                        <label for="occupationId" style="margin-left: 150px">Education *</label> </td>
                                                    <td>		
                                                        <select class="form-control" id="education" data-validation="required" style="margin-bottom: 20px;width: 180px">
                                                            <option>1-Elem Grad</option>
                                                            <option>2-High School</option>
                                                            <option>3-Diploma</option>
                                                            <option>4-Degree</option>
                                                            <option>5-(10+X)+ Apprenticeship</option>
                                                        </select>
                                                        <span id="error_lavel" class="text-danger" ></span>
                                                    </td>
                                                </div>
                                                </tr>
                                                <tr>
                                                <div class="form-group">
                                                    <td>
                                                        <label for="occupationId">Type of Ownership *</label> </td>
                                                    <td>		
                                                        <select class="form-control" id="typeOfOwnership" data-validation="required" style="margin-bottom: 20px;width: 180px">
                                                            <option>1-Public/Government</option>
                                                            <option>2-Private</option>
                                                            <option>3-NGO</option>
                                                        </select>
                                                        <span id="error_typeOfOwnership" class="text-danger" ></span>
                                                    </td>
                                                    <td>
                                                   
                                                <div class="form-group">
                                                    <td>
                                                        <label for="occupationId" style="margin-left: 150px">Type of Employment *</label> </td>
                                                    <td>		
                                                        <select class="form-control" id="typeOfEmp" data-validation="required" style="margin-bottom: 20px;width: 180px">
                                                            <option>1-Public/Government</option>
                                                            <option>2-Private</option>
                                                            <option>3-NGO</option>                                           
                                                        </select>
                                                        <span id="error_typeOfEmp" class="text-danger" ></span>
                                                    </td>
                                                </div>
                                                </tr>                                                          
                                                </table><br/>
                                                <button type="submit" class="btn btn-primary" style="margin-left: 400px;background: #003366;" onclick="test()">Submit</button>
                                        </fieldset>--><br/>
                <button type="submit" name="submit" id="submit" class="btn btn-primary" style="margin-left: 400px;background: #003366;">Submit</button>
                <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/assessmentDetailes?id=<?php echo $this->ssessmentId; ?>" data-toggle="tooltip" title="Back to assessment details" class="btn btn-primary btn-link active" role="button" aria-pressed="true">Back To Assessment</a>


            </form>
        </div>
    </section>
</div>