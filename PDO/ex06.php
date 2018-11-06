<?php 

	//MySQL
	
	$conn = new PDO('mysql:host=localhost;dbname=dbphp7', 'root','');

	$conn->beginTransaction();

	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE deslogin=?;");

	$login = "admin1";	
	
	$stmt->execute(array($login));

	//$conn->rollback();
	$conn->commit();

	echo "MySQL OK!";
	
	echo "<br>===================================<br>";

	

	//PostgreSQL
	$conn = new PDO('pgsql:dbname=dbphp7;host=localhost', 'postgres', '!ltm092092@');

	$conn->beginTransaction();

	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE deslogin=?;");

	$login = "admin1";	
	
	$stmt->execute(array($login));

	//$conn->rollback();
	$conn->commit();



	echo "Postgres OK!";

	echo "<br>===================================<br>";

	require_once('ex01.php');

 ?>