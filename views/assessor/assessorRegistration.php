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
                        <h3 class="panel-title">Assessor Registration Form</h3>

                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessor/persistAssessor" enctype="multipart/form-data">
                            <fieldset>
                                <legend class="panel-title">Personal Details</legend>
                            <table style="border-spacing: 20px;border-collapse: separate;">
                            <tr>
                            <div class="form-group" style="margin-left: 20px;">
                                <td>
                                    <label for="occupation">Occupation *</label>
                                </td>
                                <td>
                                    <select class="form-control" data-validation="required" name="occupation" id="occupation" style="font-size: 14px;width: 200%">
                                        <?php if(count($this->occupations)>0){ 
                                            foreach ($this->occupations as $occup) {
                                           
                                        ?>
                                        <option value="<?php echo $occup['occupation_name']; ?>"><?php echo $occup['occupation_name']; ?></option>
                                        <?php  }}?>
                                    </select>   
                                </td>
                            </div>                         
                            
                            </tr>
                            <tr>
                                <div class="form-group has-success">
                                    <td>
                                        <label for="myName">First Name *</label> </td>
                                    <td>		
                                        <input id="myName" name="myName" class="form-control form-control-success" type="text" data-validation="required"
                                               style="width: 200%">
                                        <span id="error_name" class="text-danger"></span>
                                    </td>
                                </div>
                                </tr>
                                <tr>
                                <div class="form-group">
                                    <td>
                                        <label for="myMiddleName">Middle Name *</label> </td>
                                    <td>		
                                        <input id="myMiddleName" name="myMiddleName" class="form-control" type="text" data-validation="required"
                                               style="width: 200%">
                                        <span id="error_middlename" class="text-danger" ></span>
                                    </td>
                                </div>
                                </tr>
                                <tr>
                                <div class="form-group">
                                    <td>
                                        <label for="lastname">Last Name *</label> </td>
                                    <td>		
                                        <input id="lastname" name="lastname" class="form-control" type="text" data-validation="required"
                                               style="width: 200%">
                                        <span id="error_lastname" class="text-danger" ></span>
                                    </td>
                                </div>
                                
                                   <td> 
                                <div class="fileinput fileinput-new" data-provides="fileinput" style="margin-left: 450px;
                                                                                                      margin-top: -200px;">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 75px;"></div>
                                    <div>
                                        <span class="btn btn-default btn-file" id="imageButton">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="hidden" value="" name="..."><input type="file" name="imageUpload" id="imageUpload"></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>                      
                            </td>
                                </tr>
                                 <tr>
                                <div class="form-group">
                                    <td>
                                        <label for="dob">Date of Birth * </label></td>
                                    <td> <input id="dob" name="dob" class="form-control" type="date" value="2011-08-19"
                                                style="width: 200%">
                                          <span id="error_dob" class="text-danger"></span></td>
                                </div>
                            </tr>
                             <tr>
                                <div class="form-group">
                                    <td>
                                        <label for="gender">Gender *</label> </td>
                                    <td>		
                                        <select class="form-control" name="gender" id="gender" data-validation="required" style="margin-bottom: 20px;width: 200%">
                                            <option value="M">M</option>
                                            <option value="F">F</option>
                                        </select>
                                        <span id="error_gender" class="text-danger" ></span>
                                    </td>
                                </div>
                                </tr>
                        </table>
                            </fieldset><br/>
                            <fieldset>
                                <legend class="panel-title">Address Details</legend>
                                <table style="border-spacing: 20px;border-collapse: separate;">
                                      <tr>
                                          
                                <div class="form-group">
                                    <td>
                                        <label for="address">Address * </label></td>
                                    <td> <input id="address" name="address" class="form-control" data-validation="required" type="text"
                                                style="width: 200%">
                                          <span id="error_address" class="text-danger"></span></td>
                                </div>
                                       <div class="form-group">
                                    <td>
                                        <label for="myEmail" style="margin-left: 250px;">Email address * </label></td>
                                    <td> <input id="myEmail" name="myEmail" class="form-control" type="email" onblur='checkAvailability("assessor");'
                                                style="width: 200%">
                                        <span class="text-danger" id="user-availability-status"></span>
                                          <span id="error_email" class="text-danger"></span></td>
                                </div>
                                </tr>
                                <tr>
                                    <div class="form-group">
                                    <td>
                                        <label for="phone">Phone Number * </label></td>
                                    <td> <input id="phone" name="phone" class="form-control" data-validation="required" type="number"
                                                style="width: 200%">
                                          <span id="error_phone" class="text-danger"></span></td>
                                </div>
                                <div class="form-group">
                                    <td>
                                        <label for="phoneAlt" style="margin-left: 250px">Alter Phone * </label></td>
                                    <td> <input id="phone" name="phoneAlt" class="form-control" data-validation="required" type="number"
                                                style="width: 200%">
                                          <span id="error_phoneAlt" class="text-danger"></span></td>
                                </div>
                                </tr>
                                </table>
                            </fieldset>  <br/> 
                            
                            <fieldset>
                                <legend class="panel-title">Accreditation Details</legend> 
                                <table style="border-spacing: 20px;border-collapse: separate;">
                                   <tr>                              
                                <div class="form-group">
                                    <td>
                                        <label for="level">Level *</label> </td>
                                    <td>		
                                        <select class="form-control" id="level" name="level" data-validation="required" style="font-size: 14px;width: 200%;">
                                            <option value="Level-1">Level-1</option>
                                            <option value="Level-2">Level-2</option>
                                            <option value="Level-3">Level-3</option>
                                            <option value="Level-4">Level-4</option>
                                            <option value="Level-5">Level-5</option>
                                        </select>
                                        <span id="error_level" class="text-danger" ></span>
                                    </td>
                                </div>
                                   <div class="form-group">
                                     <td>
                                         <label for="organization" style="margin-left: 250px">Organization * </label></td>
                                        <td> <input id="organization" name="organization" class="form-control" data-validation="required" type="text"
                                                    style="width: 200%">
                                            <span id="error_organization" class="text-danger"></span></td>
                                       
                                        </div>
                                    </tr>
                                    <tr>
                                     <div class="form-group">
                                    <td>
                                        <label for="assessorType">Assessor Type * </label></td>
                                    <td> <input id="assessorType" name="assessorType" class="form-control" type="text" 
                                                style="width: 200%">
                                        <span class="text-danger" id="user-availability-status1"></span>
                                          <span id="error_assessorT" class="text-danger"></span></td>
                                </div>
                                    <div class="form-group">
                                    <td>
                                        <label for="accreditationDate" style="margin-left: 250px;">Accreditation Date * </label></td>
                                    <td> <input id="accreditationDate" name="accreditationDate" class="form-control" type="date" value="2011-08-19"
                                                style="width: 200%">
                                          <span id="error_accred" class="text-danger"></span></td>
                                </div>
                            </tr>
                                </table>
                            </fieldset>   
                            <button type="submit" ons name="submit" id="submit" class="btn btn-primary" style="margin-left: 100px;width: 200px;padding: 10px;margin-top:30px">Submit</button>
                        <a class="btn btn-primary" href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/" role="button" style="margin-left: 3px;width: 200px;padding: 10px;margin-top:30px">Back to Home page</a>
                        <?php if($this->error == 1) {?>
                        <div class="alert alert-danger">
                            <ul>
                                <li>
                                    Email address must be unique
                                </li>
                            </ul>
                        </div>
                        <?php } ?>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!--var arr = document.URL.match(/room=([0-9]+)/)
var room = arr[1];
function getParam(param){
  return new URLSearchParams(window.location.search).get(param);
}
var arr = document.URL.match(/room=([0-9]+)/)
var room = arr[1];
var myParam = location.search.split('myParam=')[1] ? location.search.split('myParam=')[1] : 'myDefaultValue';


https://stackoverflow.com/questions/979975/how-to-get-the-value-from-the-get-parameters-->
