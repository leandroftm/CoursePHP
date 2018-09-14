<?php 

	
	$resultado = 10 + 3 / 2;

	echo $resultado;
	echo "<br>";	

	$resultado1 = (10 + 3 ) / 2  > 5 && 10 + 5 < 3;
	var_dump($resultado1);
	echo "<br>";

	$resultado2 = (10 + 3 ) / 2  > 5 && 10 + 5 < 30;
	var_dump($resultado2);
	echo "<br>";	

	$resultado01 = (10 + 3 ) / 2  > 5 || 10 + 5 < 3;
	var_dump($resultado01);
	echo "<br>";

	$resultado02 = (10 + 3 ) / 2  > 5 || 10 + 5 < 30;
	var_dump($resultado02);
	echo "<br>";	


 ?>