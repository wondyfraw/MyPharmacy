<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Supervisor extends Controller {

    function __construct() {
        parent::__construct(); 
        Session::init();
        if (Session::get('loggedIn') == false) {
            Session::destroy();
            header('location: ' . URL . 'login');
        }
        $this->view->map = 0;
    }

    function supervisorRegistration(){
        $this->view->render1('supervisor/supervisorRegistration' , 'header', 'footer');
    }
    
    function persistSupervisor(){
      if(isset($_POST['submit'])){
            $image = addslashes(file_get_contents($_FILES['imageUpload']["tmp_name"]));
         $data = array('occupation' => filter_input(INPUT_POST, 'occupation'),
                       'firstName'  => filter_input(INPUT_POST, 'myName'),
                       'middleName' => filter_input(INPUT_POST, 'myMiddleName'),
                       'lastName'   => filter_input(INPUT_POST, 'lastname'),
                       'image'      => $image,
                       'dob'        => filter_input(INPUT_POST, 'dob'),
                       'gender'     => filter_input(INPUT_POST, 'gender'),
                       'address'    => filter_input(INPUT_POST, 'address'),
                       'email'      => filter_input(INPUT_POST, 'myEmail'),
                       'phone'      => filter_input(INPUT_POST, 'phone'),
                       'phoneAlt'   => filter_input(INPUT_POST, 'phoneAlt'),
                       'position'     => filter_input(INPUT_POST, 'position'),
                       'organization' => filter_input(INPUT_POST, 'organization'),                                                                                                                                
                       'regDate' => date('Y-m-d H:i:s'),
                       'modDate' => ''
                       
         );
         
          $lastId = $this->model->persistAssessor($data);
          if(is_numeric($lastId)){
            header('location:' . URL . 'assessment/success');
          }
      
    }
    }
    
}

