<?php 

	class Endereco{

		private $logradouro;
		private $numero;
		private $cidade;

		public function __construct($logradouro, $numero, $cidade){

			$this->logradouro = $logradouro;
			$this->numero = $numero;
			$this->cidade = $cidade;

		}

		public function __destruct(){

			//var_dump("DESTRUIR");

		}

		public function __toString(){

			return $this->logradouro. ", ".$this->numero. " - ".$this->cidade;

		}

	}

	$novoEndereco = new Endereco("Logradouro: Rua Endereço", "Número: 1", "Cidade: São Paulo");

	var_dump($novoEndereco);

	echo $novoEndereco ."<br>";

	//unset($novoEndereco);

 ?>