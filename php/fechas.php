<?php

require_once"AccesoDatos.php";

class Fechas
{
	public $idFecha;
	public $lugar;
	public $fecha;
	public $direccion;
	public $precio;

		public static function GetIdFecha()
		{
			return Fechas::$idFecha;
		}
		public static function GetLugar()
		{
			return Fechas::$lugar;
		}
		public static function GetFecha()
		{
			return Fechas::$fecha;
		}
		public static function GetDireccion()
		{
			return Fechas::$direccion;
		}
		public static function GetPrecio()
		{
			return Fechas::$precio;
		}

	public static function Insertarfecha($lugar,$fecha,$direccion,$precio)
	 {


					$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 

					$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO `fecha`(`lugar`, `fecha`, `direccion`, `precio`) VALUES('$lugar','$fecha','$direccion','$precio')");
					$consulta->execute();
					return $objetoAccesoDato->RetornarUltimoIdInsertado();

	 }

	public static function BorrarFecha($idfecha)
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
			delete 
			from fecha	
			WHERE idfecha=:idfecha");	
			$consulta->bindValue(':idfecha',$idfecha, PDO::PARAM_INT);		
			$consulta->execute();
			return $consulta->rowCount();

	 }


	 public static function Modificarfecha($idfecha, $lugar,$fecha,$direccion,$precio)
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				//$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE 'fechas' set estado=:estado where patente=:patente");
				$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE `fecha` SET `lugar`=:lugar , `fecha`=:fecha, `direccion`=:direccion , `precio`=:precio where idfecha=:idfecha");

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
		$consulta=$objetoAccesoDato->RetornarConsulta("SELECT `idFecha`, `lugar`, `fecha`, `direccion`, `precio` FROM `fecha`");
		$consulta->execute();
		//var_dump($consulta->fetchall(PDO::FETCH_CLASS,"fecha"));
		return $consulta->fetchall(PDO::FETCH_CLASS,"Fechas");
	}

	public static function TraerUnafecha($idfecha)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		//$consulta=$objetoAccesoDato->RetornarConsulta("select patente, marca,color,estado from fechas");
		//$consulta=$objetoAccesoDato->RetornarConsulta("SELECT * FROM `fechas`");
		$consulta=$objetoAccesoDato->RetornarConsulta("SELECT `idFecha`, `lugar`, `fecha`, `direccion`, `precio` FROM `fecha` WHERE idfecha=:idfecha");
	    $consulta->bindValue(':idfecha',$idfecha, PDO::PARAM_INT);
		$consulta->execute();
		//($consulta->fetchall(PDO::FETCH_CLASS,"fecha"));
		return $consulta->fetchall(PDO::FETCH_CLASS,"Fechas");
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

	public static function GetEfectos()
	{
		$efectos = array(
			"<div class='panel' data-animate-scroll='{'alpha': '0',
                    'y':'50', 
                    'duration': '1.75',
                    'scaleX': '0',
                    'scaleY': '0',
                    'ease': 'Elastic.easeIn'}'>"
,
"<div class='panel' data-animate-scroll='{'x': '100',
                    'y': '0', 
                    'alpha': '0', 
                    'duration': '.5'}'>"
,
"<h5 data-animate-scroll='{'x': '-20', 
                    'alpha': '0', 
                    'duration': '1.5'}'>Panel Title</h5>"
,
"<div class='panel' data-animate-scroll='{'x': '-300', 
                    'y': '-200', 
                    'scaleX': '0.85',
                    'scaleY': '0.85', 
                    'alpha': '0', 
                    'duration': '2',
                    'rotationY':'720',
                    'rotationX':'45',
                    'rotation':'45',
                    'z':'-30'}'>"
,
"<div class='panel' data-animate-scroll='{'x': '100', 
                    'y':'100',
                    'rotation':'-25',
                    'alpha': '0', 
                    'duration': '1.5',
                    'scaleX': '0',
                    'scaleY': '0'}'>"
,					
"<div class='panel' data-animate-scroll='{'scaleX': '0.1',
                    'scaleY': '0.1',
                    'rotation': '-360', 
                    'alpha': '0', 
                    'duration': '2'}'>"

,
"<div class='panel' data-animate-scroll='{'alpha': '0', 
                    'duration': '2',
                    'rotationX':'45',
                    'rotationY':'-45',
                    'z':'-30'}'>"
,
"<div class='panel' data-animate-scroll='{'alpha': '0', 
                    'duration': '2',
                    'rotationX':'45',
                    'z':'-30'}'>"
,
"<div class='panel' data-animate-scroll='{'alpha': '0', 
                    'duration': '2',
                    'rotationY':'45',
                    'z':'-30'}'>"

					
					);

		return $efectos;
	}

}
?>