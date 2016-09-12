<?php


class Estacionamiento
{
	


	public static function Guardar($patente)
	{
		$ahora=date("Y:M:D H:i:s");
		$renglon=$patente."=>".$ahora."\n";

		$archivo=fopen("estacionados.txt", "a");//puntero al archivo
		fwrite($archivo, $renglon);
		fclose($archivo);

	}




}



?>