<?php

 class Usuario
{
	private $user;
	private $passw;
	public $pathFoto;
	
	function __construct($usuario, $password, $rutaFoto)
	{
		$this->user = $usuario;
		$this->passw = $password;
		$divFoto = explode("/", $rutaFoto);
		$this->pathFoto = $divFoto[0];		
	}

	public function getUser()
	{
		return $this->user;
	}
	public function getPassw()
	{
		return $this->passw;
	}
	public function getPathFoto()
	{
		return $this->pathFoto;
	}


	public function setUser($valor)
	{
		$this->user = $valor;
	}
	public function setPassw($valor)
	{
		$this->passw = $valor;
	}
	public function setPathFoto($valor)
	{
		$this->pathFoto = $valor;
	}


	public function toString()
	{
		return $this->user."-".$this->passw."-".$this->pathFoto."\r\n";
	}


	public  function GuardarFoto($foto)
	{
		// $rutaFotoTMP=$_FILES['foto']['tmp_name'];
		// $nombreFoto=$_FILES['foto']['name'];
		$rutaDestino="fotos/$foto";

		//$this->pathFoto=$nombreFoto;

		$dividirFoto = explode('.', $foto);
		//var_dump($dividirFoto);


		if($foto == "")
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
   				 move_uploaded_file($foto, $rutaDestino);
				//var_dump($_FILES);
				echo "Se guardo el archivo";
  			}
		  }
	}


	public static function GuardarUsuario($usuario)
	{

		//var_dump($usuario);

		//echo("FOTO: $nombreFoto"); NO TRAE EL NOMBRE DE LA FOTO
		//$strFoto = $usuario->$getPathFoto;
		//echo "$usuario->getPathFoto";
		//$usuario->GuardarFoto();	
		$linea = $usuario->toString();

		$archivo = fopen("archivos/usuarios.txt", "a");

		fwrite($archivo, $linea);
		fclose($archivo);		
	}


	public static function LeerUsuarios()
	{
		$archivo=fopen("archivos/usuarios.txt", "r");
		$listaUsuarios=array();

		while (!feof($archivo)) 
		{
			$linea=fgets($archivo);
			$usuario=explode("-", $linea);
			$listaUsuarios[]=$usuario;
		}

		return $listaUsuarios;
	}


	






}
















?>