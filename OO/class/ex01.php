<?php 

	class Pessoa {

		public $nome;

		public function falar(){

			return "O meu nome é ".$this->nome;

		}

	}

	$pessoa = new Pessoa();

	$pessoa->nome = "Nova Pessoa";

	echo $pessoa->falar();

 ?>