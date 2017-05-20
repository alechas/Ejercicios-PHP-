<?php

	class Validaciones
	{
		public static function ValidarCampoEnteroVacio($campo , $valor)
		{
			if ($valor == 0) {
				return "Ingrese valor en el campo " . $campo;
			}
			else
			{
				return "ok";
			}
		}
	}

	public static function ValidarCampoStringVacio($campo , $valor)
	{
		if (strcmp($valor, "")) 
		{
			return "Ingrese valor en el campo " . $campo;
		}
		else
		{
			return "ok";
		}
	}


?>