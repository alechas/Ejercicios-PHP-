<?php 

    // incluir libreria
    require_once('lib/nusoap.php');
    require_once('materiales.php');

    // Crear un objeto de servicio
    $server = new nusoap_server;

    // Registrar la ruta (URL) donde será llamado
    $server->configureWSDL('GestorMateriales','http://localhost:8080/Ejercicios-PHP-/Final/php/interface.php?wsdl');

    // Crear un metodo o varios para el servicio
    // function saludar($usuario)
    // {
    //     return "Hola ".$usuario;
    // }

    // // Registrar el metodo y la forma de uso del metodo
    // $server->register('saludar',
    //     array('usuario' =>  'xsd:string'),
    //     array('return'  =>  'xsd:string'),
    //     '', // namespace Default
    //     '', // soapaction
    //     '', // style
    //     '', // use
    //     'Saluda'); // Descripcion


    function CargarMaterial($nombre,$precio,$tipo)
    {
        Material::InsertarMaterial($nombre,$precio,$tipo);
    }

    // Registrar el metodo y la forma de uso del metodo
    $server->register('CargarMaterial',
        array('nombre' =>  'xsd:string','precio' =>  'xsd:string','tipo' =>  'xsd:string'),
        array('return'  =>  'xsd:string'),
        '', // namespace Default
        '', // soapaction
        '', // style
        '', // use
        'Crea/Modifica un material'); // Descripcion

    function BorrarMaterial($idMat)
    {
        Material::BorrarMaterial($idMat);
    }
    $server->register('BorrarMaterial',
        array('idMat' =>  'xsd:string'),
        array('return'  =>  'xsd:string'),
        '', // namespace Default
        '', // soapaction
        '', // style
        '', // use
        'Borra un material'); // Descripcion

    function ModificarMaterial($idMat, $nombre, $precio, $cantidad, $tipo)
    {
        Material::ModificarMaterial($idMat, $nombre, $precio, $cantidad, $tipo);
    }
    $server->register('ModificarMaterial',
        array('idMat' =>  'xsd:string','nombre' =>  'xsd:string','precio' =>  'xsd:string','cantidad' =>  'xsd:string','tipo' =>  'xsd:string'),
        array('return'  =>  'xsd:string'),
        '', // namespace Default
        '', // soapaction
        '', // style
        '', // use
        'Borra un material'); // Descripcion

        $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
        $server->service($HTTP_RAW_POST_DATA);

?>