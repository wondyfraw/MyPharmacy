<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Dashboard extends Controller{

    function __construct() {
        parent::__construct();  
        Session::init();
        if(Session::get('loggedIn') == false){
            Session::destroy();
            header('location: ' .URL . 'login');
        }
        $this->view->map = 1;
    }

    function index(){
        if(Session::get('loggedIn') == true)
          $this->view->render('dashboard/index');
        else{           
            header('location:' . URL . 'login');
        }
    }
    
    function logout(){
        Session::destroy();
        header('location: ../login');
    }
}
