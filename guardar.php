<?php

require_once"php/Fechas.php";

echo "<br> file <br>";

      if (isset($_COOKIE['IdFechaMOD']))
		Fechas::Modificarfecha($_COOKIE['IdFechaMOD'],$_POST['lugar'],$_POST['fecha'],$_POST['direccion'],$_POST['precio']);
	  else
	  	$id = Fechas::Insertarfecha($_POST['lugar'],$_POST['fecha'],$_POST['direccion'],$_POST['precio']);
        
setcookie("IdFechaMOD", $_POST['id'], time() - (86400 * 30), "/");          
setcookie("LugarMOD", $_POST['lugar'], time() - (86400 * 30), "/");          
setcookie("FechaMOD", $_POST['fecha'], time() - (86400 * 30), "/");          
setcookie("DireMOD", $_POST['direccion'], time() - (86400 * 30), "/");          
setcookie("PrecioMOD", $_POST['precio'], time() - (86400 * 30), "/");          

$valid_file = true;

//Cargo las imagenes para las FECHAS
//if they DID upload a file...
if($_FILES['fileImg']['name'])
{
	//if no errors...
	if(!$_FILES['fileImg']['error'])
	{
		//now is the time to modify the future file name and validate the file
		$new_file_name = strtolower($_FILES['fileImg']['tmp_name']); //rename file
		if($_FILES['fileImg']['size'] > (1024000)) //can't be larger than 1 MB
		{
			$valid_file = false;
			$message = 'Oops!  Your file\'s size is to large.';
		}
		
		//if the file has passed the test
		if($valid_file)
		{
			//move it to where we want it to be
			move_uploaded_file($_FILES['fileImg']['tmp_name'], './imagenes/Fechas/'.$id.'.jpg');
			$message = 'Congratulations!  Your file was accepted.';
		}
	}
	//if there is an error...
	else
	{
		//set that to be the returned message
		$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['fileImg']['error'];
	}
}

header('Location: Login.php');
?>