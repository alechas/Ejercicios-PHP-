<?php
require_once"usuarios.php";
require_once"materiales.php";
//require_once"/home/u862485186/public_html/php/usuarios.php";


	/**
	Clase de carga de botones
	*/
	class Gestor 
	{
		
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
					echo "<a href='#ejer' style='width:20%' class='w3-bar-item w3-button'>Ejercicios</a>
    					  <a href='#listado' style='width:20%' class='w3-bar-item w3-button'>Listado</a>
    					  <a href='#about' style='width:20%' class='w3-bar-item w3-button'>Presentación</a>";

				break;

				case "a":
					echo "<a href='#ejer' style='width:20%' class='w3-bar-item w3-hover-black w3-button'>Ejercicios</a>
    					  <a href='#alta' style='width:20%' class='w3-bar-item w3-hover-black w3-button'>Cargar material</a>
    					  <a href='#listado' style='width:20%' class='w3-bar-item w3-hover-black w3-button'>Listado</a>
    					  <a href='#fac' style='width:20%' class='w3-bar-item  w3-button w3-hover-black'>Facturado</a>
    					  <a href='#about' style='width:20%' class='w3-bar-item w3-hover-black w3-button'>Presentación</a>";
				break;

				case "v":
					echo "<a href='#ejer' style='width:20%' class='w3-bar-item w3-button'>Ejercicios</a>
    					  <a href='#alta' style='width:20%' class='w3-bar-item w3-button'>Cargar material</a>";

				break;
			}
		}

	public static function CargarSecciones()
	{
		$tipo = array();
		$mail = "";
		$nombreMat = "";
		$precioMat = "";
		$checkedSol = "";
		$checkedLiq = "";

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
						<header class='w3-display-container w3-small bgimg w3-grayscale-min  bgimg3' id='ejer'>
						  <div class='w3-display-middle w3-text-white '>
						    <p align='center'><h1 class='w3-padding-2'>Ejercicios</h1></p>
						    <p align='left'>1- crear la clase en PHP llamada “login.PHP” , con los metodos necesarios para validar los datos ingresados por el form login y que sean validados con los datos del archivo “usuario.txt”, los datos en el archivo son los siguientes
'comp@comp.com', '123', 'comprador'
'admin@admin.com', '321', 'administrador'
'vend@vend.com', '321', 'vendedor’</p>
<li>a. (2 puntos)Validar que el campo mail sea un mail y que la clave sea un numero de cuatro dígitos y de tipo password. </li><li>b. (0.5 puntos) Una vez iniciada MOSTRAR el nombre del usuario en algún lugar siempre visible de la web. </li><li>c. (0.5 puntos)Crear tres botones para ingresar como cualquiera los tres tipos usuario sin teclear sus datos . </li><li>d. (0.5 puntos)Guardar en una cookie el ultimo ingresado y mostrarlo en el form login </li><li>e. (1.5 puntos)un boton que me borre las cookie.
. </li><br>2- Crear el ABM de Materiales de construcción, <li>a. (1 punto) código auto incremental, nombre ,Precio,tipo(solido o liquido) </li><li>b. Se debe crear la clase MATERIALES con los métodos para el ABM </li><li>c. (8puntos total )Crear el WebService que realice las operaciones del ABM usando la clase MATERIALES <br>i. (2 punto) alta <br>ii. (2 punto) baja <br>iii. (2 punto )listado. <br>iv. (2 puntos) modificacion</il><br>
NOTA: Utilizar Ajax y Json en toda la aplicación.
						  </div>
						</header>";

				echo "
						<div class='w3-container w3-padding-64 w3-pale-red w3-grayscale-min' id='alta'>
						  <div class='w3-content' >
						    <h1 class='w3-center w3-text-grey'><b>Cargar Material</b></h1>
						    <br>Ingrese valores:
							<br><div id='idMat'></div>
						    <input type='text' id='matnombre' placeholder='Nombre' $nombreMat >
						    <br><input type='text' id='matprecio' placeholder='Precio' $precioMat >
						    <br><input type='radio' name='tipo' id='rbsolido' value='solido' $checkedSol > Solido
	  						<br><input type='radio' name='tipo' id='rbliquido' value='liquido' $checkedLiq> Líquido<br>
						    <p class='w3-left'>
						    	<a onclick='IngresarMaterial()' class='w3-button w3-round w3-red w3-opacity w3-hover-black w3-hover-opacity-off' style='padding:3px 66px'>Cargar</a>
						    	</p>
						  </div>
						</div>";

				echo "<div class='w3-display-container div_lista' id='listado'  >
							<br>
							<p align='center'>
							<button onclick='Listar()' class='w3-button w3-round w3-red w3-opacity w3-hover-black w3-hover-opacity-off' style='padding:3px 53px'>Listar</button>
							<div id='container_listar' align='center'>
							</p>
						</div>";

				echo "
						<div class='w3-container w3-padding-64 w3-pale-red w3-grayscale-min w3-center' id='fac'>
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
						<div class='w3-container w3-padding-64 w3-pale-red w3-center w3-wide' id='about'>
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