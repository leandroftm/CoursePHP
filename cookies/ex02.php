<?php 

	if(isset($_COOKIE['COOKIE_NAME'])){

		//$obj = json_decode($_COOKIE['COOKIE_NAME']);

		//echo $obj->nome;

		$obj = json_decode($_COOKIE['COOKIE_NAME'], true);

		echo $obj['nome'];

	}

 ?>