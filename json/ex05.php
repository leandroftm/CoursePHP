<?php 

	$job = '[{"class":"danhwalyn","name":"ophys","level":121,"server":"e3"},{"class":"danhwalyn","name":"ReinhardAstrea","level":120,"server":"e3"},{"class":"ninja","name":"Aegislash","level":119,"server":"e3"},{"class":"healer","name":"iDoopy","level":119,"server":"e3"},{"class":"danhwalyn","name":"iRiosa","level":119,"server":"e3"},{"class":"ninja","name":"iMinnie","level":119,"server":"e3"},{"class":"healer","name":"Jane09","level":119,"server":"e3"}]';

	$data = json_decode($job, true);

	Var_dump($data);
 ?>