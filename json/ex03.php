<?php 

	$job = array();

	array_push($job, array(
		'class' => 'danhwalyn',
		'name' => 'ophys',
		'level' => 121,
		'server' => 'e3'
	));

	array_push($job, array(
		'class' => 'danhwalyn',
		'name' => 'ReinhardAstrea',
		'level' => 120,
		'server' => 'e3'
	));

	array_push($job, array(
		'class' => 'ninja',
		'name' => 'Aegislash',
		'level' => 119,
		'server' => 'e3'
	));

	array_push($job, array(
		'class' => 'healer',
		'name' => 'iDoopy',
		'level' => 119,
		'server' => 'e3'
	));

	echo json_encode($job);

	//print_r($job);
 ?>