<!DOCTYPE html>
<html class="no-js" lang="es" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Inefables Demo</title>
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700'>

<link rel="stylesheet" href="css/foundation.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script type="text/javascript" src="FuncionesJS.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/micss.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animated.css">

<style text="text/javascript">

    body { 
           background-image: url("imagenes/fondoComp.jpg");
           background-size: 100% ;
         }
    .full {  
             display: block;
             border-collapse:collapse;  
             margin: 20px;
          }
    .topFont
    {
    font-style: impact;
    }
    p {
    font-family: 'Gloria Hallelujah', cursive;
    font-size: 200%;
    font-style: italic;
    }
    b {
    font-family: 'Gloria Hallelujah', cursive;
    font-size: 100%;
    font-style: italic;
    color: #006bb3;
    }

    a {
    font-family: 'Gloria Hallelujah', cursive;
    font-size: 200%;
    }
    h5 {
    font-family: 'Gloria Hallelujah', cursive;
    font-size: 200%;
    }
    h1 {
    font-family: 'Gloria Hallelujah', cursive;
    font-size: 300%;
    }
</style>

</head>

<body onload="OnLoad()" class="body">
<!-- Navbar -->
<button id="nav-toggle" class="menu-fixed"></button>

<nav id="navDemo" onclick="myFunction()">
  <a href="#biografia"><i class="fa fa-file-text"></i></a>
  <a href="#shows"><i class="fa fa-calendar"></i></a>
  <a href="#galeria"><i class="fa fa-file-photo-o"></i></a>
  <a href="#contacto"><i class="fa fa-info"></i></a>
</nav>

<div  class="full" align="center">
  <br><br><br><br>
  <img src="imagenes/asset/Asset 2.png" height='30%' width='50%' class=" animated infinite pulse" />
  <img src="imagenes/asset/Asset 5.png" height='5%' width='15%' class=" animated infinite pulse" style="animation-delay: 0.3s;"/>
</div>
<!-- Cargar secciones -->

<div id="Cuerpo" onclick="myFunctionBody()" align="center" >

<div>
<br><br>

    <?php 
      require_once"php\gestor.php";
      //require_once"/home/u506486065/public_html/php/gestor.php";
      Gestor::CargarSecciones();
    ?>
</div>

<div class="w3-medium" id='shows' >
<br><br><br><br>


<img src='imagenes/shows.png' height='50%' width='70%' class=" animated infinite shake">

  <?php
  require_once "php\\fechas.php";
  $fechas = Fechas::TraerTodosLasFechas();
  //var_dump($fechas);
  //Obtengo y muestro los materiales    
  foreach ($fechas as $fec){

    $date = date_create($fec->fecha);
    $fdate = date_format($date, 'd/m/y');
    $ftime = date_format($date, 'g:i A');

echo "
<div class='row'>
<div class='panel'data-animate-scroll='{'x': '-100','y': '0', 'alpha': '0', 'duration': '1.5'}'>
<h2><b>$fec->lugar</b></h2>
<p><br>Entrada $$fec->precio</p>
<p>$fec->direccion</p>
<p>$fdate - $ftime</p>
<img src='imagenes\Fechas\\$fec->idFecha.jpg' alt='Foto' height='588' width='588' style='opacity: 1;'>
</div>
</div>";
}
?>
</div>

<div class="row" id='galeria'>
<br>
<img src='imagenes/galeria.png' height='50%' width='70%' class=" animated infinite swing">

<br>

<?php

  require_once "php\\fechas.php";
// Collecto los efectos

//$efectos = Fechas::GetEfectos();
    $size = array("80", "40", "50");

    $directory="imagenes\Galeria";
    $dirint = dir($directory);
    $cont = 0;
    while (($archivo = $dirint->read()) !== false)
    {
      if($archivo == '.' || $archivo == '..')
        continue;

//$efecto = array_rand($efectos,1);
//var_dump($efectos);

$imgf = $directory.'\\'.$archivo;
    $cont++;

    $index_img = rand(0,2);
    $size_img = $size[$index_img];
    //echo $size_img;
      echo "

<img style='border-radius: 8px; width:$size_img%' data-animate-scroll='animated infinite rubberBand' src='$imgf'  />
";

    }
    $dirint->close();
?>

</div>


<div id="escuchanos">
<div class=" animated infinite pulse">
<br>
<img src='imagenes/escuchanos.png' height='50%' width='70%' class=" animated infinite rubberBand" style="margin-top: 15px margin-left: 15px" >
</div>
<br>
  <div id="container_player">

  </div>

<!-- Footer -->


</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/js/foundation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/plugins/ScrollToPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/plugins/EaselPlugin.min.js"></script>
<script src="animate-scroll.js"></script>

<script>
      $(document).foundation();  
      $(document).animateScroll();
      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);


// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

function myFunctionBody() 
{
    var x = document.getElementById("navDemo");
    x.className = x.className.replace(" w3-show", "");
}
function animationHover(element, animation){
    element = $(element);
    element.hover(
        function() {
            element.addClass('animated ' + animation);        
        },
        function(){
            //wait for animation to finish before removing classes
            window.setTimeout( function(){
                element.removeClass('animated ' + animation);
            }, 2000);         
        });
}
function OnLoad() 
{
     $("#container_player").load("reproductor.html");
}

</script>

    <script src="js/index.js"></script>

</body>

</html>