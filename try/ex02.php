<?php 

	function trataNome($name){

		if(!$name){

			throw new Exception("Nenhum nome foi encontrado.<br>", 1);			

		}

		echo ucfirst($name). "<br>";

	}

	try {

		trataNome("1este");
		trataNome("");
		
	} catch (Exception $e) {

		echo $e->getMessage();
		
	} finally{

		echo "bloco try executado.";

	}

 ?>