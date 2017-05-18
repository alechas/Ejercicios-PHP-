<html>

<body>
	
<?php

	$resultado = 0;

	if(isset($_POST["multiplicacion"]))
	if ($_POST["multiplicacion"]) {
		$resultado = $_POST["num1"]  * $_POST["num2"];
	}


	if(isset($_POST["division"]))
	if ($_POST["division"]) {
		if($_POST["num2"] != 0)
		$resultado = $_POST["num1"]  / $_POST["num2"];
	}


	if(isset($_POST["suma"]))
	if ($_POST["suma"]) {
		$resultado = $_POST["num1"]  + $_POST["num2"];
	}


	if(isset($_POST["resta"]))
	if ($_POST["resta"]) {
		$resultado = $_POST["num1"]  - $_POST["num2"];
	}

	echo "El resultado es ".$resultado;

?>

</body>

</html>