<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Login extends Controller {

    function __construct() {
        
        parent::__construct();

        $this->view->map = 0;
    }
    function index(){
        //echo Hash::create('sha256','12345',HASH_PASSWORD_KEY);
        $this->view->render('login/index',true,true);
    }
    
    function run(){
        //echo 'Call run';die();
        $this->model->run();
    }

}

