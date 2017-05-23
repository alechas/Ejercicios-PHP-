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
        {alert(respuesta);
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

