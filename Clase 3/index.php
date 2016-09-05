<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="animacion.css">

	<title>Clase 3 - Pasar datos</title>

</head>
<body>
	<div class="CajaInicio animated flash">
	<form  action="destino.php" method="post" id="FormIngreso">
		
		<label>Nombre:</label>
		<input type="text" placeholder="Ingrese aqui su nombre" name="nombre"> </input>
		<br>
		<br>
		<input type="text" name="numerouno"></input>
		<br>
		<input type="submit" class="MiBotonUTN">
		<br>
		<br>

	</form>
</div>

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