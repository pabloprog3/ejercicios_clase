<html>
<head>
	<title>Ejercicio 25</title>
</head>
<body>

	<form method="post">

		<label>Base:</label>
		<input type="text" placeholder:"Ingrese aqui la base" name="base"></input>
		<br>
		<br>
		<label>Altura:</label>
		<input type="text" placeholder:"Ingrese aqui la altura" name="altura"></input>
		<br>
		<br>
		<input type="submit" value="Calcular"></input>

	</form>

</body>
</html>

<?php

//var_dump($_POST);

if(isset($_POST["base"]) !== "" && isset($_POST["altura"]) !== "")
{
    $base = $_POST["base"]; 
	$altura = $_POST["altura"];	

	$resultado = (2*$base) + (2*$altura);

	echo "<br><br>";
	echo "EL RESULTADO ES: $resultado";
}








?>