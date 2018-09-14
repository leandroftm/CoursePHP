<?php

	$nome = "Nome";

	function teste() {

		global $nome;
		echo $nome;

	}

	teste();

?>