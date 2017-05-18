<?php

//require_once"index.php";

            //header('http/1.0 500 ');
//var_dump($_POST);
$queHago = isset($_POST['queHago']) ? $_POST['queHago'] : NULL;

switch ($queHago) {

    case "Suma":

    	echo $_POST['num1'] + $_POST['num2'];

    	break;

    case "Resta":

    	echo $_POST['num1'] - $_POST['num2'];

    	break;

    case "Multiplicacion":

    	echo $_POST['num1'] * $_POST['num2'];

    	break;

    case "Divicion":

    	if ($_POST['num2'] != 0) 
    	echo $_POST['num1'] / $_POST['num2'];

    	break;
}

?>