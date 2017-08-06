<?php

require_once"php/usuarios.php";
require_once"php/Fechas.php";

$queHago = isset($_POST['queHago']) ? $_POST['queHago'] : NULL;

switch ($queHago) {

    case "login":

        $tipo = Usuario::TraerUnUsuario($_POST['mail'],$_POST['pass']);
        //Si no encontro el usuario arrojo error
        if ($tipo[2] == "") 
        {
        }        	
		else
        {	
            echo "ok";
            $_SESSION['tipo'] = $tipo[2];
            $_SESSION['mail'] = $tipo[0];
            setcookie("MisUsuariosCK", $tipo[2] , time() + (86400 * 30), "/");
		}

    	break;

    case "logOut":

    	//Destruir la sesión.
		session_destroy();

    	break;

    case "BorrarCookie":
        setcookie("MisUsuariosCK", $_POST['mail'], time() - (86400 * 30), "/");
        break;

    case "ValidarLogin":

        // if ( isset($_SESSION) )
        // {   echo "val login <br>";
        //     var_dump($_SESSION);

        //     if ($_SESSION['tipo'] != 'a') 
        //     {
        //         header('http/1.0 500 ');            
        //     }
        // }
        // else
        //     header('http/1.0 500 ');            

        if ( $_COOKIE['MisUsuariosCK'] )
        {   
            $tipo = $_COOKIE['MisUsuariosCK'];

            if ($tipo[0] != 'a') 
            {
                echo "nook";
            }
            else
            {
                echo "ok";
            }
        }
        else
                echo "nook";
        break;

        case "GuardarBiografia":

            $myfile = fopen("./archivos/Biografia.txt", "w") or die("Unable to open file!");
            $txt = $_POST['bio'];
            fwrite($myfile, $txt);
            fclose($myfile);

        break;

        case "CargarFecha":

            echo  Fechas::Insertarfecha($_POST['lugar'],$_POST['fecha'],$_POST['direccion'],$_POST['precio']);
            

        break;

        case "CargarImagen":
        

        break;
        
        case "BorrarFecha":
        //var_dump($_POST);
            $row = Fechas::BorrarFecha($_POST['id']);

            if ($row > 0) 
                echo "Se borro la fecha: ".$_POST['id'];
            else
                echo "Error al borrar fecha ".$_POST['id'];

        break;

        case 'ModFecha':
//            var_dump($_POST);
            setcookie("IdFechaMOD", $_POST['id'], time() + (86400 * 30), "/");          

            $fc = Fechas::TraerUnafecha($_POST['id']);
            var_dump($fc);
            setcookie("LugarMOD", $fc[0]->lugar, time() + (86400 * 30), "/");          
            setcookie("FechaMOD", $fc[0]->fecha, time() + (86400 * 30), "/");          
            setcookie("DireMOD", $fc[0]->direccion, time() + (86400 * 30), "/");          
            setcookie("PrecioMOD", $fc[0]->precio, time() + (86400 * 30), "/");
            setcookie("DescripcionMOD", $fc[0]->descripcion, time() + (86400 * 30), "/");          

            break;

        case 'BorrarImg':

                $directory="imagenes\Galeria";
                $dirint = dir($directory);

                while (($archivo = $dirint->read()) !== false)
                {
                    if($archivo == '.' || $archivo == '..')
                        continue;
                                        
                    
                    $cont++;
                    
                    if ($cont == $_POST['cont']) {
                        $imgf = $directory.'\\'.$archivo;
                        unlink($imgf);//acá le damos la direccion exacta del archivo
                    }
                }


        break;
    }

?>