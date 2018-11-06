<?php 

	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Leandro Torres");
	$cad->setEmail("email@email.com");
	$cad->setSenha("senha12345");

	//echo $cad;
	$cad ->registrarVenda();
 ?>