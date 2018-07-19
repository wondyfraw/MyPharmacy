<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    function create($data){
        $check_tbl_name = "useradmin";
       $lastId= $this->db->insert($check_tbl_name, array(
			'firstname' => $data['fname'],
                        'lastname'  => $data['lname'],
                        'admin_name'=> $data['email'],
			'admin_pass' => Hash::create('sha256', $data['pass'], HASH_PASSWORD_KEY),
                        'registration_date' => $data['regDate'],
                        'gender'            => $data['sex'],
                        'photo'             => $data['photo'],
                        'user_type'         => $data['userType'],
			'modify_date' => $data['modify_date']
		));
        return $lastId;
 }
 
 function userList(){
     return $this->db->select("SELECT * FROM useradmin");
 }
 
 function findUserById($id){
     return $this->db->select("SELECT * FROM useradmin WHERE adminID = '".$id."'");
 }
}
