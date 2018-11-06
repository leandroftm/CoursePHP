<?php 

	require_once("config.php");

	if(isset($_SESSION)){

		

		echo $_SESSION['nome'] . " - Sessão em andamento!"; 

		//session_unset($_SESSION['nome']); // libera todas as variaveis da sessão

		//unset($_SESSION['nome']); //libera a variavel 'nome' da sessão

		//session_destroy(); // elimina a sessão

	}

 ?>