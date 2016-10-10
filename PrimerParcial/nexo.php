<?php

include_once('clases/usuarios.php');
include_once('clases/mascota.php');

$queHago = $_POST['queHacer'];

//var_dump($_POST);	

switch ($queHago) {
	case 'Login':
				
				echo "<br><form method='POST'>
						<input id='user' name='user' type='text' placeholder='escriba nombre'/>
						<br><br>
						<input id='mail' name='mail' type='text' placeholder='escriba mail'/>
						<br><br>
						<input type='button' value='Ingresar' onClick='Ingresar()'/>
						<br><br><br><br>
						<a href='index.php'>Página principal</a>

						</form>";

				 
		break;

		case 'Ingresar':
			# code...
			break;

		case 'Registrarse':

				echo "<br><form id='frmReg' name='frmReg' method='POST' enctype='multipart/form-data'>
						<input type='text' name='user' id='user' placeholder='escriba nombre'/>
						<br><br>
						<input type='text' name='mail' id='mail' placeholder='escriba mail'/>
						<br><br>
						<input type='file' name='foto' id='foto' value='foto'/>
						<br><br>
						<input type='button' id='Guardar' value='Guardar' onClick='GuardarUsuario()'/>
						<br><br><br><br>
						<a href='index.php'>Página principal</a

						</form>";

			break;

		 case 'Guardar':
		 		var_dump($_FILES);		
		 		// var_dump($_POST);
		 		 //echo $_POST['foto'];
		 		//var_dump($GLOBALS);
		 		 $user = $_POST['usuario'];
		 		 $mail = $_POST['mail'];
		 		// $foto = $_FILES['foto']['tmp_name'];
		 		 $foto=$_POST['foto'];
		 		 $usuario = new Usuario($user, $mail, $foto);
		 		 Usuario::GuardarUsuario($usuario);
		 		 $usuario->GuardarFoto($foto);

		 		 echo "Guardado"; //<br><br><br> <a href='index.php'></a>";		 
			break;
	
	default:
		# code...
		break;
}






?>