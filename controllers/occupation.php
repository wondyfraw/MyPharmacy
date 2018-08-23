<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Occupation extends Controller {

    function __construct() {
        parent::__construct(); 
        Session::init();
        if(Session::get('loggedIn') == false){
            Session::destroy();
            header('location: ' .URL . 'login');
        }
        $this->view->map = 0;
    }
    
    function occupationRegistration(){
        $this->view->render1('occupation/occupationRegistration', 'header', 'footer');
    }
    
    function persistOccupation(){
      if(isset($_POST['submit'])){
        $data = array('sector' =>filter_input(INPUT_POST, 'sector'),
                      'subSector' => filter_input(INPUT_POST, 'subSector'),
                      'occupation' => filter_input(INPUT_POST, 'occupation'),
                      'registrationDate'  => date("Y-m-d H:i:s")
        );  
        $lastRegId = $this->model->registerOccupation($data);
        
        if(is_numeric($lastRegId)){
//             $msg = 'Successfully register occupation';
//            echo '<script type="text/javascript">alert("' . $msg . '")</script>'; 
            header('location:' .URL . 'occupation/success');
        }
      }  
    }
    
    function success(){
        $this->view->render1('occupation/success');
    }
    
    function occupationList(){
        $this->view->occupations = $this->model->findAll();
        $this->view->render1('occupation/occupationList','header' , 'footer');
    }
    
    function editOccupation($id){
        $this->model->findById($id);
    }
    
    //AJAX calll to edit occupation
    function saveEdit(){
        if(isset($_POST['occup'][0]) && isset($_POST['occup'][1]) && isset($_POST['occup'][2]) && $_POST['occup'][3]){
           $data = array(); 
           $data['id'] = $_POST['occup'][0];
           $data['sector'] = $_POST['occup'][1];
           $data['subSector'] = $_POST['occup'][2];
           $data['occupation'] = $_POST['occup'][3];
           $data['modifiedDate'] = date("Y-m-d H:i:s");
           
           $this->model->saveEdit($data);
           echo 'OK';
        }
        
    }
    
    //view occupation details 
    function occupationDetails(){
        if(isset($_GET['id'])){
         $this->view->occupation = $this->model->findById($_GET['id']);
         //echo '<pre>';
         //print_r($this->view->occupation);die();
        $this->view->render1('occupation/occupationDetails','header','footer');
        }
    }
}
