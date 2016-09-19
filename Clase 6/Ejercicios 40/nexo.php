<?php

//$prueba = var_dump($_POST["archivos"]);
//var_dump($_FILES);

$rutaFotoTMP=$_FILES['archivos']['tmp_name'];
//echo "$rutaFotoTMP";
$nombreFoto=$_FILES['archivos']['name'];
$rutaDestino="fotos/$nombreFoto";

$dividirFoto = explode('.', $nombreFoto);
//var_dump($dividirFoto);


if($nombreFoto == "")
	echo "no se cargo foto";
else
 {
  $tipoFoto=$dividirFoto[1];
  if($tipoFoto=='PNG' || $tipoFoto=='png')
  {
	echo "NO SE ADMITEN FOTOS .PNG";
	echo "<br><br> NO SE GUARDO EL ARCHIVO";
  }
  else
  {
    move_uploaded_file($rutaFotoTMP, $rutaDestino);
	//var_dump($_FILES);
	echo "Se guardo el archivo";
  }
}
    
	

?>