<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Candidates_Model extends Model {

    function __construct() {
        parent::__construct();  
    }
    function persistCandidate($data){
        $lastId = $this->db->insert('candidate', array(
                   'first_name'  => $data['firstName'],
                   'middle_name'  => $data['middleName'],
                   'last_name'    => $data['lastName'],
                   'address'      => $data['address'],
                   'email'        => $data['email'],
                   'gender'       => $data['gender'],
                   'phone_number' => $data['phoneNumber'],
                   'date_of_birth'  => $data['dob'],
                   'image'          => $data['image'],
                   'registration_date'   => $data['registrationDate'],
                   'modification_date'   => $data['modificationDate']
        ));
        return $lastId;
    }
    
    function findByEmail($email){
        return $this->db->select("select * from candidate where email = '".$email."'");
    }
    
    function persistCandidateAssessment($data){
        $lastId = $this->db->insert('candidate_assessment', array(
                    'candidateId' => $data['candidateId'],
                    'assessmentId' => $data['assessmentId'],
                    'assessment_type' => $data['assessment_type'],
                    'payment_status' => $data['payment_status'],
                    'registration_date'  => $data['registration_date']
                     ));
        return $lastId;
    }
    
    function findAll(){
        return $this->db->select("select * from candidate");
    }
}

