<?php

	$anoNascimento = 1989;

	$nome1 = "Nome";

	$nome2 = "Completo";

	$nomeCompleto = $nome1 . " " . $nome2;

	echo $nomeCompleto;

	exit;

	unset ($nomeCompleto);

	if (isset($nomeCompleto)) {

		echo $nomeCompleto;

	}

?>