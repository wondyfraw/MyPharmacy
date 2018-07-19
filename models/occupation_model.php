<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Occupation_Model extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function registerOccupation($data){
        $lastId = $this->db->insert('occupation', array(
                  'sector' =>$data['sector'],
                  'sub_sector' => $data['subSector'],
                  'occupation_name' => $data['occupation'],
                  'registration_date'  => $data['registrationDate']
        ));
        
        return $lastId;
    }
    
    function findAll(){
        return $this->db->select("select * from occupation");
    }
    function findById($id){
      return $this->db->select("select * from occupation where occupation_id = '".$id."'");  
    }
    
    function saveEdit($data){
        $dataUpdate = array(
           'sector' =>$data['sector'],
           'sub_sector' => $data['subSector'],
           'occupation_name' => $data['occupation'],
           'modification_date'  => $data['modifiedDate'] 
        );
        
        $this->db->update('occupation', $dataUpdate,"`occupation_id` = {$data['id']}");
        return 'OK';
    }
}
