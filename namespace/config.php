<?php 

	spl_autoload_register(function($class){

		$dirClass = "Class";
		$fileName = $dirClass . DIRECTORY_SEPARATOR . $class . ".php";

		if(file_exists($fileName)){

			require_once($fileName);
		}

	});
	
 ?>