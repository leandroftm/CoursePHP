<?php 

	$file = fopen('log.txt', 'a+');

	fwrite($file, date('Y-m-d H:i:s')."\r\n");

	fclose($file);

	echo 'Arquivo '.$file.' criado com sucesso';

 ?>