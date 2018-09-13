<?php

	$nome1 = "Nome 1";
	$nome2 = 'Nome 2';

	$ano = 1989;
	$salario = 9999.99;
	$bloqueado = false;


	$frutas = array("abacaxi", "laranja", "melancia");

	$nascimento = new DateTime();


	$arquivo = fopen("ex01.php", "r");

	$nulo = NULL;

	echo "<strong> Nome 1 = </strong>" . $nome1;
	echo "<br/>";

	echo "<strong> Nome 2 = </strong>" . $nome2;
	echo "<br/>";

	echo "<strong> Ano = </strong>" . $ano;
	echo "<br/>";

	echo "<strong> Salário = </strong>" . $salario;
	echo "<br/>";

	if($bloqueado){
		echo "<strong> Bloqueado = </strong> Sim/True";
		echo "<br/>";
	}
	else{
		echo "<strong> Bloqueado = </strong> Não/False";
		echo "<br/>";
	}

?>