<?php 

	$job = array();

	array_push($job, array(
		'class' => 'danhwalyn',
		'name' => 'iRiosa',
		'level' => 119,
		'server' => 'e3'
	));

	array_push($job, array(
		'class' => 'ninja',
		'name' => 'iMinnie',
		'level' => 119,
		'server' => 'e3'
	));

	array_push($job, array(
		'class' => 'healer',
		'name' => 'Jane09',
		'level' => 119,
		'server' => 'e3'
	));

	echo json_encode($job);
	//print_r($job);

 ?>