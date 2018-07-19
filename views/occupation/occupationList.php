<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Registered <small>Occupation List</small></h1>
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
                                <h3 class="panel-title">Occupation</h3>
                                <div class="tools">
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>	                                
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-dataTable">
                                    <thead style="background-color: #2ECC71">
                                        <tr>
                                            <th>Sector</th>
                                            <th>Sub Sector</th>
                                            <th>Occupation</th>
                                            <th>Reg_Date</th>
                                            <th>Modified Date</th> 
                                            <th>Action</th>
<!--                                            <th>Action</th>-->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>Sector</th>
                                            <th>Sub Sector</th>
                                            <th>Occupation</th>
                                            <th>Reg_Date</th>
                                            <th>Modified Date</th> 
                                            <th>Action</th>
<!--                                            <th>Action</th>-->
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php if(count($this->occupations)>0){ 
                                           foreach ($this->occupations as $occupation) {                                                
                                              $encod = json_encode($occupation);
                                        ?>
                                          <tr>                                        
                                            <td><?php echo $occupation['sector']; ?></td>
                                            <td><?php echo $occupation['sub_sector']; ?></td>
                                            <td><?php echo $occupation['occupation_name']; ?></td>
                                            <td><?php echo $occupation['registration_date']; ?></td>
                                            <td><?php echo $occupation['modification_date']; ?></td>
                                            <td><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/occupation/occupationDetails?id=<?php echo $occupation['occupation_id']; ?>" data-toggle="tooltip" title="view" class="btn btn-primary btn-link active" role="button" aria-pressed="true"><i class="fa fa-search"></i></a>
                                              <a href="#" data-toggle="modal" data-target="#ModalAdd" data-toggle="tooltip" title="Edit" class="btn btn-primary btn-link active" role="button" aria-pressed="true" 
                                                         onclick='openT(<?php echo json_encode($occupation); ?>);'><i class="fa fa-pencil"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#ModalAdd" data-toggle="tooltip" title="delete" class="btn btn-primary btn-link active" role="button" aria-pressed="true" 
                                                         onclick='openT(<?php echo json_encode($occupation); ?>);'><i class="fa fa-trash"></i></a>
                                            </td>
<!--                                            <td><a href="#" data-toggle="modal" data-target="#ModalAdd" data-toggle="tooltip" title="Edit" class="btn btn-primary btn-link active" role="button" aria-pressed="true" 
                                                         onclick='openT(<?php echo json_encode($occupation); ?>);'><i class="fa fa-pencil"></i>Edit</a></td> 
                                          </tr>-->
  
                                        <?php }}?>
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
                            </div>
                        </div>
                    </div>
                    
                </div>
                    
                
            </div>  <!--END: Content Wrap-->
            
        </div>  <!-- END: Main Container -->