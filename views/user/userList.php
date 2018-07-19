<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Registered <small>Candidate List</small></h1>
                <ol class="breadcrumb">
                    <li><a href="../home.php">Home</a></li>
                    <li class="active">List</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                                <div class="tools">
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>	                                
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-dataTable">
                                    <thead style="background-color: #2ECC71">
                                        <tr>
                                            <th>Id</th>
                                            <th>FName</th>
                                            <th>LName</th>
                                            <th>Email</th>
                                            <th>User Type</th>
                                            <th>Reg_Date</th>
                                            <th>Modified Date</th> 
                                            <th>View</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>FName</th>
                                            <th>LName</th>
                                            <th>Email</th>
                                            <th>User Type</th>
                                            <th>Reg_Date</th>
                                            <th>Modified Date</th>
                                            <th>View </th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php if(count($this->users)>0){ 
                                           foreach ($this->users as $user) {                                                
                                              
                                        ?>
                                          <tr>
                                            <td><?php echo $user['adminID']; ?></td>
                                            <td><?php echo $user['firstname']; ?></td>
                                            <td><?php echo $user['lastname']; ?></td>
                                            <td><?php echo $user['admin_name']; ?></td>
                                            <td><?php echo $user['user_type']; ?></td>
                                            <td><?php echo $user['registration_date']; ?></td>
                                            <td><?php echo $user['modify_date']; ?></td>
                                            <td><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/user/userProfile?id=<?php echo $user['adminID']; ?>" data-toggle="tooltip" title="view" class="btn btn-primary btn-link active" role="button" aria-pressed="true">View</a></td>
                                            <td><a href="#" data-toggle="modal" data-target="#ModalAdd"  class="btn btn-primary btn-link active" role="button" aria-pressed="true"><i class="fa fa-pencil"></i>Edit</a></td>                                        </tr>
  
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
					<label for="title" class="col-sm-2 control-label">Title</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color">
						  <option value="">Choose</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
						  <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
						  <option style="color:#000;" value="#000">&#9724; Black</option>
						  
						</select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Start date</label>
					<div class="col-sm-10">
					  <input type="text" name="start" class="form-control" id="start" readonly>
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-2 control-label">End date</label>
					<div class="col-sm-10">
					  <input type="text" name="end" class="form-control" id="end" readonly>
					</div>
				  </div>
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
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