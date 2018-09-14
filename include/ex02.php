<?php 
	

	//tenta funcionar mesmo que o arquivo não exista ou tenha algum problema
	//include "inc/ex01.php";
	//include "../inc/ex01.php";
	//include_once "../inc/ex01.php";

	//exige que o arquivo exista, s~e não existir, ocorre fatal error
	//require "inc/ex01.php";
	require_once "inc/ex01.php";
	

	$resultado = somar (10, 20);

	echo $resultado;

 ?>