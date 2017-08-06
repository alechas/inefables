<!DOCTYPE html>
<html class="no-js" lang="es" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Inefables</title>
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700'>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script type="text/javascript" src="js/FuncionesJS.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet prefetch' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/css/foundation.min.css"/>
<link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/micss.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animated.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.10/clipboard.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<style text="text/javascript">

    body { 
           background-image: url("imagenes/fondoF2.jpg");
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

    #bio {
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
<div class="navbar-fixed-top">
<button id="nav-toggle" class="menu-fixed" style="size: 10%;"></button>

<nav id="navDemo" onclick="myFunction()">
  <a href="#biografia"><i class="fa fa-file-text"></i></a>
  <a href="#shows"><i class="fa fa-calendar"></i></a>
  <a href="#galeria"><i class="fa fa-file-photo-o"></i></a>
  <a href="#contacto"><i class="fa fa-info"></i></a>
</nav>
</div>
<div  class="full" align="center">

<img src='imagenes/ine.gif' height='20%' width='40%'  style="float:right;">
  <br><br><br><br>
<img src='imagenes/yallega.gif' style="margin-left: 5%;" height='30%' width='50%' class="animated infinite pulse" style="animation-delay: 0.9s;">
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

<img src='imagenes/shows.png' height='50%' width='70%' class="animated infinite pulse">
<br>

<div class='row'>
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
<br><article class='card'>
  <header class='card__thumb'>
    <img src='imagenes\Fechas\\$fec->idFecha.jpg'>
  </header>
  <date class='card__date'>
    <span class='card__date__day'>$fdate</span>
    <br/>
    <span class='card__date__month'>$fdate</span>
  </date>
  
  <div class='card__body'>
    <div class='card__category'><a href='#'>$fec->lugar</a></div>
    <h2 class='card__title'><a href='#'>Descrip 1</a></h2>
    <div class='card__subtitle'></div>
    <p class='card__description'>$fec->descripcion<br>$ $fec->precio<br>$fec->direccion</p>
  </div>
  
</article>";
}
?>
</div>
</div>

<div class="row" id='galeria'>
<br>
<img src='imagenes/galeria.png' height='50%' width='70%' class=" animated infinite swing"  style="animation-delay: 0.3s;">

<br>

<?php

  require_once "php\\fechas.php";
// Collecto los efectos

//$efectos = Fechas::GetEfectos();
    $size = array("80", "40", "50");
    $delay = array('1','4','7','9','1.3');

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

    $aux = $delay[rand(0,4)];
    echo " ";
    $delay_act = "animation-delay: $aux"."s;";
    
    //$delay_act = "animation-delay: $delay".[rand(0,4)]."s;";
    $index_img = rand(0,2);
    $size_img = $size[$index_img];
    //echo $size_img;

    //Valido que no se repita delay
    while ( $index_img == $index_anterior) 
    {
      $index_img = rand(0,2);
    }
    $index_anterior = $index_img;

    echo "<div>";

    //Cargo imagen con distintos delay
    switch ($index_img) {
      case 0:
      if($size_img == 0)
      echo "
<img style='animation-delay: 0.3s; border-radius: 20px; width:$size_img%' data-animate-scroll='animated infinite rubberBand' src='$imgf' class='animated infinite pulse' />
";
      else
              echo "

<img style='animation-delay: 0.3s; border-radius: 20px; width:$size_img%' data-animate-scroll='animated infinite rubberBand' src='$imgf' class='animated infinite pulse' />
";

        break;
      
      case 1:

      echo "

<img style='animation-delay: 0.5s; border-radius: 20px; width:$size_img%' data-animate-scroll='animated infinite rubberBand' src='$imgf' class='animated infinite pulse' />
";
        break;
      case 2:
      echo "

<img style='animation-delay: 0.9s; border-radius: 20px; width:$size_img%' data-animate-scroll='animated infinite rubberBand' src='$imgf' class='animated infinite pulse' />
";
        break;
    }

    echo "</div>";

    }
    $dirint->close();
?>

</div>


<div id="escuchanos">
<div class=" animated infinite pulse">
<br>
<img src='imagenes/escuchanos.png' height='50%' width='70%' class=" animated infinite rubberBand" style="margin-top: 15px margin-left: 15px; float:left;" >
</div>
<br>
  <div id="container_player">

  </div>

<!-- Footer -->


</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/js/foundation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/plugins/ScrollToPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/plugins/EaselPlugin.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/components/prism-core.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/components/prism-css.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/components/prism-markup.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/themes/prism-okaidia.min.css" media="screen" rel="stylesheet" type="text/css">

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