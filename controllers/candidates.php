<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Candidates extends Controller {

    function __construct() {
        parent::__construct(); 
         Session::init();
        if(Session::get('loggedIn') == false){
            Session::destroy();
            header('location: ' .URL . 'login');
        }
        $this->view->map = 0;
    }
    function index(){
        //echo 'Register'; die();
        //$this->view->render('test/index');
        if(isset($_GET['id'])){
            $this->view->ssessmentId = $_GET['id'];
           $this->view->render1('candidates/index','candidateHeader','candidateFooter'); 
        }
       else {
           header('location:' .URL . 'assessment/assessmentList');    
       }
    }
     function candidateDetailInfo(){
        $this->view->render('candidates/candidate_detailInfo');      
    }
    
    function candidateList(){
        $candidates = $this->model->findAll();
        $this->view->candidates = $candidates;
        $this->view->render('candidates/candidateList');
    } 
    
    function candidteActivity(){
        $this->view->render('candidate/candidate_actitvity');
    }
    
    function candidateStatus(){
        $this->view->render('candidate/candidate_status');
    }
    
    function persistCandidate(){
        if (isset($_POST['submit'])){
            $assessmentType;
            //first check whether the candidate is new or not by using email address
            $searchCandidte = $this->model->findByEmail(filter_input(INPUT_POST, 'myEmail'));
            if(count($searchCandidte)>0){
                if($searchCandidte[0][first_name] == filter_input(INPUT_POST, 'myName') && 
                   $searchCandidte[0]['middle_name'] == filter_input(INPUT_POST, 'myMiddleName') && 
                   $searchCandidte[0]['last_name'] == filter_input(INPUT_POST, 'lastname') && 
                   $searchCandidte[0]['date_of_birth'] == filter_input(INPUT_POST, 'dob'))
                {
                     $assessmentType = "Exist";
                }
                else
                    exit (0);  //email can not be repeated
            }
            else{
                $assessmentType = "New can";
            }
            $image = addslashes(file_get_contents($_FILES['imageUpload']["tmp_name"]));
            $candidte = array('firstName' => filter_input(INPUT_POST, 'myName'),
                               'middleName'  => filter_input(INPUT_POST, 'myMiddleName'),
                               'lastName'    => filter_input(INPUT_POST, 'lastname'),
                               'email'       => filter_input(INPUT_POST, 'myEmail'),
                               'gender'      => filter_input(INPUT_POST, 'gender'),
                               'address'     => filter_input(INPUT_POST, 'address'),
                               'dob'         => filter_input(INPUT_POST, 'dob'),
                               'phoneNumber' => filter_input(INPUT_POST, 'phone'),
                               'image'       => $image,
                               'registrationDate'   => date('Y-m-d H:i:s'),
                               'modificationDate'   => ''
            );
            
            //echo '<pre>';
            //print_r($candidte);die();
            $lastId = $this->model->persistCandidate($candidte);
            if(is_numeric($lastId)){
                $result = $this->model->findAll();
                
                $cad_ass = array('candidateId'  =>  $lastId,
                                 'assessmentId'  => filter_input(INPUT_POST, 'id'),
                                 'assessment_type'  =>$assessmentType,
                                 'payment_status'   => "Not pay",
                                 'registration_date' => date('Y-m-d H:i:s'));
                             
               $lastInsertedId =  $this->model->persistCandidateAssessment($cad_ass);  
               header('location:' .URL . 'candidates/success');
                //insert to candidate_assessment table
            }
        }  
    }
    
    function success(){
        $this->view->render1("candidates/success");
    }
    function check_availability(){
        if(isset($_POST['username'])){
            $result=$this->model->findByEmail(filter_input(INPUT_POST, 'username'));
            if(count($result) > 0){
                //echo "<span class='status-available'> Username Available.</span>";
                echo 'OK';
            }
          else {
              echo 'NO';
          }
            
        }
    }
}
