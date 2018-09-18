<?php 

	$con = true;

	while($con){

		$num = rand(1, 10);

		echo $num . " ";

		if($num === 3){
			echo "Três";
			$con  = false;
		}

	}

 ?>