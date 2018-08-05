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

    public function supervisorRegistration() {
        $this->view->render1('supervisor/supervisorRegistration', 'header', 'footer');
    }

    public function persistSupervisor() {
        if (isset($_POST['submit'])) {
            $image = addslashes(file_get_contents($_FILES['imageUpload']["tmp_name"]));
            $data = array('firstName' => filter_input(INPUT_POST, 'myName'),
                'middleName' => filter_input(INPUT_POST, 'myMiddleName'),
                'lastName' => filter_input(INPUT_POST, 'lastname'),
                'image' => $image,
                'dob' => filter_input(INPUT_POST, 'dob'),
                'gender' => filter_input(INPUT_POST, 'gender'),
                'address' => filter_input(INPUT_POST, 'address'),
                'email' => filter_input(INPUT_POST, 'myEmail'),
                'phone' => filter_input(INPUT_POST, 'phone'),
                'phoneAlt' => filter_input(INPUT_POST, 'phoneAlt'),
                'position' => filter_input(INPUT_POST, 'position'),
                'organization' => filter_input(INPUT_POST, 'organization'),
                'regDate' => date('Y-m-d H:i:s'),
                'modDate' => ''
            );
            $result = $this->model->findByEmail(filter_input(INPUT_POST, 'myEmail'), 'supervisor');
            if (count($result) > 0) {
                header('location:' . URL . 'supervisor/supervisorRegistration?response=4');
            } else {
                $lastId = $this->model->persistSupervisor($data);
                if (is_numeric($lastId))
                    header('location:' . URL . 'supervisor/supervisorRegistration?response=3');
                else
                    header('location:' . URL . 'supervisor/supervisorRegistration?response=4');
            }
        }
    }
    
    public function supervisorList(){
        $this->view->supervisors = $this->model->findAllSupervisor();
        $this->view->render1('supervisor/supervisorList' , 'header', 'footer');
    }
    public function editSupervisor(){
        if(isset($_GET['supervisorId'])){
            
        }
        else{
            header('location' .URL . 'supervisor/supervisorList');  
        }
    }
      public function check_availability() {
        if (isset($_POST['username'][0]) && isset($_POST['username'][1])) {
            $email = $_POST['username'][0];
            $tableName = $_POST['username'][1];
            $result = $this->model->findByEmail($email, $tableName);
            if (count($result) > 0)
                echo 'OK';
            else
                echo 'NO';
        }
    }
    
    /**
     * 
     */
      function checkAvailabilityWithId(){
        if(isset($_POST['username'][0]) && isset($_POST['username'][1]) && isset($_POST['username'][2])){
            $email = $_POST['username'][0];
            $tableName = $_POST['username'][1];
            $id = $_POST['username'][2];
        }
    }

}
