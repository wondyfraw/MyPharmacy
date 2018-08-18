<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$result = $this->db->select('SELECT role FROM user WHERE id = :id', array(':id' => $id));
class Assessment_Model extends Model{

    function __construct() {
        parent::__construct();  
    }

    function findAll(){
        return $this->db->select("select * from assessmet");
    }
    
    function findAllOccupation(){
        return $this->db->select("select * from occupation");
    }
    
    function persistAssessment($data){
        $lastId = $this->db->insert('assessmet',array(
            'occupationId'                   => $data['occupationId'],
            'assessment_purpose'             => $data['assessmentPurpose'],
            'candidate_catagory'             => $data['candidateCatagory'],
            'levels'                         => $data['level'],
            'education_mode'                 => $data['education'],
            'employement_type'               => $data['typeOfEmp'],
            'ownership_type_of_institution'  => $data['typeOfOwnership'],
            'assessment_state'               => $data['assessmentState'],
            'registration_date'              => $data['regDate'],
            'closing_date'                   => $data['closingDate'],
            'schedule_status'                => 'NO',
            'modified_date'                  => $data['modDate']
         ));
         return $lastId; 
    }
    
    function findOccupationById($occupId){
        return $this->db->select("select occupation_name from occupation where occupation_id = '".$occupId."'");
    }
    
    function findAssessmentById($id){
        return $this->db->select("select * from assessmet where assessmet_id = '".$id."'");
    }
    
    function findCandidateWithAssessmentById($id){
        return $this->db->select('select * from assessmet ,candidate ,candidate_assessment  where 
                                   assessmet.assessmet_id = candidate_assessment.assessmentId and candidate.candidate_id = candidate_assessment.candidateId');
    }
    
    function delete($id){
        $result = $this->db->select("select * from assessmet where assessmet_id = '".$id."'");
        if(count($result)>0){
            return $this->db->delete('assessmet', "assessmet_id = '".$id."'");
        }
        else{
            return false;
        }
    }
    
    public function deleteAssessorFromSchedule($assessorId=null, $scheuleId =null) {
        if($assessorId != null && $scheuleId != null){
            return $this->db->delete('assessor_assessment_schedule', "assessment_schedule_id = '".$scheuleId."' and assessor_id = '".$assessorId."'");
        }
        
    }
    /**
     * 
     * @param type $assessmentId
     */
    public function deleteAssessmentScheduleByAssessmentId($assessmentId){
        $result = $this->db->select("select * from assessment_schedule where assessmentId = '".$assessmentId."'");
        
        //delete assessor_assessment_schelue
        if(count($result) > 0){
          $assessorSchedule = $this-> findAssessorAssignedToScheduleByScheduleId($result[0]['assessment_schedule_id']); 
          $supervisorSchedule = $this->findSupervisorAssignedToScheduleByScheduleId($result[0]['assessment_schedule_id']);
          if(count($assessorSchedule) > 0)
              $assessor = $this->db->delete('assessor_assessment_schedule' , "assessment_schedule_id = '".$assessorSchedule[0]['assessment_schedule_id']."'");
        
          if(count($supervisorSchedule) >0)
               $this->db->delete('supervisor_assessment_schedule' , "assessment_schedule_id = '".$supervisorSchedule[0]['assessment_schedule_id']."'");
        
           return $this->db->delete('assessment_schedule' ,"assessment_schedule_id = '".$result[0]['assessment_schedule_id']."'");
        }
    }
    public function deleteAssessmentScheduleByScheduleId($scheduleId) {
        $result = $this->db->select("select * from assessment_schedule where assessment_schedule_id = '".$scheduleId."'");
        
        //delete assessor_assessment_schelue
        if(count($result) > 0){
          $assessorSchedule = $this-> findAssessorAssignedToScheduleByScheduleId($scheduleId); 
          $supervisorSchedule = $this->findSupervisorAssignedToScheduleByScheduleId($scheduleId);
          if(count($assessorSchedule) > 0)
              $assessor = $this->db->delete('assessor_assessment_schedule' , "assessment_schedule_id = '".$assessorSchedule[0]['assessment_schedule_id']."'");
        
          if(count($supervisorSchedule) >0)
               $this->db->delete('supervisor_assessment_schedule' , "assessment_schedule_id = '".$supervisorSchedule[0]['assessment_schedule_id']."'");
        
           return $this->db->delete('assessment_schedule' ,"assessment_schedule_id = '".$scheduleId."'");
        } 
    }        
    function updateAssessment($data){
     $dataUpdate = array(
            'occupationId'                   => $data['occupationId'],
            'assessment_purpose'             => $data['assessmentPurpose'],
            'candidate_catagory'             => $data['candidateCatagory'],
            'levels'                         => $data['level'],
            'education_mode'                 => $data['education'],
            'employement_type'               => $data['typeOfEmp'],
            'ownership_type_of_institution'  => $data['typeOfOwnership'],                      
            'modified_date'                  => $data['modDate']
         );
         $this->db->update('assessmet' , $dataUpdate , "`assessmet_id` = {$data['assessmentId']}");
    }
    //first delete data from child table
    function deleteFromCandidateAssessment($assessmentId){
        $result = $this->db->select("select * from candidate_assessment where assessmentId = '".$assessmentId."'");
        if(count($result)>0){
            return $this->db->delete('candidate_assessment',"assessmentId = '".$id."'");
        }
    }
    
    function persistSchedule($data){
        $lastId = $this->db->insert('assessment_schedule', array(
                     'assessmentId' => $data['assessmentId'],
                     'assessment_date' => $data['assessmetDate'],
                     'assessment_time' => $data['assessmentTime']
        ));
        return $lastId;
    }
    
    public function closeAssessment($assessmentId) {
        $data = array('assessment_state' => 'CLOSED',
                      '	closing_date' => date('Y-m-d H:i:s'));
        $this->db->update('assessmet' , $data, "`assessmet_id` = {$assessmentId}");
    }
    
    function updateScheduleStatus($assessmentId){
        $data = array('schedule_status' => 'YES');
        $this->db->update('assessmet' , $data, "`assessmet_id` = {$assessmentId}");
    }
    
    function findScheduleByAssessmentId($assessmentId){
        return $this->db->select("select * from assessment_schedule where assessmentId = '".$assessmentId."'");
    }
    
    function findAssessmentScheduleByScheduleId($assessmentScheduleId){
      return $this->db->select("select * from assessment_schedule where assessment_schedule_id = '".$assessmentScheduleId."'");    
    }
    function findTotalCandidate($assessmentId){
        return $this->db->countRow("select COUNT(*) from candidate_assessment where assessmentId = '".$assessmentId."'");
    }
    
    function updateAssessmentSchedule($data){
        $this->db->update('assessment_schedule' , $data,"`assessment_schedule_id` = {$data['assessment_schedule_id']}");
    }
    
    //find assessor assign for each schedule
    function assessorAssignForAssessment($scheduleId){
        return $this->db->select("select * from assessor ,assessor_assessment_schedule,assessment_schedule  
                                               where assessor_assessment_schedule.assessment_schedule_id = assessment_schedule.assessment_schedule_id and assessor_assessment_schedule.assessor_id = assessor.assessor_id  and 
                                               assessor_assessment_schedule.assessment_schedule_id = '".$scheduleId."'");
    }
    
    //find supervisor assign for each schedule
    function supervisorAssignForAssessment($scheduleId){
        return $this->db->select("select * from supervisor ,supervisor_assessment_schedule,assessment_schedule  
                                               where supervisor_assessment_schedule.assessment_schedule_id = assessment_schedule.assessment_schedule_id and 
                                               supervisor_assessment_schedule.supervisor_id = supervisor.supervisor_id  and 
                                               supervisor_assessment_schedule.assessment_schedule_id = '".$scheduleId."'");
    }
    
    function findAssessorByOccupationName($occupation){
        return $this->db->select("select * from assessor where assessor.occupation = '".$occupation."' and assessor.assessor_id  NOT IN(select assessor_id from  assessor_assessment_schedule)");
    }
    
    function findAllSupervisor(){
        return $this->db->select("select * from supervisor where supervisor.supervisor_id NOT IN(select supervisor_id from supervisor_assessment_schedule)");
    }
            
    function persistAssessor($data){
        $lastId = $this->db->insert('assessor_assessment_schedule', array(
                       'assessor_id'   => $data['assessorId'],
                       'assessment_schedule_id'  => $data['scheduleId']
        ));
        return $lastId;
    }
    
    function persistSupervisor($data){
       $lastId = $this->db->insert('supervisor_assessment_schedule', array(
                       'supervisor_id'   => $data['supervisorId'],
                       'assessment_schedule_id'  => $data['scheduleId']
        ));
        return $lastId; 
    }
    
    function findAssessorAssignedToScheduleByScheduleId($scheuleId = null){
       if($scheuleId != null) 
           return $this->db->select("select * from assessor_assessment_schedule where assessment_schedule_id = '".$scheuleId."'"); 
    }
   
    public function findSupervisorAssignedToScheduleByScheduleId($scheduleId = null) {
        if($scheduleId != null){
            return $this->db->select("select * from supervisor_assessment_schedule where assessment_schedule_id = '".$scheduleId."'");
        }
    }
}

