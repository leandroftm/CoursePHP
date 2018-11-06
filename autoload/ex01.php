<?php 

	function __autoload($nomeClasse){

		require_once("$nomeClasse.php");

		//var_dump($nomeClasse);

	}

	
	$carro = new Civic();

	$carro->acelerar(80);
	
 ?>