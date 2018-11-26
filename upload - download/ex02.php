<?php 

	$url = 'http://s2.narvii.com/image/wncmdp5ybvjga5sm5znjmm6qqwdk44wf_hq.jpg';

	$content = file_get_contents($url);

	$parse = parse_url($url);

	$basename = basename($parse['path']);

	//nome do arquivo que vai ser baixado
	//$file = fopen($basename, 'w+');

	$file = fopen('roka.png', 'w+');

	fwrite($file, $content);

	fclose($file);

	?>

	<img src="<?=$basename?>">