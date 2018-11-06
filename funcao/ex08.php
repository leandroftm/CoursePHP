<?php 

	function soma (int ...$valores): string{

		return array_sum($valores);

	}

	var_dump(soma(1,2,3,4,5,6,7,8,9,10));
	echo "<br>";
	echo soma (1.5, 3.2);
	echo "<br>";
	echo soma ("1.5", "3.2");

 ?>