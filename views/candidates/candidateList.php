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
                                            <th>FName</th>
                                            <th>MName</th>
                                            <th>LName</th>
                                            <th>Email</th> 
                                            <th>Gender</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(count($this->candidates)>0){                                         
                                            foreach ($this->candidates as $candidate) {?>
                                        <tr>
                                            <td><?php echo $candidate['first_name']; ?></td>  
                                            <td><?php echo $candidate['middle_name']; ?></td> 
                                            <td><?php echo $candidate['last_name']; ?></td> 
                                            <td><?php echo $candidate['email']; ?></td> 
                                            <td><?php echo $candidate['gender']; ?></td>
                                            <td><?php echo $candidate['address']; ?></td>
                                            <td><?php echo $candidate['phone_number']; ?></td>
                                            <td><a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessment/assessmentDetailes?id=<?php echo $candidate['candidate_id']; ?>" data-toggle="tooltip" title="view" class="btn btn-primary btn-link active" role="button" aria-pressed="true"><i class="fa fa-search"></i></a>
                                              <a href="#" data-toggle="modal"  data-toggle="tooltip" title="Edit" class="btn btn-primary btn-link active" role="button" aria-pressed="true" 
                                                         ><i class="fa fa-pencil"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#ModalAdd" data-toggle="tooltip" title="delete" class="btn btn-primary btn-link active" role="button" aria-pressed="true" 
                                                         onclick='openT(<?php echo json_encode($occupation); ?>);'><i class="fa fa-trash"></i></a>
                                                 <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/candidates/index?id=<?php echo $candidate['candidate_id']; ?>"   data-toggle="tooltip" title="Add Candidate Result" class="btn btn-primary btn-link active" role="button" 
                                                    aria-pressed="true"><i class="fa fa-plus"></i></a>
                                            </td>
                                        </tr> 
                                        <?php }} ?>
                                </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    
                </div>
                    
                
            </div>  <!--END: Content Wrap-->
            
        </div>  <!-- END: Main Container -->

