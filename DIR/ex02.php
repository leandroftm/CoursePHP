<?php 

	$dir = scandir('..'.DIRECTORY_SEPARATOR.'DAO');

	$data = array();

	//var_dump($dir);

	//print_r($dir);

	//echo json_encode($dir);
	
	foreach ($dir as $d) {

		if(!in_array($d, array('.','..'))){

			$filename = '..'.DIRECTORY_SEPARATOR.'DAO'.DIRECTORY_SEPARATOR.$d;

			$info = pathinfo($filename);

			$info["size"] = filesize($filename)." bytes";

			$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));

			$info['url'] = 'http://localhost/DAO/'.str_replace('\\', '/', $d);

			array_push($data, $info);
			
		}
	}

	echo json_encode($data);

 ?>