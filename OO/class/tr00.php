<?php 

	class Personagem {

		private $nome;
		private $classe;
		private $promo;
		private $nivel;
		private $faccao;

		public function __construct($nome, $classe, $promo, $nivel, $faccao){

			$this->nome = $nome;
			$this->classe = $classe;
			$this->promo = $promo;
			$this->nivel = $nivel;
			$this->faccao = $faccao;

		}

		//Inicio: Nome
		public function getNome(){

			return $this->nome;

		}

		public function setNome($nome){

			$this->nome = $nome;

		}
		//Termino: Nome

		//Inicio: Classe
		public function getClasse(){

			return $this->classe;

		}

		public function setClasse($classe){

			$this->classe = $classe;

		}
		//Termino: Classe

		//Inicio: Promo
		public function getPromo(){

			return $this->promo;

		}

		public function setPromo($promo){

			$this->promo = $promo;

		}
		//Termino: Promo

		//Inicio: Nivel
		public function getNivel():int{

			return $this->nivel;

		}

		public function setNivel($nivel){

			$this->nivel = $nivel;

		}
		//Termino: Nivel

		//Inicio: Faccao
		public function getFaccao(){

			return $this->faccao;

		}

		public function setFaccao($faccao){

			$this->faccao = $faccao;

		}
		//Termino: Faccao

		//Metodos
		public function exibir(){

			return array(
				"Nome :"=>$this->getNome(),
				"Classe :"=>$this->getClasse(),
				"Promo :"=>$this->getPromo(),
				"Nivel :"=>$this->getNivel(),
				"Facção :"=>$this->getFaccao()
			);

		}

		public function __toString(){

			return $this->nome. ", ".$this->classe. ", ".$this->promo. ", ".$this->nivel. ", ".$this->faccao;

		}

	}



/*
	//Kiira
	$personagem = new Personagem;

	$personagem->setNome("KiiraYamato");
	$personagem->setClasse("Spear");
	$personagem->setPromo("8th Grade");
	$personagem->setNivel("136");
	$personagem->setFaccao("Order");

	print_r($personagem->exibir());


	//Rukia
	$personagem = new Personagem;

	$personagem->setNome("iRukia");
	$personagem->setClasse("Hanbikwang");
	$personagem->setPromo("8th Grade");
	$personagem->setNivel("135");
	$personagem->setFaccao("Order");

	print_r($personagem->exibir());


	//meHam
	$personagem = new Personagem;

	$personagem->setNome("meHam");
	$personagem->setClasse("Busker");
	$personagem->setPromo("8th Grade");
	$personagem->setNivel("134");
	$personagem->setFaccao("Order");

	print_r($personagem->exibir());


	//CupidLove
	$personagem = new Personagem;

	$personagem->setNome("CupidLove");
	$personagem->setClasse("Healer");
	$personagem->setPromo("8th Grade");
	$personagem->setNivel("134");
	$personagem->setFaccao("Order");

	print_r($personagem->exibir());


	//iNibble
	$personagem = new Personagem;

	$personagem->setNome("iNibble");
	$personagem->setClasse("Sword");
	$personagem->setPromo("8th Grade");
	$personagem->setNivel("130");
	$personagem->setFaccao("Order");

	print_r($personagem->exibir());		
		

	//Ophys
	$personagem = new Personagem;

	$personagem->setNome("Ophys");
	$personagem->setClasse("Dan Hwa Lyn");
	$personagem->setPromo("7th Grade");
	$personagem->setNivel("122");
	$personagem->setFaccao("Chaos");

	print_r($personagem->exibir());


	//Reinhard
	$personagem = new Personagem;

	$personagem->setNome("ReinhardAstrea");
	$personagem->setClasse("Dan Hwa Lyn");
	$personagem->setPromo("7th Grade");
	$personagem->setNivel("121");
	$personagem->setFaccao("Order");

	print_r($personagem->exibir());

	
	//Aegislash
	$personagem = new Personagem;

	$personagem->setNome("Aegislash");
	$personagem->setClasse("Ninja");
	$personagem->setPromo("7th Grade");
	$personagem->setNivel("121");
	$personagem->setFaccao("Order");

	print_r($personagem->exibir());

	*/

	$personagem = new Personagem("KiiraYamato", "Spear", "8th Grade", "136", "Order");
	print_r($personagem->exibir());
	$personagem = new Personagem("iRukia", "Hanbikwang", "8th Grade", "135", "Order");
	print_r($personagem->exibir());
	$personagem = new Personagem("meHam", "Busker", "8th Grade", "134", "Order");
	print_r($personagem->exibir());
	$personagem = new Personagem("CupidLove", "Healer", "8th Grade", "134", "Order");
	print_r($personagem->exibir());
	$personagem = new Personagem("iNibble", "Sword", "8th Grade", "130", "Order");
	print_r($personagem->exibir());
	$personagem = new Personagem("Ophys", "Dan Hwa Lyn", "7th Grade", "122", "Chaos");
	print_r($personagem->exibir());
	$personagem = new Personagem("ReinhardAstrea", "Dan Hwa Lyn", "7th Grade", "121", "Order");
	print_r($personagem->exibir());
	$personagem = new Personagem("Aegislash", "Ninja", "7th Grade", "121", "Order");
	print_r($personagem->exibir());
	


	//echo $personagem;


 ?>