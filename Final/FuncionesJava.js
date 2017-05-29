function BorrarCookie()
{

  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "BorrarCookie" },
        async: true
        })
      .then( 
        function(respuesta) 
        {alert("Se borro Cookie")
          location.href='index.php';
        }, 
      function(respuesta) { 

                          }
    );
}

function Listar()
{
  //$("#container_listar").load("frmTablaMateriales.php");
  //location.href='index.php#listado';
  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "nada" },
        async: true
        })
      .then( 
        function(respuesta) 
        {
          $("#container_listar").load("frmTablaMateriales.php");
        }, 
      function(respuesta) { 
                          }
    );

  location.href='index.php#listado';

}

function Vender(idMat)
{
  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "BorrarMaterial" , idMat: idMat },
        async: true
        })
      .then( 
        function(respuesta) 
        {
          $("#container_listar").load("frmTablaMateriales.php");
        }, 
      function(respuesta) { 
                          }
    );

          //function Listar();

}

function IngresarMaterial()
{
  var pagina = "nexo.php";
  var nombre = $("#matnombre").val();
  var precio = $("#matprecio").val();
  //var tipo = $("#tipo").val();
  var tipo = $('input[name="tipo"]:checked').val();
  var node = document.getElementById('idMat');
  var idMat  = node.textContent || node.innerText;

  document.getElementById("idMat").value = "";


    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "IngresarMaterial" , idMat: idMat , nombre: nombre , precio: precio , tipo: tipo },
        async: true
        })
      .then( 
        function(respuesta) 
        {
          location.href='index.php#listado';
          $("#container_listar").load("frmTablaMateriales.php");
        }, 
      function(respuesta) { 
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

      location.href='index.php';

}

function Modificar(idMat,nombre,precio,tipo)
{

            //document.getElementById("idMat").value = idMat;
            document.getElementById("idMat").innerHTML=idMat; 

            document.getElementById("matnombre").value = nombre;
            document.getElementById("matprecio").value = precio;

            //alert(res[3]);
            if (tipo == "solido") 
            {
              radiobtn = document.getElementById("rbsolido");
              radiobtn.checked = true;
            }
            else
            {
              radiobtn = document.getElementById("rbliquido");
              radiobtn.checked = true;
            }

            location.href='index.php#alta';

}

// function ObtenerNombre(idMat)
// {

//   var pagina = "nexo.php";

//     $.ajax({
//         type: 'POST',
//         url: pagina,
//         dataType: "text",
//         data: {queHago: "Modificar" , idMat: idMat },
//         async: true
//         })
//       .then( 
//         function(respuesta) 
//         {
//             //alert(respuesta);
//             // document.getElementById("matnombre").value = "admin@admin.com";
//             // document.getElementById("matprecio").value = "admin@admin.com";
//             // document.getElementById("tipo").value = "3211";
//             //alert(respuesta);
//             document.getElementById("matnombre").value = "Valde";
//             location.href='index.php#alta';

//         }, 
//       function(respuesta) { 
//                             alert("Error de logueo");
//                           }
//     );

// }

// function ObtenerPrecio(idMat)
// {

//   var pagina = "nexo.php";

//     $.ajax({
//         type: 'POST',
//         url: pagina,
//         dataType: "text",
//         data: {queHago: "Modificar" , idMat: idMat },
//         async: true
//         })
//       .then( 
//         function(respuesta) 
//         {
//             //alert(respuesta);
//             // document.getElementById("matnombre").value = "admin@admin.com";
//             // document.getElementById("matprecio").value = "admin@admin.com";
//             // document.getElementById("tipo").value = "3211";
//             //alert(respuesta);
//             document.getElementById("matnombre").value = "Valde";
//             location.href='index.php#alta';

//         }, 
//       function(respuesta) { 
//                             alert("Error de logueo");
//                           }
//     );
//}

function ObtenerTipo(idMat)
{

  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "Modificar" , idMat: idMat },
        async: true
        })
      .then( 
        function(respuesta) 
        { 
          // if (respuesta == "solido") {}
          //   document.getElementById("tipoMod").value = respuesta;
        }, 
      function(respuesta) { 
                            alert("Error de logueo");
                          }
    );

}


function LoginV()
{

  //document.getElementById("mail").innerHTML = "comp@comp.com";
  document.getElementById("mail").value = "vend@vend.com";
  document.getElementById("pass").value = "321";

}

function LoginA()
{

  //document.getElementById("mail").innerHTML = "admin@admin.com";
  document.getElementById("mail").value = "admin@admin.com";
  document.getElementById("pass").value = "3211";

}

function LoginC()
{

  //document.getElementById("mail").innerHTML = "vend@vend.com";
  document.getElementById("mail").value = "comp@comp.com";
  document.getElementById("pass").value = "123";

}

function LogOut()
{

  var pagina = "nexo.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "logOut" },
        async: true
        })
      .then( 
        function(respuesta) 
        {

        }, 
      function(respuesta) { 
                           
                          }
    );

  location.href='index.php';



}

