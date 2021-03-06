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
    
    function findAllAssessor(){
        return $this->db->select("select * from assessor ORDER BY assessor_id ASC");
    }
    
    /**
     * 
     * @return type array of data
     */
    function findAllOccupation(){
        return $this->db->select("select * from occupation ORDER BY registration_date ASC");
    }
    
    /**
     * 
     * @param type $email
     * @param type $tableName
     * @return type array of data
     * find assessor by email address
     */
    function findByEmail($email, $tableName){
        return $this->db->select("select * from assessor where email = '".$email."'");
    }
    
    /**
     * 
     * @param type $email
     * @param type $tableName
     * @param type $id
     * @return type
     */
    function  findByEmailId($email, $tableName, $id){
        return $this->db->select("select * from $tableName where email = '".$email."' and assessor_id <> '".$id."'");
    }
    /**
     * 
     * @param type $data
     * @return type int
     */
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
               'date_of_birth'         => $data['dob'],
               'gender'                => $data['gender'],
               'email'                 => $data['email'],
               'image'                 => $data['image'],
               'registration_date'     => $data['regDate'],
               'modified_date'         => $data['modDate']
        ));
        
        return $lastId;
    }
    
    /**
     * 
     * @param type $assessorId
     * @find assessor by Assessor Id
     * return Assessor
     */
   
    function findAssessorById($assessorId){
        return $this->db->select("select * from assessor where assessor_id = '".$assessorId."'");  
    }
    
    /**
     * 
     * @param type $data
     * update table with primary key 
     */
    function updateAssessor($data){
            $dataUpdate = array(
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
               'date_of_birth'         => $data['dob'],
               'gender'                => $data['gender'],
               'email'                 => $data['email'],
               'image'                 => $data['image'],
               'modified_date'         => $data['modDate']
        );
        $this->db->update('assessor' , $dataUpdate,"`assessor_id` = {$data['assessor_id']}");
    }
}