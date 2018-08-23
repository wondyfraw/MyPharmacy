<?php

class Bootstrap {

	function __construct() {

		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = filter_var($url, FILTER_SANITIZE_URL);
		$url = explode('/', $url);

//		print_r($url);die();
                //define('DS', DIRECTORY_SEPARATOR);
//                define('DS', '/');
//                define('ROOT', realpath(dirname(__FILE__)) . DS);
		//echo 'Path=' . ROOT . "Sepa =".DS;
		if (empty($url[0])) {
			require 'controllers/index.php';
			$controller = new Index();
                        //require 'views/headerIndex.php';
			$controller->index();
			return false;
		}

		$file = 'controllers/' . $url[0] . '.php';
		if (file_exists($file)) {
			require $file;
		} else {
                    echo 'Page not found';die();
			$this->error();
		}
		
		$controller = new $url[0];
		$controller->loadModel($url[0]);

		// calling methods
                 if(isset ($url[3])){
                    if(method_exists($controller, $url[1])){
                    $controller->{$url[1]}($url[2],$url[3]);
                    }
                    else{
                        $this->error();
                    }
                }
		else if (isset($url[2])) {
			if (method_exists($controller, $url[1])) {
				$controller->{$url[1]}($url[2]);
			} else {
				$this->error();
			}
		} 
                else {
			if (isset($url[1])) {
				if (method_exists($controller, $url[1])) {
					$controller->{$url[1]}();
				} else {                                   
					$this->error();
				}
			} else {
				$controller->index();
			}
		}
		
		
	}
	
	function error() {
		require 'controllers/error.php';
		$controller = new Error();
		$controller->index();
		return false;
	}

}