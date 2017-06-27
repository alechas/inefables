
<div align="center" style="align-content: center;  height: 10px; width: 50%; margin-left: 25%">
<div>

Biografía
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
<div align="center">

Cargar fecha
<input type="text" id="Lugar" placeholder= 'Lugar'>
<input type="datetime-local" id="fecha">
<input type="text" id="direccion" placeholder= 'Dirección'>
<input type="number" id="precio" placeholder= 'Precio'>

<input name="flayer" id="flayer" type="file" />

<button onclick='CargarFecha()' class='w3-button w3-round w3-green w3-opacity w3-hover-opacity-off' style='padding:3px 50px'> Cargar </button><br>
</div>

<br>

Fechas

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
          <th align="center"></th>
          <th align="center"></th>
        </tr> 
        </thead>
  <script type="text/javascript" src="FuncionesJava.js"></script>

  <?php
  require_once "php\\fechas.php";
  $fechas = Fechas::TraerTodosLasFechas();
  //Obtengo y muestro los materiales    
  foreach ($fechas as $fec){

    $btnMod = "Fechas($fec->idFecha,'$fec->lugar',$fec->fecha,'$fec->direccion','$fec->precio')";
    echo  "<tr>
            <td><i class='fa fa-user w3-text-blue w3-large'></i></td>
            <td align='center'>$fec->idFecha</td>
            <td align='center'>$fec->lugar</td>
            <td align='center'>$fec->fecha</td>
            <td align='center'>$fec->direccion</td>
            <td align='center'>$fec->precio</td>
            <td align='center'><button onclick='Borrar($fec->idFecha)' class='w3-button w3-round w3-red w3-hover-blue w3-opacity w3-hover-opacity-off' style='padding:3px 10px'>Eliminar</button>
            <button onclick=$btnMod class='w3-button w3-round w3-green w3-opacity w3-hover-blue w3-hover-opacity-off' style='padding:3px 10px'>Modificar</button></td>
          </tr>
          " ;

  }

  ?>
        </table>
        </div>
    </div>

</div>