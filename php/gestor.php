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
					<div align = 'center' style='background-color:#fb9fcd class='w3-container w3-center w3-animate-bottom' id='biografia2'>
					  <div class='w3-content' align = 'center'>
					    <div align = 'center'>
					      <div style='border-radius: 8px; width:80%' align = 'center' id='biografia'> 
					      				<img src='imagenes/biografia.png' height='50%' width='70%' class=' animated infinite swing'>
<br><br>
 
					      	<b>";

				$archivo = "./archivos/Biografia.txt";
				$handle = fopen($archivo, "r"); // Abris el archivo


				while(! feof($handle))
				  {
				  echo fgets($handle). "<br />";
				  }
				fclose($file);
				//$contenido = fread ($handle, filesize ($archivo)); //Lees el archivo
				// foreach ($contenido as $row) 
				// {
				// 	echo $row."<br>";
				// }
				////echo $contenido; // Mostras el contenido del txt en el textarea

			echo "     </b>
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