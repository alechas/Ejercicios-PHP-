function Convertir()
{

	//var num1 = $("#num").val();
	var num1 = 0;
	num1 = $("#n").val();

	//alert(Unidad(num1[1]));
		
	$("#container").html( Decena(num1[0]).concat(" y ",Unidad(num1[1])));

}

function Decena(dec)
{
	switch(dec){
		case "2":
			return "Veinti";
			break;
		case "3":
			return "Treinta";
			break;
		case "4":
			return "Cuarenta";
			break;
		case "5":
			return "Sincuenta";
			break;
		case "6":
			return "Sesenta";
			break;
	}
}

function Unidad(uni)
{
	switch(uni){
		case "1":
			return "Uno";
			break;
		case "2":
			return "Dos";
			break;
		case "3":
			return "Tres";
			break;
		case "4":
			return "Cuatro";
			break;
		case "5":
			return "Cinco";
			break;
		case "6":
			return "Seis";
			break;
		case "7":
			return "Siete";
			break;
		case "8":
			return "Ocho";
			break;
		case "9":
			return "Nueve";
			break;
	}
}