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


	public static function Leer()
	{
		$listadoDeAutos=array();
		//$listaDeAutosLeidas["primerElemento"];//agregar elemento al array

		$archivo=fopen("estacionados.txt", "r");
		while(!FeoF($archivo))
		{
			$renglon=fgets($archivo);//lectura linea a linea
			//$listadoDeAutos[]=$auto;

			$auto=explode("=>", $renglon);
			$listadoDeAutos[]=$auto;
		}
		fclose($archivo);

		return $listadoDeAutos;
	}

	public static function SacarAuto($patente)
	{
		$miListadoDeAutos=Estacionamiento::Leer();

		foreach ($miListadoDeAutos as $auto) 
		{
			if($patente == $auto[0])
			{
				$ahora=date("Y-m-d H:i:s");
				$diferencia = strtotime($ahora) - strtotime($auto[1]);
				echo "Tiempo transcurrido $diferencia";

			}
		}
	}








}



?>