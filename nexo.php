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

            echo Fechas::Insertarfecha($_POST['lugar'],$_POST['fecha'],$_POST['direccion'],$_POST['precio']);

        break;
    }

?>