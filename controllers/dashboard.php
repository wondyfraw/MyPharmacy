<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboard
 *
 * @author itp-cons-59
 */
class Dashboard extends Controller {
    //put your code here
    function __construct() {
        parent::__construct();        
        Session::init();
        if(Session::get('loggedIn') == false){
            Session::destroy();
            header('location: ' .URL . 'login');
        }
    }
    
     function index(){
        if(Session::get('loggedIn') == true)
          $this->view->render1('dashboard/index','header', 'footer');
        else{           
            header('location:' . URL . 'login');
        }
    }
}
