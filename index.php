<!DOCTYPE html>
<html class="no-js" lang="es" >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<title>Inefables Demo</title>
<meta name="description" content="animate-scroll demo page"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/css/foundation.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


<link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style text="text/javascript">
    body { padding:0px; margin:0px; }
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
    font-family: 'Lilita One', cursive;
    font-size: 200%;
    font-style: italic;
    }
    a {
    font-family: 'Lilita One', cursive;
    font-size: 200%;
    background-color: black;
    }
    h5 {
    font-family: 'Lilita One', cursive;
    font-size: 200%;
    }
    h1 {
    font-family: 'Lilita One', cursive;
    font-size: 300%;
    }

</style>


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right w3-hover-black " href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <p class="w3-bar-item w3-padding-large w3-hover-black"  style="width:20%">INEFABLES!</p>
    <a href="#biografia" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-hover-black" style='width:20%'>Biografía</a>
    <a href="#shows" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-hover-black" style='width:20%'>Shows</a>
    <a href="#galeria" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-hover-black" style='width:20%'>Galeria</a>
    <a href="#contacto" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-hover-black" style='width:20%'>Contácto</a>
    <!-- <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a> -->
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px" onclick="myFunction()">
  <a href="#biografia" class="w3-bar-item w3-button w3-padding-large w3-hover-black" font-size:100%;">Biografia</a>
  <a href="#shows" class="w3-bar-item w3-button w3-padding-large w3-hover-black" font-size:100%;">Shows</a>
  <a href="#galeria" class="w3-bar-item w3-button w3-padding-large w3-hover-black" font-size:100%;">Galeria</a>
  <a href="#contacto" class="w3-bar-item w3-button w3-padding-large w3-hover-black" font-size:100%;">Contácto</a>
</div>
</head>

<div  class="full" align="center">
  <br><br><br><br>
  <img src="imagenes/top.jpg"/>
</div>
<!-- Cargar secciones -->

<div id="Cuerpo" onclick="myFunctionBody()" class="full" align="center">
<div id="biografia">
<br><br>
<div  data-animate-scroll='{"alpha": "0", 
                    "duration": "2.5",
                    "rotationX":"20",
                    "z":"-30"}'>

    <?php 
      require_once"php\gestor.php";
      //require_once"/home/u506486065/public_html/php/gestor.php";
      Gestor::CargarSecciones();
    ?>
</div>
</div>

<div class="full" id='shows'>
<br><br><br><br>

<h1 align="center">Próximos Shows! </h1>

<div class="row">
<div class="panel"data-animate-scroll='{"x": "-100","y": "0", "alpha": "0", "duration": "1.5"}'>
<h5>Mana Bar - 28 Junio</h5>
<p>11PM<br>Entrada $50</p>
<img src="imagenes/manabar.jpg"/>
</div>
</div>


<div class="row">
<div class="panel"data-animate-scroll='{"x": "-100","y": "0", "alpha": "0", "duration": "1.5"}'>
<h5>Marcopollo - 23 Julio</h5>
<p>11PM<br>Entrada $50</p>
<img src="imagenes/marcopollobar.jpg"/>
</div>
</div>


<div class="row">
<div class="panel"data-animate-scroll='{"x": "-100","y": "0", "alpha": "0", "duration": "1.5"}'>
<h5>Auditorio Sur - 13 Octubre</h5>
<p>11PM<br>Entrada $50</p>
<img src="imagenes/auditoriosur.jpg"/>
</div>
</div>


<div class="row">
<div class="panel"data-animate-scroll='{"x": "-100","y": "0", "alpha": "0", "duration": "1.5"}'>
<h5 align="center">Luna Park - 1 Diciembre</h5>
<p align="center">11PM<br>Entrada $50</p>
<img src="imagenes/lunapark.jpg"/>
</div>
</div>

</div>

<div class="row" id='galeria'>
<br><br><br><br><br>
<div class="large-6 columns">
<div class="panel">

<h5 data-animate-scroll='{"x": "-20", 
                    "alpha": "0", 
                    "duration": "1.5"}'>Galeria</h5>
<p data-animate-scroll='{"x": "20", 
                    "alpha": "0", 
                    "duration": "1.5"}'><img src="imagenes/img1.png"/></p>
</div>
</div>

<div class="large-6 columns">
<div class="panel" data-animate-scroll='{"x": "-30", 
                    "y": "-20", 
                    "scaleX": "1",
                    "scaleY": "1", 
                    "alpha": "0", 
                    "duration": "2",
                    "rotationY":"720",
                    "rotationX":"45",
                    "rotation":"45",
                    "z":"-30"}'>
<p>
<img src="imagenes/img2.jpg"/>
</p>
</div>
</div>
<div class="large-6 columns">
<div class="panel" data-animate-scroll='{"x": "-300", 
                    "y": "-200", 
                    "scaleX": "0.85",
                    "scaleY": "0.85", 
                    "alpha": "0", 
                    "duration": "2",
                    "rotationY":"720",
                    "rotationX":"45",
                    "rotation":"45",
                    "z":"-30"}'>
<p>
<img src="imagenes/img3.jpg"/>
</p>
</div>
</div>
<div class="large-6 columns">
<div class="panel" data-animate-scroll='{"x": "-300", 
                    "y": "-200", 
                    "scaleX": "0.85",
                    "scaleY": "0.85", 
                    "alpha": "0", 
                    "duration": "2",
                    "rotationY":"720",
                    "rotationX":"45",
                    "rotation":"45",
                    "z":"-30"}'>
<p>
<img src="imagenes/img4.jpg"/>
</p>
</div>
</div>
<div class="large-6 columns">
<div class="panel" data-animate-scroll='{"x": "-300", 
                    "y": "-200", 
                    "scaleX": "0.85",
                    "scaleY": "0.85", 
                    "alpha": "0", 
                    "duration": "2",
                    "rotationY":"720",
                    "rotationX":"45",
                    "rotation":"45",
                    "z":"-30"}'>
<p>
<img src="imagenes/img7.jpg"/>
</p>
</div>
</div>
<div class="large-6 columns">
<div class="panel" data-animate-scroll='{"x": "-300", 
                    "y": "-200", 
                    "scaleX": "0.85",
                    "scaleY": "0.85", 
                    "alpha": "0", 
                    "duration": "2",
                    "rotationY":"720",
                    "rotationX":"45",
                    "rotation":"45",
                    "z":"-30"}'>
<p>
<img src="imagenes/img8.jpg"/>
</p>
</div>
</div>

</div>

</div>

<audio src="canc.mp3" controls="controls" type="audio/mpeg" preload="preload">
</audio>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge" id="contacto">
  <i href="https://www.facebook.com/InefablesRock/?fref=ts" target="_blank"  class="fa fa-facebook-official w3-hover-opacity"></i>
  <i href="https://twitter.com/MusicaInefables" target="_blank" class="fa fa-twitter w3-hover-opacity"></i>
  <p class="w3-medium">(02224) 472-616 / (011) 15 5742-0222</p>
  <p class="w3-medium">inefables.rock@gmail.com</p>
  <p class="w3-medium">Inefables Música</p>
</footer>


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
</script>

</html>