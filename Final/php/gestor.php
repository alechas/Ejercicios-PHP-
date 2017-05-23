<?php
require_once"usuarios.php";
//require_once"/home/u862485186/public_html/php/usuarios.php";


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
			if (isset($_SESSION['tipo'])) 
			{
					$tipo = $_SESSION['tipo'];
			}
			else
				$tipo = "x";

			switch($tipo[0])
			{
			
				case "x":

				break;

				case "c":
					echo "<a href='#home' style='width:50%' class='w3-bar-item w3-button'>Home</a>
    					  <a href='#us' style='width:50%' class='w3-bar-item w3-button'>Jane & John</a>";

				break;

				case "a":
					echo "<a href='#home' style='width:20%' class='w3-bar-item w3-button'>Home</a>
    					  <a href='#us' style='width:20%' class='w3-bar-item w3-button'>Jane & John</a>
    					  <a href='#wedding' style='width:20%' class='w3-bar-item w3-button'>Wedding</a>
    					  <a href='#curse' style='width:20%' class='w3-bar-item w3-button'>Curse</a>
    					  <a href='#rsvp' style='width:20%' class='w3-bar-item w3-button w3-hover-black'>RSVP</a>";
				break;

				case "v":
					echo "<a href='#home' style='width:50%' class='w3-bar-item w3-button'>Home</a>
    					  <a href='#rsvp' style='width:50%' class='w3-bar-item w3-button w3-hover-black'>RSVP</a>";

				break;
			}
		}

	public static function CargarSecciones()
	{
		$tipo = array();
		$mail = "";

		// Cargo el mail
			if (isset($_COOKIE['MisUsuariosCK']))
				$mail = "value = " . $_COOKIE['MisUsuariosCK'];


		// Cargo el tipo
			if (isset($_SESSION['tipo'])) 
			{	
					$tipo = $_SESSION['tipo'];
			}
			else
				$tipo = "x";


			// Cabecera
			echo "<div class='w3-container w3-padding-64  w3-grayscale-min w3-center' id='wedding' style='background-color:#9fd8fb;'>
						  <div class='w3-content'>
						    <h1 class='w3-text-grey'><b>Final Programación 3</b></h1>
						  </div>
						</div>";
	
			switch($tipo[0])
			{
			
				case "x":

				echo "
						<div class='w3-container w3-padding-64  w3-grayscale-min w3-left' id='weddin3g' style='background-color:#fb9fcd>
						  <div class='w3-content'>
						    <div class='w3-row'>
						      <div class='w3-half'>
						    	<input type = 'email' placeholder= 'Ingrese mail' id='mail' $mail ><br>
        						<input type='password' name= 'pass' id = 'pass' placeholder= 'Ingrese contraseña' maxlength=4 id='pass'><br>
						    	<button onclick='Login()' class='w3-button w3-round w3-red w3-opacity w3-hover-opacity-off' style='padding:3px 62px'>Ingresar</button><br>
						    	<p style='color:white;'>Cargar datos</p>
						    	<button onclick='LoginC()' class='w3-button w3-round w3-green w3-opacity w3-hover-opacity-off' style='padding:3px 50px'>Comprador</button><br>
						    	<button onclick='LoginA()' class='w3-button w3-round w3-yellow w3-opacity w3-hover-opacity-off' style='padding:3px 41px'>Administrador</button><br>
						    	<button onclick='LoginV()' class='w3-button w3-round w3-blue w3-opacity w3-hover-opacity-off' style='padding:3px 56px'>Vendedor</button><br>

						      </div>
						    </div>
						  </div>
						</div>";		
					
				break;

				case "c":
					echo "
						<header class='w3-display-container w3-wide bgimg w3-grayscale-min' id='home'>
						  <div class='w3-display-middle w3-text-white w3-center'>
						    <h1 class='w3-jumbo'>Jane & John</h1>
						    <h2>Are getting married</h2>
						    <h2><b>17.07.2017</b></h2>
						  </div>
						</header>";

				echo "
						<div class='w3-container w3-padding-64 w3-pale-red w3-grayscale-min' id='us'>
						  <div class='w3-content'>
						    <h1 class='w3-center w3-text-grey'><b>Jane & John</b></h1>
						    <img class='w3-round w3-grayscale-min' src='/w3images/wedding_couple2.jpg' style='width:100%;margin:32px 0'>
						    <p><i>Cuerpo de la pagina</i>
						    </p><br>
						    <input type='text' name='mail' value='mail'>
						    <input type='text' name='pass' value='pass'>
						    <p class='w3-center'><a href='#wedding' class='w3-button w3-black w3-round w3-padding-large w3-large'>Wedding Details</a></p>
						  </div>
						</div>";

				break;

				case "a":
					echo "
						<header class='w3-display-container w3-wide bgimg w3-grayscale-min' id='home'>
						  <div class='w3-display-middle w3-text-white w3-center'>
						    <h1 class='w3-jumbo'>Jane & John</h1>
						    <h2>Are getting married</h2>
						    <h2><b>17.07.2017</b></h2>
						  </div>
						</header>";

				echo "
						<div class='w3-container w3-padding-64 w3-pale-red w3-grayscale-min' id='us'>
						  <div class='w3-content'>
						    <h1 class='w3-center w3-text-grey'><b>Jane & John</b></h1>
						    <img class='w3-round w3-grayscale-min' src='/w3images/wedding_couple2.jpg' style='width:100%;margin:32px 0'>
						    <p><i>Cuerpo de la pagina</i>
						    </p><br>
						    <input type='text' name='mail' value='mail'>
						    <input type='text' name='pass' value='pass'>
						    <p class='w3-center'><a href='#wedding' class='w3-button w3-black w3-round w3-padding-large w3-large'>Wedding Details</a></p>
						  </div>
						</div>";

				echo "
						<div class='w3-display-container bgimg2' id='curse'>
						  <div class='w3-display-middle w3-text-white w3-center'>
						    <h1 class='w3-jumbo'>You Are Invited</h1><br>
						    <h2>Of course..</h2>
						  </div>
						</div>";

				echo "
						<div class='w3-container w3-padding-64 w3-pale-red w3-grayscale-min w3-center' id='wedding'>
						  <div class='w3-content'>
						    <h1 class='w3-text-grey'><b>THE WEDDING</b></h1>
						    <img class='w3-round-large w3-grayscale-min' src='/w3images/wedding_location.jpg' style='width:100%;margin:64px 0'>
						    <div class='w3-row'>
						      <div class='w3-half'>
						        <h2>When</h2>
						        <p>Wedding Ceremony - 2:00pm</p>
						        <p>Reception & Dinner - 5:00pm</p>
						      </div>
						      <div class='w3-half'>
						        <h2>Where</h2>
						        <p>Some place, an address</p>
						        <p>Some where, some address</p>
						      </div>
						    </div>
						  </div>
						</div>";

				echo "
						<div class='w3-container w3-padding-64 w3-pale-red w3-center w3-wide' id='rsvp'>
						  <h1>HOPE YOU CAN MAKE IT!</h1>
						  <p class='w3-large'>Kindly Respond By January, 2017</p>
						  <p class='w3-xlarge'>
						    <button onclick='document.getElementById('id01').style.display='block'' class='w3-button w3-round w3-red w3-opacity w3-hover-opacity-off' style='padding:8px 60px'>RSVP</button>
						  </p>
						</div>";

				break;

				case "v":
					echo "
						<header class='w3-display-container w3-wide bgimg w3-grayscale-min' id='home'>
						  <div class='w3-display-middle w3-text-white w3-center'>
						    <h1 class='w3-jumbo'>Jane & John</h1>
						    <h2>Are getting married</h2>
						    <h2><b>17.07.2017</b></h2>
						  </div>
						</header>";

				echo "
						<div class='w3-container w3-padding-64 w3-pale-red w3-center w3-wide' id='rsvp'>
						  <h1>HOPE YOU CAN MAKE IT!</h1>
						  <p class='w3-large'>Kindly Respond By January, 2017</p>
						  <p class='w3-xlarge'>
						    <button onclick='document.getElementById('id01').style.display='block'' class='w3-button w3-round w3-red w3-opacity w3-hover-opacity-off' style='padding:8px 60px'>RSVP</button>
						  </p>
						</div>";

				break;

			}

		}

		public static function LogOut()
		{

			if (isset($_SESSION['tipo'])) 
			{
				if ($_SESSION['tipo'] == "")
					$tipo = "x";
				else
				$tipo = $_SESSION['tipo'];
			}
			else
				$tipo = "x";

			switch($tipo[0])
			{
			
				case "x":
					
				break;

				case "c":
				echo $_SESSION['mail']." <button onclick='LogOut()' class='w3-button w3-round w3-red w3-opacity w3-hover-opacity-off' style='padding:3px 53px'>LogOut</button>";

				break;

				case "a":
				echo $_SESSION['mail']." <button onclick='LogOut()' class='w3-button w3-round w3-red w3-opacity w3-hover-opacity-off' style='padding:3px 53px'>LogOut</button>";
			
				break;

				case "v":
				echo $_SESSION['mail']." <button onclick='LogOut()' class='w3-button w3-round w3-red w3-opacity w3-hover-opacity-off' style='padding:3px 53px'>LogOut</button>";
			
				break;
			}

		}

		public static function CargarMailCookie()
		{
			if(isset($_COOKIE['MisUsuariosCK']))
        		  echo "value = ". $_COOKIE['MisUsuariosCK'];
        	else
        		echo "value = prueba";
		}
	}


?>