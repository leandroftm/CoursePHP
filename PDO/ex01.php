<?php 

	//MySQL
	//$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

	//PostgreSQL
	//$conn = new PDO('pgsql:dbname=dbphp7;host=localhost', 'postgres', '!ltm092092@');

	//SQL Server
	//$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost/SQLEXPRESS;ConnectionPooling=0, "sa", "root");
	/*
	$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

	$stmt->execute();

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($results);
	echo "==================================<br>";

	foreach ($results as $row) {

		foreach ($row as $key => $value) {

			echo "<strong>" .$key. "</strong>: " . $value."<br>";
			
		}

		echo "==================================<br>";
	}*/


	//MySQL
	$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
	$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

	$stmt->execute();

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo "<br>*****************************<br>";
	echo "*******Resultado MySQL*******<br>";
	echo "*****************************<br>";
	foreach ($results as $row) {

		foreach ($row as $key => $value) {

			echo "<strong>" .$key. "</strong>: " . $value."<br>";
			
		}

		echo "==================================<br>";
	}


	//PostgreSQL
	$conn = new PDO('pgsql:dbname=dbphp7;host=localhost', 'postgres', '!ltm092092@');
	$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

	$stmt->execute();

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	echo "<br>********************************";
	echo "<br>*******Resultado Postgres*******";
	echo "<br>********************************<br>";
	foreach ($results as $row) {

		foreach ($row as $key => $value) {

			echo "<strong>" .$key. "</strong>: " . $value."<br>";
			
		}

		echo "==================================<br>";
	}


 ?>