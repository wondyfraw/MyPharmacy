<?php

class Login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
            $check_tbl_name = "admin";
                $admusername = filter_input(INPUT_POST, 'username');
                $admpassword = filter_input(INPUT_POST, 'password');
		$sth = $this->db->prepare("SELECT * FROM $check_tbl_name WHERE 
				username = :login AND password = :password");
		$sth->execute(array(
			':login' => $admusername,
			':password' => Hash::create('sha256', $admpassword, HASH_PASSWORD_KEY)
		));
		
		$data = $sth->fetch();           
                
		$count =  $sth->rowCount();        
		if ($count > 0) {
			// login
			Session::init();
			Session::set('user_type', $data['user_type']);
			Session::set('loggedIn', true);                        
                        Session::set('admin_name', $data['firstname'] . " ".$data['lastname']);
                        header('location: ../dashboard');
		} else {
			header('location: ../login');
		}
		
	}
	
}
