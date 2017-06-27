<?php
	
	class Usuario
	{
		public static $mail;
		public $pass;
		public $tipo;

		public static function TraerTipo()
		{
			return isset($_SESSION['tipo']) ? $_SESSION['tipo'] : NULL;
		}

		public static function CargarTipo($tipo)
		{
			$_SESSION['tipo'] = $tipo;	
		}

		public static function GetMail()
		{
			return Usuario::$mail;
		}

		public static function TraerUnUsuario($ma, $pa)
		{
			$fichero = array();
			//$ficheroStr = file_get_contents('./archivos/usuarios.txt', true);
			//$fichero = str_split($ficheroStr,"&&");
			//$fichero = explode("-", fgets($ficheroStr));
			//var_dump($fichero);
			//var_dump($ficheroStr);

			$a = fopen('./archivos/usuarios.txt', "r");

			// $arr = explode("-", fgets($a));

			// foreach ($arr as $us) {
			// 	//echo "Linea<br>";
			// 	//var_dump($us);
			// 		$user = explode("=>", fgets($us));
			// 		//echo "0" . $user[0] . "<br>1" . $user[1] . "<br>2" . $user[2] . "<br>";
			// }

			while(!feof($a))
			{
				$arr = explode("-", fgets($a));

				//echo $arr[0]."<br>".$arr[1]."<br>";
				//echo $ma."<br>".$pa."<br>";

				//if(count($arr) > 1)
				//{
						//Valido el mail y la contraseña y devuelvo el tipo, si el tipo esta vacio, 
						//quiere decir que no encontro nada.
						//echo $arr[0] . $ma . $arr[1] . $pa;
						if($arr[0] == $ma && $arr[1] == $pa)
						{
							//return $arr[2];
							break;
						}
				//}
			}

			fclose($a);

			return $arr;
			echo $arr;
		}
	}
?>