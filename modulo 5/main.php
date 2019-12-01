<!DOCTYPE html>
<html>
<head>
	<title>main registro</title>
</head>
<body>


<form action="proceso.php" method="post" name="registro">





	<h1>bienvenido, porfavor introduzca sus datos</h1>	

	<label for="nombre">Nombre:</label>
	<input type="text" name="txtNombre" id="nombre" value="" tabindex="1" />
	<br><br>

	<label for="apellido">Apellido:</label>
	<input type="text" name="txtApellido" id="apellido" value="" tabindex="1" />
	<br><br>

	<label for="cedula">Cedula:</label>
	<input type="text" name="txtCedula" id="cedula" value="" tabindex="1" />
	<br><br>


	<input type="submit" name="submit" value="siguiente">

	<?php
	include 'validacion.php';

	  ?>


</form>




</body>
</html>