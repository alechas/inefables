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
					      <div class='full' align = 'center'> <br><h1>Biografía</h1> <br>
					      	<b>";

echo "Guns N' Roses es una banda estadounidense de hard rock formada en Hollywood (Los Ángeles, California) en 1985.<br> El grupo fue fundado por Axl Rose y el guitarrista rítmico Izzy Stradlin.3<br>
<br>
La formación actual cuenta con el vocalista Axl Rose, el guitarrista rítmico Richard Fortus, <br>los tecladistas Dizzy Reed y Melissa Reese, el baterista Frank Ferrer, el bajista Duff McKagan y el guitarrista<br> líder Slash, estos dos últimos, considerados miembros clásicos de la agrupación,<br> retomaron su lugar en la banda después de 23 años.";
					    // 			$arr = array();
									// $a = fopen('./textos/biografia.txt', "r");
									// while(!feof($a))
									// {
									// 	//echo $arr."<br>";
									// 	$arr = explode("-", fgets($a));
									// 	//var_dump($arr);
									// 	echo $arr[0]."<br>";
									// }

									// fclose($a);

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