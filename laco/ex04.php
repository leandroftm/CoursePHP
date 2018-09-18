<form>

	<input type="text" name="nome">
	<input type="date" name="nanscimento">
	<input type="submit" value="OK">

</form>

<?php 
	
	if (isset($_GET)){

		foreach ($_GET as $key => $value) {

			echo "Nome do campo: " . $key;
			echo "<br> Valor do campo: " . $value;
			echo "<hr>";
		}

	}	

 ?>
