<?php 

	$pessoas = array();

	array_push($pessoas, array(
		'nome' =>'Nome0',
		'idade' => 20
	));

	array_push($pessoas, array(
		'nome' =>'Nome1',
		'idade' => 25
	));

	array_push($pessoas, array(
		'nome' =>'Nome2',
		'idade' => 30
	));

	array_push($pessoas, array(
		'nome' =>'Nome3',
		'idade' => 35
	));

	echo json_encode($pessoas);

 ?>