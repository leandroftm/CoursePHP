<?php 

	function teste($texto = "valor padrão", $periodo = "Bom dia"){

		return "Olá $periodo!<br>Teste $texto! <br><br>";
	}

	echo teste("", "");
	echo teste("Exemplo 1");
	echo teste("Exemplo 2", "Boa Tarde");
	echo teste("Exemplo 3", "Boa Noite");

 ?