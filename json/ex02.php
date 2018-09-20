<?php 

	$json = '[{"nome":"Nome0","idade":20},{"nome":"Nome1","idade":25},{"nome":"Nome2","idade":30},{"nome":"Nome3","idade":35}]';


	$data = json_decode($json, true);

	Var_dump($data);

 ?>