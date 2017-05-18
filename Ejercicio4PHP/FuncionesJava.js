function Suma()
{

  var pagina = "nexo.php";
  var num1 = $("#num1").val();
  var num2 = $("#num2").val();

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "Suma" , num1: num1 , num2: num2 },
        async: true
        })
    	.then( 
    		function(respuesta) 
    		{
                $("#container").html("Resultado: "+respuesta);
    		}, 
  		function(respuesta) { alert( "Error" ); }
		);


}
function Resta()
{

  var pagina = "nexo.php";
  var num1 = $("#num1").val();
  var num2 = $("#num2").val();

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "Resta" , num1: num1 , num2: num2 },
        async: true
        })
    	.then( 
    		function(respuesta) 
    		{
                $("#container").html("Resultado: "+respuesta);
    		}, 
  		function(respuesta) { alert( "Error" ); }
		);


}
function Multiplicacion()
{

  var pagina = "nexo.php";
  var num1 = $("#num1").val();
  var num2 = $("#num2").val();

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "Multiplicacion" , num1: num1 , num2: num2 },
        async: true
        })
    	.then( 
    		function(respuesta) 
    		{
                $("#container").html("Resultado: "+respuesta);
    		}, 
  		function(respuesta) { alert( "Error" ); }
		);


}
function Divicion()
{

  var pagina = "nexo.php";
  var num1 = $("#num1").val();
  var num2 = $("#num2").val();

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "Divicion" , num1: num1 , num2: num2 },
        async: true
        })
    	.then( 
    		function(respuesta) 
    		{
                $("#container").html("Resultado: "+respuesta);
    		}, 
  		function(respuesta) { alert( "Error" ); }
		);


}
