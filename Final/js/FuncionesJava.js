function Login()
{

  // var pagina = "nexo.php";
  // var mail = $("#mail").val();
  // var pass = $("#pass").val();

  //   $.ajax({
  //       type: 'POST',
  //       url: pagina,
  //       dataType: "text",
  //       data: {queHago: "login" , num1: num1 , num2: num2 },
  //       async: true
  //       })
  //   	.then( 
  //   		function(respuesta) 
  //   		{
  //               $("#container").html("Resultado: "+respuesta);
  //   		}, 
  // 		function(respuesta) { alert( "Error" ); }
		// );

    $("#container_body").load("frmLogin");
}

function LoadButtonHeader()
{
      $("#container_header").html("<input type='button' onclick='Login()' name= 'login' id = 'login' value = 'Login'>");
}