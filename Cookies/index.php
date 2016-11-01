<html>
<head>
	<title></title>
 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<div  class="jumbotron text-center">
	<form enctype='multipart-form' method='post'>
		<input type="text" class="form-control"  placeholder="Ingrese usuario" id="usuario" name="usuario" value=<?php echo $_COOKIE['usuario'] ?> >
		<br>
		<input type="password" class="form-control" placeholder="Ingrese password" id="password" name="password" >
		<br>
		<input type="file" id="archivo" name="archivo"> 
		<br>
		<input type="button" id="subir" onclick="ingresar()" value="Enviar"  class="btn-primary btn-block" >
	</form>
	
	<div id="imagen">
		<img src="">
	</div>
</div>

</body>

	<script type="text/javascript" src="funciones.js"></script>
</html>