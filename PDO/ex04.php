<?php 

	//MySQL
	
	$conn = new PDO('mysql:host=localhost;dbname=dbphp7', 'root','');
	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD);");
	
	$login = "teste";
	$password = "teste";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);
	
	$stmt->execute();

	echo "MySQL OK!";
	
	echo "<br>===================================<br>";

	//PostgreSQL
	$conn = new PDO('pgsql:dbname=dbphp7;host=localhost', 'postgres', '!ltm092092@');
	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD);");
	
	$login = "teste";
	$password = "teste";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);
	
	$stmt->execute();	

	echo "Postgres OK!";

	echo "<br>===================================<br>";

	require_once("ex01.php");
 ?>