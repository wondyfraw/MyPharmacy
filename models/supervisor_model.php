<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Supervisor_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    function persistSupervisor($data){
       $lastId = $this->db->insert('supervisor', array(
                 'supervisor_first_name'  => $data['firstName'],
                 'supervisor_middle_name' => $data['middleName'],
                 'supervisor_last_name'   => $data['lastName'],
                 'position'               => $data['position'],
                 'organization'           => $data['organization'],
                 'address'                => $data['address'],
                 'phone_number'           => $data['phone'],
                 'alternate_phone'        => $data['phoneAlt'],
                 'email'                  => $data['email'],
                 'image'                  => $data['phone'],
                 'gender'                 => $data['gender'],
                 'brith_date'             => $data['dob'],
                 'registration_date'      => $data['regDate'],
                 'modified_date'         => $data['modDate']
       )); 
    }
    function findByEmail($email, $tableName){
        return $this->db->select("select * from $tableName where email = '".$email."'");
    }
}

