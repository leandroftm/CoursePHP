<?php 

	function teste(){

		$argumentos = func_get_args();

		return $argumentos;

	}

	var_dump(teste("teste 1", "teste 2", "teste 3", 1, 2, 3));

 ?>