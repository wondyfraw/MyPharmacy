<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author itp-cons-59
 */
class Login extends Controller {
    //put your code here
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        //echo Hash::create('sha256','123456',HASH_PASSWORD_KEY);die();
        $this->view->render1('login/index');
    }
    
    function run(){
        //echo 'Call run';die();
        $this->model->run();
    }
}
