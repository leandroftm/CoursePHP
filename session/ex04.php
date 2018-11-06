<?php 

	session_id('8tb0clc89s1g59dca4o9p0fe3r');

	require_once("config.php");

	session_regenerate_id();

	echo session_id();

	echo "<br>" . session_save_path() . "<br>";
	echo "<br>";
	var_dump(session_status());
	echo "<br>";

	switch (session_status()) {

		case PHP_SESSION_DISABLED:
		echo "Não há sessões ativas ou habilitadas. <br>";
		break;

		case PHP_SESSION_NONE:
		echo "Existe uma sessão habilitada mas não existe nenhuma sessão. <br>";
		break;

		case PHP_SESSION_ACTIVE:
		echo "Existe uma sessão habilitada e ativa. <br>";
		break;

	}

	var_dump($_SESSION);

 ?>