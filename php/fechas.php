<?php

//require_once"AccesoDatos.php";
require_once"/home/u638809628/public_html/php/AccesoDatos.php";

class Fechas
{
	public $idFecha;
	public $lugar;
	public $fecha;
	public $direccion;
	public $precio;
	public $titulo;
	public $descripcion;
	public $link_lugar;
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
		public static function GetTitulo()
		{
			return Fechas::$titulo;
		}
		public static function GetDescripcion()
		{
			return Fechas::$descripcion;
		}

	public static function Insertarfecha($lugar,$fecha,$direccion,$precio)
	 {


					$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 

					$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO `fecha`(`lugar`, `fecha`, `direccion`, `precio`, `descripcion`, `titulo`) VALUES('$lugar','$fecha','$direccion','$precio','$descripcion','$titulo')");
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


	 public static function Modificarfecha($idfecha, $lugar,$fecha,$direccion,$precio,$descripcion,$titulo)
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				//$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE 'fechas' set estado=:estado where patente=:patente");
				$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE `fecha` SET `lugar`=:lugar , `fecha`=:fecha, `direccion`=:direccion , `precio`=:precio , `descripcion`=:descripcion , `titulo`=:titulo where idfecha=:idfecha");

				$consulta->bindValue(':idfecha',$idfecha, PDO::PARAM_INT);
				$consulta->bindValue(':lugar',$lugar, PDO::PARAM_INT);
				$consulta->bindValue(':fecha',$fecha, PDO::PARAM_INT);
				$consulta->bindValue(':direccion',$direccion, PDO::PARAM_INT);
				$consulta->bindValue(':precio',$precio, PDO::PARAM_INT);
				$consulta->bindValue(':descripcion',$descripcion, PDO::PARAM_INT);
				$consulta->bindValue(':titulo',$titulo, PDO::PARAM_INT);
				$consulta->execute();		
				//return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }

	public static function TraerTodosLasFechas()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		//$consulta=$objetoAccesoDato->RetornarConsulta("select patente, marca,color,estado from fechas");
		//$consulta=$objetoAccesoDato->RetornarConsulta("SELECT * FROM `fechas`");
		$consulta=$objetoAccesoDato->RetornarConsulta("SELECT `idFecha`, `lugar`, `fecha`, `direccion`, `precio`, `descripcion`, `titulo` FROM `fecha`");
		$consulta->execute();
		//var_dump($consulta->fetchall(PDO::FETCH_CLASS,"fecha"));
		return $consulta->fetchall(PDO::FETCH_CLASS,"Fechas");
	}

	public static function TraerUnafecha($idfecha)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		//$consulta=$objetoAccesoDato->RetornarConsulta("select patente, marca,color,estado from fechas");
		//$consulta=$objetoAccesoDato->RetornarConsulta("SELECT * FROM `fechas`");
		$consulta=$objetoAccesoDato->RetornarConsulta("SELECT `idFecha`, `lugar`, `fecha`, `direccion`, `precio`, `descripcion`, `titulo` FROM `fecha` WHERE idfecha=:idfecha");
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

}
?>