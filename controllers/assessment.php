<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Assessment extends Controller {

    public $assessmentId = 0;

    function __construct() {
        parent::__construct();
        Session::init();
        if (Session::get('loggedIn') == false) {
            Session::destroy();
            header('location: ' . URL . 'login');
        }
        $this->view->map = 0;
//        if($_GET[id])
//            $this->view->id = $_GET['id'];
//        else
//            $this->view->id = 0; 
    }

    function assessmentRegistration() {
        $this->view->occupations = $this->model->findAllOccupation();
        $this->view->render1('assessment/assessmentRegistration', 'header', 'footer');
    }
    
    function editAssessment(){
        if (isset($_GET['assessmentId'])){
          $occupationInAssessment = array();  
          $this->view->occupationsE = $this->model->findAllOccupation();
          $occ = $this->model->findAllOccupation();
          $result = $this->model->findAssessmentById($_GET['assessmentId']);
          if(count($result) > 0){
             $occupationInAssessment = $this->model->findOccupationById($result[0]['occupationId']);
          }
          if(count($occupationInAssessment) > 0)
             $occupationInAssessment[0]['occupation_id'] = $result[0]['occupationId'];
             $this->view->occupationName = $occupationInAssessment;
          $this->view->assessmentsEdit = $result;
          $this->view->render1('assessment/editAssessment', 'header' , 'footer');
          
        }
        else
            header ('location:' . URL . 'assessment/assessmentList');
        
    }

    function persistAssessment() {
        if (isset($_POST['submit'])) {        
            $data = array('occupationId' => filter_input(INPUT_POST, 'occupation'),
                'assessmentPurpose' => filter_input(INPUT_POST, 'assessmentPurpose'),
                'candidateCatagory' => filter_input(INPUT_POST, 'candidateCatagory'),
                'level' => filter_input(INPUT_POST, 'level'),
                'education' => filter_input(INPUT_POST, 'education'),
                'typeOfEmp' => filter_input(INPUT_POST, 'typeOfEmp'),
                'typeOfOwnership' => filter_input(INPUT_POST, 'typeOfOwnership'),
                'assessmentState' => 'READY',
                'regDate' => date('Y-m-d H:i:s'),
                'closingDate' => '',
                'modDate' => '');

            $lasId = $this->model->persistAssessment($data);
            if (is_numeric($lasId)) {
                header('location:' . URL . 'assessment/success');
            }
        }
    }
    
    function update($assId = null){
        if($assId != null){
          $data = array('occupationId' => filter_input(INPUT_POST, 'occupation'),
                'assessmentPurpose' => filter_input(INPUT_POST, 'assessmentPurpose'),
                'candidateCatagory' => filter_input(INPUT_POST, 'candidateCatagory'),
                'level' => filter_input(INPUT_POST, 'level'),
                'education' => filter_input(INPUT_POST, 'education'),
                'typeOfEmp' => filter_input(INPUT_POST, 'typeOfEmp'),
                'typeOfOwnership' => filter_input(INPUT_POST, 'typeOfOwnership'),
                'assessmentId' => $assId,
                'modDate' => date('Y-m-d H:i:s'));
            //echo '<pre>';
            //print_r($data);die();
            $this->model->updateAssessment($data);
          
          header('location:' . URL . 'assessment/success');
        }
    }
            
    function success(){
        $this->view->render1('assessment/success');
    }

    function assessmentList() {
        $result = $this->model->findAll();
        $cnt = 0;
        $tempResult = array();
        for ($cnt; $cnt < count($result); $cnt++) {
            $occupation = $this->model->findOccupationById($result[$cnt]['occupationId']);
            $tempResult[$cnt] = $result[$cnt];
            $tempResult[$cnt]['occupationName'] = $occupation[0]['occupation_name'];
        }
        $this->view->assessment = $tempResult;
        $this->view->render1('assessment/assessmentList', 'header', 'footer');
    }

    function assessmentDetailes() {
        //$this->assessmentId
        if ($_GET['id']) {
            $tempResult = array();
            $this->view->id = $_GET['id'];
            $result = $this->model->findAssessmentById($_GET['id']);
            $occupation = $this->model->findOccupationById($result[0]['occupationId']);
            $tempResult[0] = $result[0];
            $tempResult[0]['occupationName'] = $occupation[0]['occupation_name'];
            $this->view->assessments = $tempResult;
            $candidateWithAssessment=$this->model->findCandidateWithAssessmentById($tempResult[0]['assessmet_id']);
            $this->view->candidates = $candidateWithAssessment;
            $this->view->render1('assessment/assessmentDetailes', 'header', 'footer');
        } else {
            header('location:' . URL . 'assessment/assessmentList');
        }
    }

    function delete(){
        if(isset($_POST['id'])){
            //echo 'Id = '.$_POST['id'];die();
            $id = filter_input(INPUT_POST, 'id');
            $cand_ass = $this->model->deleteFromCandidateAssessment($id);
            
            //delete schedule
            $schedule = $this->model->deleteAssessmentScheduleByAssessmentId($id);
            
            //delete assessment 
            $ass = $this->model->delete($id);
            if(is_numeric($ass))
              echo 'OK';
            else
                echo 'NO';
        }
    }
    
    function deleteAssessmentSchedule() {
        if(isset($_POST['id'])){
            $id = filter_input(INPUT_POST, 'id');
            $schedule = $this->model->deleteAssessmentScheduleByScheduleId($id);
            if(is_numeric($schedule))
                echo 'OK';
            else
                echo 'NO';
        }
    }
    function persistSchedule(){
        if(isset($_POST['schedule'][0]) && isset($_POST['schedule'][1])){
            $data = array('assessmetDate' => $_POST['schedule'][1],
                          'assessmentId'  => $_POST['schedule'][0],
                          'assessmentTime' => $_POST['schedule'][2]
            );
            $lastId = $this->model->persistSchedule($data);
            if(is_numeric($lastId)){
                //update assessment scheule status 
            $this->model->updateScheduleStatus($_POST['schedule'][0]);
            echo 'OK';
            }
            else
                echo 'NO';
        }
    }
    
    function assessmentSchedule(){
        if(isset($_GET['assessmentId'])){
            $result = $this->model->findScheduleByAssessmentId($_GET['assessmentId']);
            //$totalCandidate = $this->model->findTotalCandidate($_GET['assessmentId']);
            $totalCandidate = $this->totalNumberOfCandidatesWithAssessmentId($_GET['assessmentId']);
            $this->view->schedules = $result;
            $this->view->totalCandidates = $totalCandidate;           
            $this->view->assessmet = $this->model->findAssessmentById($_GET['assessmentId']);
            $this->view->render1('assessment/assessmentSchedule' , 'header' , 'footer');
        }
        else{
            header('location:' .URL. 'assessment/assessmentList');
        }
    }
    
    function updateAssessmentSchedule(){
        if(isset($_POST['schedule'][0]) && isset($_POST['schedule'][1])){
           $data = array('assessment_schedule_id' => $_POST['schedule'][0],
                         'assessment_date' => $_POST['schedule'][1],
                 'modified_date' => date('Y-m-d H:i:s'));
           
             $this->model->updateAssessmentSchedule($data);
             echo 'OK';
        }
        
    }
    
    //Assessment details 
    function assessmentScheduleDetails(){
        if(isset($_GET['id']) && isset($_GET['idA'])){
            //id = assessmentSchedule id
            //idA = assessment Id
            //$assessment = $this->model->findAssessmentById($_GET['idA']);
            $scheduleId = $_GET['id'];
            $assessmentId = $_GET['idA'];
            $assessment = $this->assessmentWithOccupation($assessmentId);
            $assessmentSchedule = $this->model->findAssessmentScheduleByScheduleId($scheduleId);
            $totalCandidate = $this->totalNumberOfCandidatesWithAssessmentId($scheduleId);
            $assessorWithOccupation = $this->model->findAssessorByOccupationName($assessment[0]['occupationName']);
            $assessor = $this->model->assessorAssignForAssessment($scheduleId);
            $supervisor = $this->model->supervisorAssignForAssessment($assessmentId);
            //echo '<pre>';
            //print_r($assessorWithOccupation);die();
            $this->view->assessments = $assessment;
            $this->view->totalCandidates = $totalCandidate;
            $this->view->schedules = $assessmentSchedule;
            $this->view->assessors = $assessor;
            $this->view->supervisor = $supervisor;
            $this->view->assessorWithOccupation = $assessorWithOccupation;
            $this->view->assessmentScheduleId = $_GET['id'];
            $this->view->allSupervisor = $this->model->findAllSupervisor();
            $this->view->render1('assessment/assessmentScheduleDetails' , 'header' , 'footer');
       }
    }
    
    //list of candidates registered for this occupation and thier result, if they take exam
    public function candidateResult() {
        if(isset($_GET['idSch']) && isset($_GET['idA'])){
        $candidates = $this->model->fidCandidatesRegisteredForeachOccupation($_GET['idSch'],$_GET['idA']);
       
        $assessmentSchedule = $this->model->findAssessmentScheduleByScheduleId($_GET['idSch']);
        $assessment = $this->assessmentWithOccupation($_GET['idA']);
        $assessor = $this->model->assessorAssignForAssessment($_GET['idSch']);
        $candidates = $this->model->fidCandidatesRegisteredForeachOccupation($_GET['idSch'],$_GET['idA']);
        $this->view->assessments = $assessment;
        $this->view->schedules = $assessmentSchedule;
        $this->view->assessors = $assessor;
        $this->view->cadidates = $candidates;
        $this->view->render1('assessment/candidateResult' , 'header' , 'footer');
        }
    }
    
    public function persistResult() {
        if(isset($_POST['results'][0]) && isset($_POST['results'][1]) && 
                isset($_POST['reslts'][2]) && isset($_POST['results'][3]))
            {
              $data = array('assessorId' => $_POST['results'][0],
                            'scheduleAssmtId' => $_POST['results'][1],
                            'candidateId'     => $_POST['results'][2],
                            'result'          => $_POST['results'][3],
                            'regDate'         => date('Y-m-d H:i:s'),
                            'modDate'         => ""
                        
              ); 
              $lastId =  $this->model->persitResult($data);
            }
    }
    
    public function deleteAssessorAssignedForAssessment() {
        if(isset($_POST['assessor'][0]) && isset($_POST['assessor'][1])){
            $result = $this->model->deleteAssessorFromSchedule($_POST['assessor'][0] , $_POST['assessor'][1]);
            
            if (is_numeric($result) && $result != 0)
                echo 'OK';
            else {
                echo 'NO';    
            }
        }
    }
    function closeAssessment(){
        if(isset($_POST['assessmentId'])){
            $this->model->closeAssessment($_POST['assessmentId']);          
            echo 'OK';
        }
    }
    function selectAssessor(){
      if(isset($_POST['assessor'][0]) && isset($_POST['assessor'][1])){
          $data = array('assessorId' => $_POST['assessor'][0],
                        'scheduleId' => $_POST['assessor'][1]
                        
          );
          $lasId = $this->model->persistAssessor($data);
          if(is_numeric($lasId))
              echo 'OK';
          else
              echo 'NO';
      }  
    }
    
     function selectSupervisor(){
      if(isset($_POST['supervisor'][0]) && isset($_POST['supervisor'][1])){
          $data = array('supervisorId' => $_POST['supervisor'][0],
                        'scheduleId' => $_POST['supervisor'][1]
                        
          );
          $lasId = $this->model->persistSupervisor($data);
          if(is_numeric($lasId))
              echo 'OK';
          else
              echo 'NO';
      }  
    }
            
    function assessmentWithOccupation($id){
        $tempResult = array();
            $this->view->id = $id;
            $result = $this->model->findAssessmentById($id);
            if(count($result) >0){
                $occupation = $this->model->findOccupationById($result[0]['occupationId']);
                $tempResult[0] = $result[0];
                $tempResult[0]['occupationName'] = $occupation[0]['occupation_name'];
            }
            return $tempResult;
    }
    
    function totalNumberOfCandidatesWithAssessmentId($id){
        $totalCandidate = $this->model->findTotalCandidate($id);
//        echo '<pre>'; print_r($totalCandidate);die();
        return $totalCandidate;
    }
}
