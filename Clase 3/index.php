<html>
<head>
	<title>Clase 3 - Pasar datos</title>
</head>
<body>
	
	<form  action="destino.php" method="post">
		<input type="submit">
		<br>
		<label>Nombre:</label>
		<input type="text" placeholder="Ingrese aqui su nombre" name="nombre"> </input>
		<br>
		<input type="text" name="numerouno"></input>
		<br>
		<br>

	</form>

</body>
</html>

<?php

//inspeccionar variables con var_dump()

/*echo var_dump($_GET);
echo "<br><br>";
echo var_dump($_GET["nombre"]);

if(isset($_GET["nombre"]))
{
	echo $_GET["nombre"];
}
else
{
	echo "Ingreso primero";
}

*/
?>