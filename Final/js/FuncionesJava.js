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

                          }
		);

      location.href='index.php';


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

