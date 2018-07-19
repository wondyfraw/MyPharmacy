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
                        <h3 class="panel-title">Occupation Registration Form</h3>

                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?php $_SERVER['DOCUMENT_ROOT'];?>/snnprcoc/occupation/persistOccupation">
                        <table style="border-spacing: 20px;border-collapse: separate;">
                            <tr>
                            <div class="form-group">
                                <td>
                                    <label for="sector">Sector *</label>
                                </td>
                                <td>
                                    <input type="text" id="sector" name="sector" class="form-control" data-validation ="required" style="width: 300%;">
                                    <span id="error_sector" class="text-danger"></span>
                                </td>
                            </div>
                            </tr>
                            <tr>
                            <div class="form-group">
                                <td>
                                    <label for="subSector">Sub Sector *</label>
                                </td>
                                <td>
                                    <input type="text" id="subSector" name="subSector" data-validation="required" class="form-control" style="width: 300%;">
                                    <span id="error-subSector" class="text-danger"></span>
                                </td>
                            </div>
                            </tr>
                            <tr>
                            <div class="form-group">
                                <td>
                                    <label for="occupation">Occupation Name *</label>
                                </td>
                                <td>
                                    <input type="text" id="occupation" name="occupation" class="form-control" data-validation="required" style="width: 300%;">
                                    <span id="error-occupation" class="text-danger"></span>
                                </td> 
                            </div>
                            </tr>
                        </table>
                            <button type="submit" name="submit" id="submit" class="btn btn-primary" style="margin-left: 300px;width: 200px;padding: 10px;margin-top:30px" >Submit</button>
                        <a class="btn btn-primary" href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/dashboard" role="button" style="margin-left: 3px;width: 200px;padding: 10px;margin-top:30px">Back to Home page</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
