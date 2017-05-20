<?php

	class Login
	{

		public $mail;
		public $pass;
		public $tipo;

	// 	public function Loguear($mail,$pass)
	// 	{

		// $archivo=fopen("archivos\usuarios2.txt", "w"); 	

		// fwrite($archivo,"comp@comp.com=>123=>comprador");
		// fwrite($archivo,"admin@admin.com=>321=>administrador");
		// fwrite($archivo,"vend@vend.com=>321=>vendedor");

		// fclose($archivo);

		public function Validar($mail,$pass)
		{
		$Datos=array();
		$archivo=fopen("archivos\usuarios2.txt", "r");//escribe y mantiene la informacion existente


			
		while(!feof($archivo))
		{
			$linea=fgets($archivo);
			//var_dump($us);
			//http://www.w3schools.com/php/func_filesystem_fgets.asp
			$us=explode("=>", $linea);

			echo "linea <br> $us";
			if ($us->mail == $mail && $us->pass == $pass) {
				$res = "ok";
				break;
			}
		}
		fclose($archivo);

		return $res;

		}

//		var_dump($Datos);
		//return $ListaDeAutosLeida;
	// 	}
	// }

?>