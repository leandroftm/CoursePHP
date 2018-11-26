<?php 
	
	// Set the enviroment variable for GD
	putenv('GDFONTPATH=' . realpath('.'));

// Name the font to be used (note the lack of the .ttf extension)
	$font = '';
	$image = imagecreatefromjpeg("certificado.jpg");

	$titleColor = imagecolorallocate($image, 0, 0, 0);
	$gray = imagecolorallocate($image, 155, 155, 155);

	imagettftext ($image, 32,0,320,250, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR. "Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf","CERTIFICADO");
 
imagettftext($image, 32,0,340,350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Divaney Aparecido");
	imagestring ($image, 3, 410, 370, "Concluido em: ".date("d/m/Y"), $titleColor);	


	header("Content-Type: image/jpeg");

	imagejpeg($image);
	//imagejpeg($image, "1certificado-".date("Y-m-d").".jpg", 100);

	imagedestroy($image);

 ?>