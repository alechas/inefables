function CargarAdministrador()
{

  var pagina = "nexo.php";

    $.ajax(
      {
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "ValidarLogin" },
        async: true
      }
      ).then( 
        function(respuesta) 
        { 

          if (respuesta == "ok") 
            {
                $("#container_admin").load("frmAdministrador.php");
            }
          else
            {
                $("#container_admin").load("frmLogin.php");
            }

        }, 
        function(respuesta) 
        { 
        }
      );
}


function BorrarFecha(id)
{
  var pagina = "nexo.php";

    $.ajax(
      {
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "BorrarFecha" , id: id },
        async: true
      }
      ).then( 
        function(respuesta) 
        { 

          alert(respuesta);
          location.href='Login.php';                    

        }, 
        function(respuesta) 
        { 
        }
      );

}

function ModFecha( idFecha)
{
  var pagina = "nexo.php";

    $.ajax(
      {
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "ModFecha" , id: idFecha },
        async: true
      }
      ).then( 
        function(respuesta) 
        { 
          location.href='Login.php';                    

        }, 
        function(respuesta) 
        { 
        }
      );

}

function GuardarBiografia()
{
  var pagina = "nexo.php";
  var bio = document.getElementById("txtbiografia").value;


    $.ajax(
      {
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "GuardarBiografia" , bio: bio },
        async: true
      }
      ).then( 
        function(respuesta) 
        { 
          alert("Se actualizó Biografía");
          location.href='Login.php';          
        }, 
        function(respuesta) 
        { 
        }
      );

}

function CargarFecha()
{
  var pagina = "nexo.php";
  var lugar = document.getElementById("Lugar").value;
  var fecha = document.getElementById("fecha").value;
  var direccion = document.getElementById("direccion").value;
  var precio = document.getElementById("precio").value;


  var file = document.getElementById('flayer').files;
  //var filename = document.getElementById('id-input-file-2').files[0].name;      

    $.ajax(
      {
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "CargarFecha" , lugar: lugar ,  fecha: fecha, direccion: direccion ,  precio: precio },
        async: true
      }
      ).then( 
        function(respuesta) 
        { 


        }, 
        function(respuesta) 
        { 
        }
      );

}

function Login()
{

  var pagina = "nexo.php";
  var mail = $("#mail").val();
  var pass = $("#pass").val();

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "login" , mail: mail , pass: pass },
        async: true
        })
      .then( 
        function(respuesta) 
        {

        }, 
      function(respuesta) { 
                            alert("Error de logueo");

                          }
    );
          location.href='Login.php';

}

function BorrarImg(indice)
{
  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "BorrarImg" , cont: indice },
        async: true
        })
      .then( 
        function(respuesta) 
        {
          alert("Se borro imagen");
          location.href='Login.php';          

        }, 
      function(respuesta) { 
                            alert("Error al borrar la imagen");

                          }
    );
          location.href='Login.php';

}
