<!DOCTYPE html>
<html class="no-js" lang="es" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="animate-scroll demo page"/>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>


<title>Inefables</title>
  
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700'>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script type="text/javascript" src="js/FuncionesJS.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet prefetch' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/css/foundation.min.css"/>
<link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

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
body,html{
height:100%; /*Siempre es necesario cuando trabajamos con alturas*/
}
  @font-face 
  {
    font-family: Badaboom;
    src: url(BADABB_.TTF);
  }
  
    body { 
           width: 100%;

         }
    .full {  
             display: block;
             border-collapse:collapse;  
             
          }
    .topFont
    {
    font-style: impact;
    }
    p {
		font-family: 'Permanent Marker', cursive;
		font-size: 200%;
		font-style: italic;
    }
    b {
		letter-spacing: 3px;
		font-family: 'Badaboom';
		font-size: 100%;
		font-style: italic;
		color: #006bb3;
		margin-left: 10%;
		margin-top: 10%;
		margin-right: 10%;
		text-align: center;
		width: all;
    }

    .bb {
		letter-spacing: 3px;
		font-family: 'Permanent Marker', cursive;
		font-size: 100%;
		font-style: italic;
		color: black;
		text-align: center;
		width: all;
    }

    #bio {
    font-family: 'Badaboom';
    font-size: 100%;
    font-style: italic;
    color: #006bb3;
    }

    a {
    font-family: 'Badaboom';
    font-size: 200%;
    }
    h5 {
    font-family: 'Badaboom';
    font-size: 200%;
    }
    h1 {
    font-family: 'Badaboom';
    font-size: 300%;
    }

</style>
  <nav class="nav">
    <ul>
      <li><a href="#shows" onclick="CerrarNav()" >Shows</a></li>
      <li><a href="#escuchanos">Escuchanos</a></li>
      <li><a href="#galeria">Galeria</a></li>
      <li><a href="#biog">Biografia</a></li>
    </ul>
</nav>

</head>

<body class="body" >
<!-- Navbar -->

<div  class="full" align="center">

  <div style="background-image: url(imagenes/fondoF2.jpg);">
    <img src='imagenes/ine.gif' height='20%' width='40%'  style="float:right;">
    <br><br><br><br>
    <img src='imagenes/yallega.gif' style="margin-left: 5%;" height='30%' width='50%' class="animated infinite pulse" style="animation-delay: 0.9s;">
    <br><br>

  </div>
</div>
<!-- Cargar secciones -->
<div id="Cuerpo" width="100%" height="100%" onclick="myFunctionBody()" align="center" >

  <div id='shows' width="100%" height="100%" style="background: radial-gradient(#fff 80%, #dfdfdf 90%, #d5d6d6 99%); background-size: 100%;">
    <br><br>

    <img src='imagenes/shows.png'  width=650px style="z-index: 1;" class="animated infinite pulse">
    <br><br>

    <?php 
    //require_once "php\\fechas.php";
    require_once"/home/u638809628/public_html/php/fechas.php";
    $fechas = Fechas::TraerTodosLasFechas();
    //var_dump($fechas);
    //Obtengo y muestro los materiales    
    foreach ($fechas as $fec){

      $date = date_create($fec->fecha);
      $fdate = date_format($date, 'd/m');
      $ftime = date_format($date, 'g:i A');

              echo "
          <br><article class='card'>
            <header class='card__thumb'>
              <img src='imagenes\Fechas\\$fec->idFecha.jpg'>
            </header>
            
            <div class='card__body'>
              <div class='card__category'><a href=$fec->link_lugar>$fdate - $fec->lugar</a></div>
              <h2 class='card__title'><div class='bb'>$fec->titulo</div></h2>
              <p class='card__description'>$fec->descripcion<br>$  $fec->precio<br>$fec->direccion</p>
            </div>
            
          </article>";
          }
          ?>
    <br><br><br><br><br><br>
  </div>

  <div id="escuchanos"  width="100%" height="90%" style="background-image: url(imagenes/fondoF2.jpg); height:300px width:300px;">
      <br>
      <img src='imagenes/escuchanos.png' width=650px class=" animated infinite rubberBand" style="margin-top: 15px margin-left: 15px; float:left;" >
    <br>
	<br>
	<br>
	<div id="container_player">
     <script>$("#container_player").load("reproductor.html");</script>
	prueba
	</div>
<!--	<script>
			 $("#container_player").load("ReproductorMP3/index.html");
	</script>
		
	</div>
-->
  <!-- Footer -->

    <!-- VIDEO -->
	<!--
	<div id="video" width="70%" height="90%" style="background: radial-gradient(#fff 80%, #dfdfdf 90%, #d5d6d6 99%);">
	<br>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/leVJsqsYlno?rel=0" frameborder="0" allowfullscreen style="-webkit-box-shadow: 5px 19px 100px -10px rgba(0,0,0,0.75);
		-moz-box-shadow: 5px 19px 100px -10px rgba(0,0,0,0.75);
		box-shadow: 5px 19px 100px -10px rgba(0,0,0,0.75);
		"></iframe>
	<br>
	<br>
	</div>
	<!-- VIDEO -->

	</div>


  <div style="background-image: url(imagenes/fondoF2.jpg);">
    <div  id='galeria' >
      <br>
      <img src='imagenes/galeria.png' width=650px class=" animated infinite swing"  style="animation-delay: 0.3s;">

      <br>

      <?php
        //require_once"/home/u638809628/public_html/php/fechas.php";
		  $directory="imagenes/Galeria";
          $dirint = dir($directory);
          $cont = 0;
          while (($archivo = $dirint->read()) !== false)
          {
      if($archivo == '.' || $archivo == '..')
        continue;


    $imgf = $directory.'\\'.$archivo;
    $cont++;
            setcookie("imagen", $imgf, time() - (86400 * 30), "/"); 

            setcookie("imagen", $imgf, time() + (86400 * 30), "/"); 

$pagina_inicio = file_get_contents('CodAnim/'.rand(1, 5).'.php');
		//echo "<br>";
echo str_replace("xxx", $imgf, $pagina_inicio);

          }
          $dirint->close();
      ?>
      <br><br>
    </div>
  </div>


    <?php 
      //require_once"php\gestor.php";
      require $_SERVER['DOCUMENT_ROOT']."/php/gestor.php";
      Gestor::CargarSecciones();
    ?>

</div>
</div>
</body>
<footer width="100%" height="100%">
		<a href="https://www.facebook.com/InefablesRock/?fref=ts">
		  <img style="margin-left:7%;" src='imagenes/footer/facebook.png' width='10%'  style="float:right;">
		</a>
    <a href="https://twitter.com/MusicaInefables" target="_blank">
		<img style="margin-left:2%;" src='imagenes/footer/twitter.png' width='10%'  style="float:right;">
	</a>
    <a href="https://www.instagram.com/inefablesmusica/" target="_blank">
		<img style="margin-left:2%;" src='imagenes/footer/instragram.png' width='10%'  style="float:right;">
	</a>
    <a href="https://www.spotify.com" target="_blank">
		<img style="margin-left:2%;" src='imagenes/footer/spotify.ico' width='10%'  style="float:right;">
	</a>
</footer>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/js/foundation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/plugins/ScrollToPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/plugins/EaselPlugin.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/components/prism-core.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/components/prism-css.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/components/prism-markup.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/themes/prism-okaidia.min.css" media="screen" rel="stylesheet" type="text/css">

<script type="text/javascript" src="animate-scroll.js"></script>

<script type="text/javascript">
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

    <script type="text/javascript" src="js/index.js"></script>


</html>