<?php

require_once 'Archivos.php';

	if(Archivos::GuardarArchivos()==1)
	{
		echo "Se guardo correctamente el archivo <br><br>";
		Archivos::GenerarSalida();
	}
	else
		echo "No se guardar";









?>