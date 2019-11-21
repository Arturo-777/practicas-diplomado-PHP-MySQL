<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Llene los campos a continuacion</h1>


<form action="POSTalumno.php" method="post" name="Escuela_formulario">
	<div>
		<label for="ID_escuela">Escribe el ID del alumno:</label>
		<input type="text" name="txtAlumnoID" id="name" value="" tabindex="1" />		
		<br><br>


		<label for="Nombre_escuela">Escribe el nombre del alumno:</label>
		<input type="text" name="txtAlumnoNombre" id="name" value="" tabindex="1" />
		<br><br>


		<label for="Rector_escuela">Escribe el apellido del alumno:</label>
		<input type="text" name="txtAlumnoApellido" id="name" value="" tabindex="1" />
		<br><br>

			<label for="ID_escuela">Escribe el ID del tutor:</label>
		<input type="text" name="txtTutorID" id="name" value="" tabindex="1" />		
		<br><br>


		<label for="Nombre_escuela">Escribe el nombre del tutor:</label>
		<input type="text" name="txtTutorNombre" id="name" value="" tabindex="1" />
		<br><br>


		<label for="Rector_escuela">Escribe el apellido del tutor:</label>
		<input type="text" name="txtTutorApellido" id="name" value="" tabindex="1" />
		<br><br>



		<input type="submit" name="prueba" value="siguiente">


	</div>	
</form>


<form action="AdministarAlumno.php" method="post" name="returno_main">

	<input type="submit" name="prueba" value="voler">
	
	</form>	







</body>
</html>