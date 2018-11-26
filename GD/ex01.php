<?php 

header("Content-Type: image/png");


$image = imagecreate(256, 256);

$green = imagecolorallocate($image, 0, 255, 0);

$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "GOOOOLOOO!!", $red);

imagepng($image);

imagedestroy($image);

 ?>