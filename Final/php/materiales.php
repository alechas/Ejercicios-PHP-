<?php

require_once"AccesoDatos.php";

class Material
{
	public $idMat;
	public $nombre;
	public $precio;
	public $cantidad;
	public $tipo;

	public static function InsertarMaterial($nombre,$precio,$tipo)
	 {

	 			//Obtengo todos los Materials
	 			$material = Material::TraerUnMaterialNombre($nombre);
	 			//echo $material;
				if ($material->idMat == "") 
				{

					$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 

					$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO `materiales`(`nombre`, `precio`, `cantidad`, `tipo`) VALUES('$nombre','$precio','$cantidad','$tipo')");
					$consulta->execute();
					//return $objetoAccesoDato->RetornarUltimoIdInsertado();
				}

	 }

	public static function BorrarMaterial($idMat)
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
			delete 
			from materiales			
			WHERE idMat=:idMat");	
			$consulta->bindValue(':idMat',$idMat, PDO::PARAM_INT);		
			$consulta->execute();
			//return $consulta->rowCount();

	 }


	 public static function ModificarMaterial($idMat, $nombre, $precio, $cantidad, $tipo)
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				//$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE 'Materials' set estado=:estado where patente=:patente");
				$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE `materiales` SET `nombre`=:nombre , `precio`=:precio, `cantidad`=:cantidad , `tipo`=:tipo where idMat=:idMat");

				$consulta->bindValue(':idMat',$idMat, PDO::PARAM_INT);
				$consulta->bindValue(':nombre',$nombre, PDO::PARAM_INT);
				$consulta->bindValue(':precio',$precio, PDO::PARAM_INT);
				$consulta->bindValue(':cantidad',$cantidad, PDO::PARAM_INT);
				$consulta->bindValue(':tipo',$tipo, PDO::PARAM_INT);
				$consulta->execute();		
				//return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }

	public static function TraerTodosLosMaterials()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		//$consulta=$objetoAccesoDato->RetornarConsulta("select patente, marca,color,estado from Materials");
		//$consulta=$objetoAccesoDato->RetornarConsulta("SELECT * FROM `Materials`");
		$consulta=$objetoAccesoDato->RetornarConsulta("SELECT `idMat`, `nombre`, `precio`, `cantidad`, `tipo` FROM `materiales`");
		$consulta->execute();
		//var_dump($consulta->fetchall(PDO::FETCH_CLASS,"Material"));
		return $consulta->fetchall(PDO::FETCH_CLASS,"Material");
	}

	public static function CargarMarca()
	{   
    //alert("Pr");
    	//echo "Ford";
	}

	public static function TraerUnMaterial($idMat)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		//$consulta=$objetoAccesoDato->RetornarConsulta("select patente, marca,color,estado from Materials");
		//$consulta=$objetoAccesoDato->RetornarConsulta("SELECT * FROM `Materials`");
		$consulta=$objetoAccesoDato->RetornarConsulta("SELECT `idMat`, `nombre`, `precio`, `cantidad`, `tipo` FROM `materiales` WHERE idMat=:idMat");
	    $consulta->bindValue(':idMat',$idMat, PDO::PARAM_INT);
		$consulta->execute();
		//($consulta->fetchall(PDO::FETCH_CLASS,"Material"));
		return $consulta->fetchall(PDO::FETCH_CLASS,"Material");
	}

	public static function TraerUnMaterialNombre($nom)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		//$consulta=$objetoAccesoDato->RetornarConsulta("select patente, marca,color,estado from Materials");
		//$consulta=$objetoAccesoDato->RetornarConsulta("SELECT * FROM `Materials`");
		$consulta=$objetoAccesoDato->RetornarConsulta("SELECT `idMat`, `nombre`, `precio`, `cantidad`, `tipo` FROM `materiales` WHERE nombre=:nombre");
	    $consulta->bindValue(':nombre',$nom, PDO::PARAM_INT);
		$consulta->execute();
		//var_dump($consulta->fetchall(PDO::FETCH_CLASS,"Material"));
		return $consulta->fetchall(PDO::FETCH_CLASS,"Material");
	}

}
?>