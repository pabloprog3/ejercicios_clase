<?php

class Archivos
{

	public static function GuardarArchivos()
	{
		$rutaArchivoTMP=$_FILES['archivos']['tmp_name'];

		$nombreArchivo=$_FILES['archivos']['name'];
		$rutaDestino="Uploads/$nombreArchivo";

		$dividirArchivo = explode('.', $nombreArchivo);
		$tipoArchivo=strtolower($dividirArchivo[1]);

		if($tipoArchivo == 'doc' || $tipoArchivo=='docx')
			if($_FILES['archivos']['size'] <= 61440)
			{
				move_uploaded_file($rutaArchivoTMP, $rutaDestino);
				return 1;
			}
			else
			{
				echo "Tamañio invalido para archivos .doc o .docx";
				return 0;
			}

		else
		{
			if($tipoArchivo=='jpg' || $tipoArchivo=='jpeg' || $tipoArchivo=='gif')
				if($_FILES['archivos']['size'] <= 800000)
				{
					move_uploaded_file($nombreArchivo, $rutaDestino);
					return 1;
				}
				else
				{
					echo "Tamañio invalido para archivos jpg, jpeg o gif";
					return 0;
				}
			else
			{
				if($_FILES['archivos']['size'] <= 512000)
				{
					move_uploaded_file($nombreArchivo, $rutaDestino);
					return 1;
				}
				else
				{
					echo "Tamañio invalido para otros archivos";
					return 0;
				}
			}
		}
	} //fin funcion GuardarArchivos()



	public static function GenerarSalida()
	{



	} //Fin funcion GenerarSalida()




}//fin clase 











?>