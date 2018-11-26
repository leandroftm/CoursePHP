<?php 

	$dir = "images";

	if(!is_dir($dir)){

		mkdir($dir);
		echo 'Diretório <strong>"'.strtoupper($dir).'"</strong> criado com sucesso.';

	}else{
		//rmdir($dir);
		echo 'Diretório <strong>"'.strtoupper($dir).'"</strong> já existe.';

	}

 ?>