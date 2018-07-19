<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User extends Controller{

    function __construct() {
        parent::__construct(); 
        Session::init();
        if(Session::get('loggedIn') ==false){
            Session::destroy();
            header('location:'. URL. 'login');
        }
        $this->view->map = 1;
        
    }
    
    function createUser(){
            $this->view->render('user/createUser');     
   }
   function runQuery(){
       //echo 'call';die();
       if(isset($_POST['submit']) && isset($_POST['agree']) && $_POST['agree'] != ""){
            $firstName = filter_input(INPUT_POST, 'myName');
            $lastName = filter_input(INPUT_POST, 'lastname');
            $admusername= filter_input(INPUT_POST,'email');
            $admpassword = filter_input(INPUT_POST,'password');
            $registrationDate = date("Y-m-d H:i:s");
            $value = array('fname' => $firstName,
               'lname' => $lastName,
               'email' => $admusername,
               'pass' => $admpassword,
               'regDate' => $registrationDate,
               'sex' => filter_input(INPUT_POST, 'gender'),
               'userType' => filter_input(INPUT_POST, 'userType') ,
               'photo' =>'',
               'modify_date' => '');          
            $lastRegId = $this->model->create($value);
                      
            if(is_numeric($lastRegId) && $lastRegId != null){
                $msg = 'Successfully create the user';
                echo '<script type="text/javascript">alert("' . $msg . '")</script>'; 
                header('location:' .URL . 'userList');
        }         
        }
   }
    function userList(){
       $this->view->users= $this->model->userList();  
      $this->view->render('user/userList');  
 }
 
 function selectList(){
     $users = $this->model->userList();
 }
         function editUser(){
     
 }
 
 function userProfile(){
     if($_GET['id']){
         $id = $_GET['id'];
         $searchResult = $this->model->findUserById($id);
         $this->view->user = $searchResult[0];
         $this->view->render('user/userProfile');
     }
 }
}
