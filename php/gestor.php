<!DOCTYPE html "-//W3C//DTD HTML 3.2//EN">
<html>
<title>Demo Inefables</title>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />

<?php


	/**
	Clase de carga de botones
	*/
	class Gestor 
	{
		
		public static function CargarSecciones()
		{
			Gestor::SecBiografia();
			//Gestor::SecFechas();

		}

		public static function SecFechas()
		{	

			Gestor::ObtenerLineaFecha();

			Gestor::ObtenerLineaFecha();
			Gestor::ObtenerLineaFecha();
			Gestor::ObtenerLineaFecha();
			Gestor::ObtenerLineaFecha();
			Gestor::ObtenerLineaFecha();
			Gestor::ObtenerLineaFecha();
			Gestor::ObtenerLineaFecha();
			Gestor::ObtenerLineaFecha();
			Gestor::ObtenerLineaFecha();
			Gestor::ObtenerLineaFecha();
			Gestor::ObtenerLineaFecha();
			Gestor::ObtenerLineaFecha();
			Gestor::ObtenerLineaFecha();
			Gestor::ObtenerLineaFecha();
			Gestor::ObtenerLineaFecha();
			Gestor::ObtenerLineaFecha();
		}

		public static function SecBiografia()
		{
			echo "
					<div align = 'center' style='background-color:#fb9fcd class='w3-container' id='biografia'>
					  <div class='w3-content' align = 'center'>
					    <div align = 'center'>
					      <div class='full' align = 'center'><br><h1>Biografía</h1> <br>";


					    			$arr = array();
									$a = fopen('./textos/biografia.txt', "r");
									while(!feof($a))
									{
										//echo $arr."<br>";
										$arr = explode("-", fgets($a));
										//var_dump($arr);
										echo $arr[0]."<br>";
									}

									fclose($a);

			echo "
					      </div>
					    </div>
					  </div>
					</div>";				
		}

		public static function SecGaleria()
		{
			echo "
					<div align = 'center' style='background-color:#fb9fcd class='w3-container' id='galeria'>
					  <div class='w3-content' align = 'center'>
					    <div align = 'center'>
					      <div class='full' align = 'center'><br><h1>Galeria</h1> <br>";


					    			$arr = array();
									$a = fopen('./textos/biografia.txt', "r");
									while(!feof($a))
									{
										//echo $arr."<br>";
										$arr = explode("-", fgets($a));
										//var_dump($arr);
										echo $arr[0]."<br>";
									}

									fclose($a);

			echo "
					      </div>
					    </div>
					  </div>
					</div>";				

		}

		public static function ObtenerLineaFecha()
		{
					    			$arr = array();
									$a = fopen('./textos/ObtenerLineaFecha.txt', "r");
									while(!feof($a))
									{
										//echo $arr."<br>";
										$arr = explode("&", fgets($a));
										//var_dump($arr);
										echo $arr[0]."<br>";
									}

									fclose($a);
		}

	}

?>