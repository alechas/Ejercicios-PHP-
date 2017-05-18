<html>

<body>
	Fecha: 
			<?php
			//var_dump($_POST);
				if(isset($_POST ["gr1"]))
					if($_POST ["gr1"] == "fecha1")
						echo date("l");
					else
						echo date("l jS \of F Y h:i:s A");

				else
					echo "Error al pasar parámetro";

		?>
</body>

</html>