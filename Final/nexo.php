<?php
session_start();

require_once"php/usuarios.php";
//require_once"/home/u862485186/public_html/php/usuarios.php";

$queHago = isset($_POST['queHago']) ? $_POST['queHago'] : NULL;

switch ($queHago) {

    case "login":
    	//echo setcookie("MisUsuariosCK", $_POST['user']."&".$_POST['user'], time() + (86400 * 30), "/");

        $tipo = Usuario::TraerUnUsuario($_POST['mail'],$_POST['pass']);
        //$tipo[2] = "c";

        //Si no encontro el usuario arrojo error
        if ($tipo[2] == "") 
            header('http/1.0 500 ');        	
		else
        {	$_SESSION['tipo'] = $tipo[2];
            $_SESSION['mail'] = $tipo[0];	
            setcookie("MisUsuariosCK", $_POST['mail'], time() + (86400 * 30), "/");
		}	//Usuario::CargarTipo($tipo);
			//echo $_SESSION['tipo'];

    	break;

    case "logOut":
        //$_SESSION['tipo'] = "";
    	//Destruir la sesión.
		session_destroy();
    	//echo $_SESSION['tipo'];
    	break;

    case "BorrarCookie":
        setcookie("MisUsuariosCK", $_POST['mail'], time() - (86400 * 30), "/");
        break;

    }

?>