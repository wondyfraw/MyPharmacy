<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
    function deleteFromCandidateAssessment($id){
        $result = $this->db->select("select * from candidate_assessment where assessmentId = '".$id."'");
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
        return $this->db->select("select * from assessor,assessor_assessment_schedule where assessor.occupation = '".$occupation."' and assessor.assessor_id <> assessor_assessment_schedule.assessor_id ");
    }
    
    function findAllSupervisor(){
        return $this->db->select("select * from supervisor,supervisor_assessment_schedule where supervisor_assessment_schedule.supervisor_id <>supervisor.supervisor_id ");
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
}

