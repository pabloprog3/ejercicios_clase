 <?php

 		$usuario = $_POST['usuario'];
 		$password = $_POST['password'];

 		echo "llego $usuario con password $password";

 		setcookie("usuario", "$usuario");

 ?>