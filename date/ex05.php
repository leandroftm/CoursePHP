<?php 

	$datetime = new DateTime();

	$periodo = new DateInterval("P15D");

	echo $datetime->format("d/m/Y H:i:s");

	$datetime->add($periodo);

	echo "<br>";
	echo $datetime->format("d/m/Y H:i:s");
;
 ?>