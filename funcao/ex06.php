<?php 

	$pessoa = array(
		'nome'=> 'nome',
		'idade' => 25
	);

	print_r($pessoa);

	echo "<br><br>";

	foreach($pessoa as &$value){

		if(gettype($value) ==='integer') $value += 10;

		echo $value. '<br>';

	}

	print_r($pessoa);

 ?>