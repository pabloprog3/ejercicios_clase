<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>pagina destino</title>
</head>
<body>

</body>
</html>

<?php

	if(isset($_POST["base"]) !== "" && isset($_POST["altura"]) !== "")
	{
   		$base = $_POST["base"]; 
		$altura = $_POST["altura"];	

		$resultado = (2*$base) + (2*$altura);

		echo "<br><br>";
		echo "EL RESULTADO ES: $resultado";
		echo "<br><br>";
		echo "<a href='index.php'> Indice";

	}




?>
