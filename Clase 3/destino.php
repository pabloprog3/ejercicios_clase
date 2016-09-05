<?php

//inspeccionar variables con var_dump()

/*echo var_dump($_GET);
echo "<br><br>";
echo var_dump($_GET["nombre"]);
*/

echo var_dump($_POST);
/*
if(isset($_GET["nombre"]))
{
	echo $_GET["nombre"];
}
else
{
	echo "Ingreso primero";
}
*/
/
if(isset($_POST["nombre"]))
{
	echo $_POST["nombre"];
}
else
{
	echo "Ingreso primero";
}

?>