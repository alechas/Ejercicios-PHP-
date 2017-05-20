<?php

	/**
	Clase de carga de botones
	*/
	class Gestor 
	{
		
		// function __construct(argument)
		// {
		// 	# code...
		// }

		public static function CargarBotonera()
		{

			$tipo = "administrador";

			if(isset($_SESSION['tipo'])){
				$tipo = $_SESSION['tipo'];
			}

			switch($tipo)
			{
				case "comprador":
					echo "<a href='#home' style='width:25%' class='w3-bar-item w3-button'>Home</a>
    					  <a href='#us' style='width:25%' class='w3-bar-item w3-button'>Jane & John</a>";

				break;

				case "administrador":
					echo "<a href='#home' style='width:20%' class='w3-bar-item w3-button'>Home</a>
    					  <a href='#us' style='width:20%' class='w3-bar-item w3-button'>Jane & John</a>
    					  <a href='#wedding' style='width:20%' class='w3-bar-item w3-button'>Wedding</a>
    					  <a href='#curse' style='width:20%' class='w3-bar-item w3-button'>Curse</a>
    					  <a href='#rsvp' style='width:20%' class='w3-bar-item w3-button w3-hover-black'>RSVP</a>";
				break;

				case "vendedor":
					echo "<a href='#home' style='width:25%' class='w3-bar-item w3-button'>Home</a>
    					  <a href='#rsvp' style='width:25%' class='w3-bar-item w3-button w3-hover-black'>RSVP</a>";

				break;
			}
		}
	}


?>