<?php 

	$frase = "Nome do meio e Sobrenome";
	$word = "meio";

	$q = strpos($frase, $word);

	$texto1 = substr($frase, 0, $q);
	var_dump($texto1);
	echo "<br>";
	var_dump($word);

	$texto2 = substr($frase, $q + strlen($word), strlen($frase));
	echo "<br>";
	var_dump($texto2);

 ?>