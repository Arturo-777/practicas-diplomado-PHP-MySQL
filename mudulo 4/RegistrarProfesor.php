<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Llene los campos a continuacion</h1>


<form action="POSTprofesor.php" method="post" name="Escuela_formulario">
	<div>
		<label for="ID_escuela">Escribe el ID del profesor:</label>
		<input type="text" name="txtProfesorID" id="name" value="" tabindex="1" />		
		<br><br>


		<label for="Nombre_escuela">Escribe el nombre del profesor:</label>
		<input type="text" name="txtProfesorNombre" id="name" value="" tabindex="1" />
		<br><br>


		<label for="Rector_escuela">Escribe el apellido del del profesor:</label>
		<input type="text" name="txtProfesorApellido" id="name" value="" tabindex="1" />
		<br><br>



		<input type="submit" name="prueba" value="siguiente">


	</div>	
</form>


<form action="AdministarProfesor.php" method="post" name="returno_main">

	<input type="submit" name="prueba" value="voler">
	
	</form>	



</body>
</html>