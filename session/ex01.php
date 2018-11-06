<?php 

	require_once("config.php");

	$_SESSION["nome"] = "Nome da sessão";

	if(isset($_SESSION)){

		echo "Sessão Iniciada";

	}

 ?>