<?php


include_once("php/estacionamiento.php");
//$variableTexto = $_POST['texto'];

//var_dump($_POST);

//echo "$variableTexto";
if($_POST["ingresar"]=="ingresar")
{
	$patente = $_POST["texto"];
	//Estacionamiento::Guardar($patente);
	$miListado=Estacionamiento::Leer();
	var_dump($miListado);
	
	echo "ingreso correcto";
}
else
	echo "salir correcto";


?>