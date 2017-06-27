<?php

require_once"AccesoDatos.php";

class Fechas
{
	public $idFecha;
	public $lugar;
	public $fecha;
	public $direccion;
	public $precio;

	public static function Insertarfecha($lugar,$fecha,$direccion,$precio)
	 {


					$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 

					$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO `fecha`(`lugar`, `fecha`, `direccion`, `precio`) VALUES('$lugar','$fecha','$direccion','$precio')");
					$consulta->execute();
					return $objetoAccesoDato->RetornarUltimoIdInsertado();

	 }

	public static function Borrarfecha($idfecha)
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
			delete 
			from fechas			
			WHERE idfecha=:idfecha");	
			$consulta->bindValue(':idfecha',$idfecha, PDO::PARAM_INT);		
			$consulta->execute();
			//return $consulta->rowCount();

	 }


	 public static function Modificarfecha($idfecha, $lugar,$fecha,$direccion,$precio)
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				//$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE 'fechas' set estado=:estado where patente=:patente");
				$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE `fechas` SET `lugar`=:lugar , `fecha`=:fecha, `direccion`=:direccion , `precio`=:precio where idfecha=:idfecha");

				$consulta->bindValue(':idfecha',$idfecha, PDO::PARAM_INT);
				$consulta->bindValue(':lugar',$lugar, PDO::PARAM_INT);
				$consulta->bindValue(':fecha',$fecha, PDO::PARAM_INT);
				$consulta->bindValue(':direccion',$direccion, PDO::PARAM_INT);
				$consulta->bindValue(':precio',$precio, PDO::PARAM_INT);
				$consulta->execute();		
				//return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }

	public static function TraerTodosLasFechas()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		//$consulta=$objetoAccesoDato->RetornarConsulta("select patente, marca,color,estado from fechas");
		//$consulta=$objetoAccesoDato->RetornarConsulta("SELECT * FROM `fechas`");
		$consulta=$objetoAccesoDato->RetornarConsulta("SELECT `idfecha`, `lugar`, `fecha`, `direccion`, `precio` FROM `fecha`");
		$consulta->execute();
		//var_dump($consulta->fetchall(PDO::FETCH_CLASS,"fecha"));
		return $consulta->fetchall(PDO::FETCH_CLASS,"Fechas");
	}

	public static function TraerUnafecha($idfecha)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		//$consulta=$objetoAccesoDato->RetornarConsulta("select patente, marca,color,estado from fechas");
		//$consulta=$objetoAccesoDato->RetornarConsulta("SELECT * FROM `fechas`");
		$consulta=$objetoAccesoDato->RetornarConsulta("SELECT `idfecha`, `lugar`, `fecha`, `direccion`, `precio` FROM `fechas` WHERE idfecha=:idfecha");
	    $consulta->bindValue(':idfecha',$idfecha, PDO::PARAM_INT);
		$consulta->execute();
		//($consulta->fetchall(PDO::FETCH_CLASS,"fecha"));
		return $consulta->fetchall(PDO::FETCH_CLASS,"fecha");
	}

	// public static function TraerUnfechaNombre($nom)
	// {
	// 	$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
	// 	//$consulta=$objetoAccesoDato->RetornarConsulta("select patente, marca,color,estado from fechas");
	// 	//$consulta=$objetoAccesoDato->RetornarConsulta("SELECT * FROM `fechas`");
	// 	$consulta=$objetoAccesoDato->RetornarConsulta("SELECT `idfecha`, `nombre`, `precio`, `cantidad`, `tipo` FROM `fechas` WHERE nombre=:nombre");
	//     $consulta->bindValue(':nombre',$nom, PDO::PARAM_INT);
	// 	$consulta->execute();
	// 	//var_dump($consulta->fetchall(PDO::FETCH_CLASS,"fecha"));
	// 	return $consulta->fetchall(PDO::FETCH_CLASS,"fecha");
	// }

}
?>