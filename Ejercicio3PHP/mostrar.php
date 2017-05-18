<html>
<body>
<?php

	$text1 = "";
	$text2 = "";
	$text3 = "";
	$numeros[2];
	$max = 0;
	$min = 9999;
	$i = 0;
	$j = 0;
	$num_aux = 0;

	//var_dump($_POST);
	$numeros[0] = $_POST["text1"];
	$numeros[1] = $_POST["text2"];
	$numeros[2] = $_POST["text3"];

	//var_dump($numeros);
	if($numeros[0] == $numeros[1] || $numeros[0] == $numeros[2] || $numeros[1] == $numeros[2])
		echo "No hay valor del medio";
	else
	{
	for ($i=0; $i < 2 ; $i++) { 
	 
		for ($j=1; $j < 3 ; $j++) { 
//	var_dump($numeros[i]);
//	var_dump($numeros[j]);

			if ($numeros[$i] < $numeros[$j])
			{	
				$num_aux = $numeros[$i];
				$numeros[$i] = $numeros[$j];
				$numeros[$j] = $num_aux;
			}
		}

	}
	
	echo "Máximo:".$numeros[0]."<br>"."Intermedio:".$numeros[1]."<br>"."Mínimo:".$numeros[2]."<br>";

	}


//	var_dump($numeros);
?>

</body>
</html>