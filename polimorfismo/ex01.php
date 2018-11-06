<?php 

	abstract class animal{

		public function falar(){

			return "Som";

		}

		public function mover(){

			return "Anda";

		}

	}

	class Cachorro extends Animal {

		public function falar(){

			return "late";

		}

	}

	class Gato extends Animal {

		public function falar(){

			echo "Mia";

		}

	}

	class Passaro extends Animal{

		public function falar(){

			echo "Canta";

		}

		public function mover(){

			echo "Voa e " . parent::mover();

		}

	}

	$pluto = new Cachorro();

	echo $pluto->falar() . "<br>";
	echo $pluto->mover() . "<br>";

	echo "<br>";

	$gato = new Gato();

	echo $gato->falar() . "<br>";
	echo $gato->mover() . "<br>";

	echo "<br>";

	$passaro = new Passaro();

	echo $passaro->falar() . "<br>";
	echo $passaro->mover() . "<br>";

 ?>