<?php 


	$idadeCrianca = 12;
	$idadeMaior = 18;
	$idadeMelhor = 65;

	$idade = 30;

	if ($idade < $idadeCrianca) {

		echo "Criança";

	} elseif ($idade < $idadeMaior) {

		echo "Adolescente";

	} else if ($idade < $idadeMelhor) {

		echo "Adulto";

	}else {

		echo "Idoso";

	}

	echo "<br>";
	//operador ternario
	echo ($idade < $idadeMaior) ? "Menor de Idade" : "Maior de Idade";

 ?>