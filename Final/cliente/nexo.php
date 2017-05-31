<?php

require_once'nusoap.php';
//require_once'materiales.php';
//require_once"usuarios.php";
//require_once"materiales.php";
//require_once"/home/u862485186/public_html/php/usuarios.php";

$servicio="http://localhost:8080/Ejercicios-PHP-/Final/php/interface.php?wsdl"; //url del servicio

if (isset($_POST['Ingresar'])) 
{
	error_reporting(0);
    // Insertar
	$parametros=array('nombre' => $_POST['nombre'],
					  'precio' => $_POST['precio'],
					  'tipo' => $_POST['tipo']);	
	$client = new SoapClient($servicio);
	$result =  $client->__soapCall('CargarMaterial',$parametros);
	//llamamos al métdo que nos interesa con los parámetros
}

if (isset($_POST['Modificar'])) 
{
    // Modificar
	$parametros=array('idMat' => $_POST['idMat'],
					  'nombre' => $_POST['nombre'],
					  'precio' => $_POST['precio'],
					  'cantidad' => $_POST['cantidad'],
					  'tipo' => $_POST['tipo']);
	$client = new SoapClient($servicio);
	$result =  $client->__soapCall('ModificarMaterial',$parametros);
	//llamamos al métdo que nos interesa con los parámetros
}

if (isset($_POST['Borrar'])) 
{
    // Borrar
	$parametros=array('idMat' => $_POST['idMat'] ); //parametros de la llamada
	$client = new SoapClient($servicio);

	//llamamos al métdo que nos interesa con los parámetros
	$result =  $client->__soapCall('BorrarMaterial',$parametros);

}

?>