
<div align="center" style="align-content: center;  height: 10px; width: 80%; margin-left: 10%">
<div>

<p>Biografía</p>
<textarea id = "txtbiografia" rows = "20" cols = "50">
<?php
		//Cargo la biografía
		$archivo = "./archivos/Biografia.txt";
		$handle = fopen($archivo, "r"); // Abris el archivo
		$contenido = fread ($handle, filesize ($archivo)); //Lees el archivo
		echo $contenido; // Mostras el contenido del txt en el textarea

?>

</textarea>
<button onclick='GuardarBiografia()' class='w3-button w3-round w3-green w3-opacity w3-hover-opacity-off' style='padding:3px 50px'>Grabar</button><br>



</div>

<br>
<div align="center" id="CargaFecha">

<p>Cargar fecha</p> <p id="fecha">
<?php if (isset($_COOKIE['IdFechaMOD']))
        echo $_COOKIE['IdFechaMOD'];
?>
</p>
<form action="guardar.php" method="post" enctype="multipart/form-data">

<?php
require_once getcwd()."/php/Fechas.php";

        $lugar = "";
        $fecha = "";
        $direccion = "";
        $precio = "";


      if (isset($_COOKIE['IdFechaMOD']))
      {
        //Obtengo fecha a modificar
        //$fecha = Fechas::TraerUnafecha($_COOKIE['FechaMOD']);

        //$fecM=str_replace(" ","T",$_COOKIE['FechaMOD']);

        $lugar = "value = ".$_COOKIE['LugarMOD'];

        $fecha = "value = ".str_replace(" ","T",$_COOKIE['FechaMOD']);

        $direccion = "value = ".$_COOKIE['DireMOD'];

        $precio = "value = ".$_COOKIE['PrecioMOD'];

        $descripcion = "value = ".$_COOKIE['DescripcionDES'];

      }

echo "
<input type='text' id='lugar' placeholder= 'Lugar' name = 'lugar' $lugar>
<input type='datetime-local' id='fecha' name='fecha' $fecha>
<input type='text' id='direccion' placeholder= 'Dirección' name='direccion' $direccion>
<input type='number' id='precio' placeholder= 'Precio' name='precio' $precio >
<input type='text' id='descripcion' placeholder= 'Descripción' name='descripcion' $descripcion>
<input type='text' id='link_lugar' placeholder= 'Link Lugar' name='link_lugar' $link_lugar>

<input type='file' name='fileImg' id='fileImg'>

<br>
<input type='submit' value='Cargar' name='submit'>
"

?>

</form>

</div>

<br>

<p>Fechas</p>

    <div class="w3-panel" align="center">
      <div class="w3-row-padding" style="text-align: center;">
        
        <table align="center" class='w3-table-all w3-card-4'>
        <thead>
        <tr bgcolor="#e65d00">
          <th align="center">        </th>       
          <th align="center">ID</th>       
          <th align="center">Lugar</th>
          <th align="center">Fecha</th>
          <th align="center">Dirección</th>
          <th align="center">Precio</th>
          <th align="center">Descripción</th>
          <th align="center">Link Lugar</th>
          <th align="center"></th>
          <th align="center"></th>
        </tr> 
        </thead>
  <script type="text/javascript" src="FuncionesJava.js"></script>

  <?php
  require_once "php\\fechas.php";
  $fechas = Fechas::TraerTodosLasFechas();
  //var_dump($fechas);
  //Obtengo y muestro los materiales    
  foreach ($fechas as $fec){
    
    // $lugAux=str_replace(" ","&&",$fec->lugar);
    // $fecAux=str_replace(" ","&&",$fec->fecha);
    // $dirAux=str_replace(" ","&&",$fec->direccion);

    // $btnMod = "ModFechas($fec->idFecha,$lugAux,$fecAux,$dirAux,$fec->precio)";
    //$btnMod = "ModFechas($fec->idFecha)";
    
    echo  "<tr>
            <td><img src='imagenes\Fechas\\$fec->idFecha.jpg' alt='Foto' height='84' width='84'></td>
            <td align='center'>$fec->idFecha</td>
            <td align='center'>$fec->lugar</td>
            <td align='center'>$fec->fecha</td>
            <td align='center'>$fec->direccion</td>
            <td align='center'>$fec->precio</td>
            <td align='center'>$fec->descripcion</td>
            <td align='center'>$fec->link_lugar</td>
            <td align='center'><button onclick='BorrarFecha($fec->idFecha)' class='w3-button w3-round w3-red w3-hover-blue w3-opacity w3-hover-opacity-off' style='padding:3px 10px'>Eliminar</button>
            <button onclick='ModFecha($fec->idFecha)' class='w3-button w3-round w3-green w3-opacity w3-hover-blue w3-hover-opacity-off' style='padding:3px 10px'>Modificar</button></td>
          </tr>
          " ;

  }

  ?>
        </table>
        </div>
    </div>

<p>Galeria</p>
<div>
<?php

$directory="imagenes\Galeria";
    $dirint = dir($directory);
$cont = 0;
    while (($archivo = $dirint->read()) !== false)
    {
      if($archivo == '.' || $archivo == '..')
        continue;

$imgf = $directory.'\\'.$archivo;
    $cont++;
$btn = "BorrarImg(".$cont.")";
      echo "
<div class='large-6 columns'>
<div class='panel' data-animate-scroll='{'x': '-300', 
                    'y': '-200', 
                    'scaleX': '0.85',
                    'scaleY': '0.85', 
                    'alpha': '0', 
                    'duration': '2',
                    'rotationY':'720',
                    'rotationX':'45',
                    'rotation':'45',
                    'z':'-30'}'>
<p>
<img src='$imgf'/>
</p>
<button onclick=$btn class='w3-button w3-round w3-red w3-hover-blue w3-opacity w3-hover-opacity-off' style='width: 100%'>Eliminar</button>
</div>
</div>";

    }
    $dirint->close();

?>

<form action="guardarGal.php" method="post" enctype="multipart/form-data">
<input type='file' name='fileImg' id='fileImg'>
<input type='submit' value='Cargar' name='submit'>

</form>

</div>
</div>