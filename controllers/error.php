<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of error
 *
 * @author wonde12
 */
class Error extends Controller {
  
    function __construct() {
        parent::__construct();
        
        echo 'this is an error<br/>';
        
        $this->view->msg = 'This page does not exist';
        $this->view->render('error/index');
    }
}
