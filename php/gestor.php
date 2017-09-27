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
					<div align = 'center' height=600px class='w3-container w3-center w3-animate-bottom' style='background: radial-gradient(#fff 50%, #dfdfdf 90%, #d5d6d6 99%);' id='biografia2' >
					  <div class='w3-content' align = 'center' height=600px>
					    <div id='biografia' align = 'center' height=600px>
					    <img src='imagenes/biografia.png' width=650px class=' animated infinite swing'>
					      <div height=550px style='border-radius: 8px; width:80%' align = 'center' > 
					      				

 
					      	<b id='biog'>";

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

			echo "     </b> <br><br><br><br><br>
<br><br><br>
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