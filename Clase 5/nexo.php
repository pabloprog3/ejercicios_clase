<?php


include("php/estacionamiento.php");
//$variableTexto = $_POST['texto'];

//var_dump($_POST);

//echo "$variableTexto";
if(isset($_POST['Ingresar']))
{
	$patente = $_POST["texto"];
	Estacionamiento::Guardar($patente);
	//$miListado=Estacionamiento::Leer();

	//var_dump($miListado);

	echo "ingreso correcto";
}

else{
	//var_dump($_POST["texto"]);
	Estacionamiento::SacarAuto($_POST["texto"]);
}


?>