<?php
	
	class Archivos
	{

		public static function CargarArchivoTexto($path)
		{
			$fichero = array();

			$a = fopen('./archivos/'.$path, "r");

			while(!feof($a))
			{
				$arr = explode("-", fgets($a));

				echo $arr[0]."<br>";
			}

			fclose($a);
		}
	}
?>