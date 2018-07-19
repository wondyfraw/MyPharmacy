<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    public function index(){
            //echo Hash::create('sha256', 'jesse', HASH_PASSWORD_KEY);
	    //echo Hash::create('sha256', 'test2', HASH_PASSWORD_KEY);
            $this->view->render('index/index',true);
    }
    public function details(){
        $this->view->render('index/index',true);
    }
    
    function login(){
        $this->view->render('index/login',true,true);
    }
    
   function run(){
        $this->model->run();
    }
}

