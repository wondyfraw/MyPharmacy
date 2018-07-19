<?php

class View {

	function __construct() {
		//echo 'this is the view';
	}

	public function render($name, $noInclude = false,$loginHeader=false)
	{
		if ($noInclude == true) {   
                    if($loginHeader ==false){
                        require 'views/headerIndex.php';
		        require 'views/' . $name . '.php';	                      
                        require 'views/indexFooter.php';
                    }
                   
                     else {
                         require 'views/' . $name . '.php';
                     }
		}
		else {
			require 'views/header.php';
                        //require 'views/sidebar.php';
			require 'views/' . $name . '.php';
			require 'views/footer.php';	
		}
	}
        public function render1($name,$header = null,$footer = null){
            if($header != null)
                require 'views/'.$header . '.php';
            require 'views/'. $name .'.php';
            if($footer != null)
            {
                require 'views/' . $footer . '.php';
            }
        }

}