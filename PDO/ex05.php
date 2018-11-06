<?php 

	//MySQL
	
	$conn = new PDO('mysql:host=localhost;dbname=dbphp7', 'root','');
	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE deslogin=:LOGIN;");

	$login = "teste";
	
	$stmt->bindParam(":LOGIN", $login);
	
	$stmt->execute();

	echo "MySQL OK!";
	
	echo "<br>===================================<br>";

	//PostgreSQL
	$conn = new PDO('pgsql:dbname=dbphp7;host=localhost', 'postgres', '!ltm092092@');
	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE deslogin=:LOGIN;");

	$login = "teste";
	
	$stmt->bindParam(":LOGIN", $login);
	
	$stmt->execute();


	echo "Postgres OK!";

	echo "<br>===================================<br>";

	require_once("ex01.php");
 ?>