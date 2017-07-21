<?php

require_once"php/Fechas.php";

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
			//Obtengo el nombre del archivo
			$directory="imagenes\Galeria";
			    $dirint = dir($directory);

		    while (($archivo = $dirint->read()) !== false)
		    {
		      if($archivo == '.' || $archivo == '..')
		        continue;
		      
		      $cont++;
			}

			$cont++;

			//move it to where we want it to be
			move_uploaded_file($_FILES['fileImg']['tmp_name'], './imagenes/Galeria/'.$cont.'.jpg');
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