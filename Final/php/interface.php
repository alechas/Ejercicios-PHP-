<?php 
      
    require_once "nusoap.php";
    require_once "materiales.php";
      
    function CargarProducto() 
    {
      	materiales::InsertarMaterial("WebService",123,"solido");

    }

    $server = new soap_server();
    $server->configureWSDL("interface", "urn:interface");

    $server->register("CargarProducto",
        array(),
        "urn:interface",
        "urn:interface#CargarProducto",
        "rpc",
        "encoded",
        "Carga un Material");

    $server->service($HTTP_RAW_POST_DATA);

?>