<?php


var_dump($_FILES);

$rutaFotoTMP=$_FILES['archivos']['tmp_name'];
$rutaDestino="fotos/$nombreFoto";

$nombreFoto=$_FILES['archivos']['name'];
$dividirFoto = explode('.', $nombreFoto);
$tipoFoto=$dividirFoto[1];


switch ($tipoFoto)
{
	case 'value':
		# code...
		break;
	
	default:
		# code...
		break;
}















?>