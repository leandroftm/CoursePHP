<?php

	$nome = (int)$_GET["a"];

	var_dump($nome);

	$IP1 = $_SERVER["REMOTE_ADDR"];
	$IP2 = $_SERVER["SCRIPT_NAME"];

	echo "<br/>" . $IP1;
	echo "<br/>" . $IP2;

?>