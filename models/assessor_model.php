<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Assessor_Model extends Model {

    function __construct() {
        parent::__construct(); 
    }
    
    function findAll(){
        //return $this->db->select("select * from")
    }
    function findAllOccupation(){
        return $this->db->select("select * from occupation");
    }
    
    function findByEmail($email, $tableName){
        return $this->db->select("select * from assessor where email = '".$email."'");
    }
    
    function persistAssessor($data){
        $lastId = $this->db->insert("assessor" , array(
               'assessor_first_name'   => $data['firstName'],
               'assessor_middle_name'  => $data['middleName'],
               'assessor_last_name'    => $data['lastName'],
               'occupation'            => $data['occupation'],
               'level_assessed'        => $data['lavels'],
               'organization'          => $data['organization'],
               'accreditation_date'    => $data['accreditationDate'],
               'assessor_type'         => $data['assessorType'],
               'address'               => $data['address'],
               'phone_number'          => $data['phone'],
               'alternate_phone'       => $data['phoneAlt'],
               'email'                 => $data['email'],
               'image'                 => $data['image'],
               'registration_date'     => $data['regDate'],
               'modified_date'         => $data['modDate']
        ));
        
        return $lastId;
    }
}