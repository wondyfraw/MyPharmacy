<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Assessor extends Controller {

    static $error =0;
            function __construct() {
        parent::__construct();
        Session::init();
        if(Session::get('loggedIn') == false){
            Session::destroy();
            header('location:' . URL. 'login');
        }
        $this->view->map = 0;
    }
    function assessorRegistration(){
        $this->view->occupations = $this->model->findAllOccupation();
        $this->view->error = self::$error;
        $this->view->render1('assessor/assessorRegistration' ,'header' , 'footer');
        //$this->view->render1('assessment/assessmentRegistration', 'header', 'footer');
    }
    function persistAssessor(){
     if(isset($_POST['submit'])){
         $image = addslashes(file_get_contents($_FILES['imageUpload']["tmp_name"]));
         $data = array('occupation' => filter_input(INPUT_POST, 'occupation'),
                       'firstName'  => filter_input(INPUT_POST, 'myName'),
                       'middleName' => filter_input(INPUT_POST, 'myMiddleName'),
                       'lastName'   => filter_input(INPUT_POST, 'lastname'),
                       'lavels'     => filter_input(INPUT_POST, 'level'),
                       'organization' => filter_input(INPUT_POST, 'organization'),
                       'image'      => $image,
                       'dob'        => filter_input(INPUT_POST, 'dob'),
                       'gender'     => filter_input(INPUT_POST, 'gender'),
                       'address'    => filter_input(INPUT_POST, 'address'),
                       'email'      => filter_input(INPUT_POST, 'myEmail'),
                       'phone'      => filter_input(INPUT_POST, 'phone'),
                       'phoneAlt'   => filter_input(INPUT_POST, 'phoneAlt'),
                       'assessorType' => filter_input(INPUT_POST, 'assessorType'),
                       'accreditationDate' => filter_input(INPUT_POST, 'accreditationDate'),
                       'regDate' => date('Y-m-d H:i:s'),
                       'modDate' => ''
                       
         );
         $result = $this->model->findByEmail(filter_input(INPUT_POST, 'myEmail'), null);
         if(count($result)>0){
             header('location:' . URL . 'assessor/assessorRegistration?response=2');
         }
         else{
            $lastId = $this->model->persistAssessor($data);           
            if(is_numeric($lastId))
               header('location:' . URL . 'assessor/assessorRegistration?response=1');
            else
               header('location:' . URL . 'assessor/assessorRegistration?response=2');   
         }
     }
    }
    
    function check_availability(){
        if(isset($_POST['username'][0]) && isset($_POST['username'][1])){
            $email = $_POST['username'][0];
            $tableName = $_POST['username'][1];
            $result = $this->model->findByEmail($email, $tableName);
            if(count($result) > 0)
                echo 'OK';
            else
                echo 'NO';
        }
    }
}
