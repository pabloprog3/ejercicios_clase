<html>
<head>
	<title>Mostrar fecha y estacion</title>
</head>
<body>

	<?php

		$fechaServer = getdate();
		$hoyServer = new DateTime($fechaServer;
		//Imprimir con distintos formatos

		print_r($fechaServer);
		echo "<br>";
		echo $hoyServer->format('Y-m-d H:i:s');

	?>

</body>
</html>