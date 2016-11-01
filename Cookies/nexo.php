 <?php

 		session_start(); //si esta creado lo devuelve
 		/*Guarda perfil despues de consulta si existe a la base de datos*/
 		include_once "logeado.php";
 		

 		$usuario = $_POST['usuario'];
 		$password = $_POST['password'];

 		//echo "llego $usuario con password $password";

 		//echo $_SESSION['usuario'] = $usuario; 

 		//var_dump($_SESSION);

 		//setcookie("usuario", "$usuario");


 ?>