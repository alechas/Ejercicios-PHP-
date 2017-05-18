<html>

<head>
	<title>Ejercicio 4</title>
	<script src="js/jquery.tools.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
	<script type="text/javascript" src="FuncionesJava.js"></script>

</head>

<body>

	<form action="mostrar.php" method="post">
		
		Ingrese numeros a calcular <br>
		<input type="number" name="num1" id="num1">
		<input type="number" name="num2" id="num2">
		<br> <br>
<!-- 		<input type="submit" name="suma" value="+" id = "suma">
		<input type="submit" name="resta" value="-">
		<input type="submit" name="division" value="/">
		<input type="submit" name="multiplicacion" value="*"> -->
		<input type="button" onclick="Suma()" name= "suma" id = "S" value = "+">
		<input type="button" onclick="Resta()" name= "resta" id = "S" value = "-">
		<input type="button" onclick="Multiplicacion()" name= "multiplicacion" id = "S" value = "*">
		<input type="button" onclick="Divicion()" name= "division" id = "S" value = "/">

		<div id="container">

		</div>

	</form>

</body>

</html>