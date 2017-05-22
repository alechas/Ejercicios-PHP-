<?php
session_start();

require_once"php/usuarios.php";

$queHago = isset($_POST['queHago']) ? $_POST['queHago'] : NULL;

switch ($queHago) {

    case "login":
    	//echo setcookie("MisUsuariosCK", $_POST['user']."&".$_POST['user'], time() + (86400 * 30), "/");
    	setcookie("MisUsuariosCK", $_POST['mail'], time() + (86400 * 30), "/");

        $tipo = Usuario::TraerUnUsuario($_POST['mail'],$_POST['pass']);

        //Si no encontro el usuario arrojo error
        if ($tipo == "") 
            header('http/1.0 500 ');        	
		else
			$_SESSION['tipo'] = $tipo;	
			//Usuario::CargarTipo($tipo);
			//echo $_SESSION['tipo'];

    	break;

    case "logOut":
        //$_SESSION['tipo'] = "";
    	//Destruir la sesión.
		session_destroy();
    	//echo $_SESSION['tipo'];
    	break;

    }

?>