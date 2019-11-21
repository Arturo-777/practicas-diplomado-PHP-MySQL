<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


		<?php 

	include 'conexion.php';


	 ?>

<h1>Registro de Escuela</h1>



<form action="POSTescuela.php" method="post" name="Escuela_formulario">
	<div>
		<label for="ID_escuela">Escribe el ID de la Escuela:</label>
		<input type="text" name="txtEscuelaID" id="name" value="" tabindex="1" />		
		<br><br>


		<label for="Nombre_escuela">Escribe el nombre de la escuela:</label>
		<input type="text" name="txtEscuelaNombre" id="name" value="" tabindex="1" />
		<br><br>

		<label for="Rector_escuela">Escribe el ID del rector encargado:</label>
		<input type="text" name="txtRectorID" id="name" value="" tabindex="1" />
		<br><br>


			<label for="Rector_escuela">Escribe el nombre del rector encargado:</label>
		<input type="text" name="txtRectorNombre" id="name" value="" tabindex="1" />
		<br><br>

			<label for="Rector_escuela">Escribe el apellido del rector encargado:</label>
		<input type="text" name="txtRectorApellido" id="name" value="" tabindex="1" />
		<br><br>



		<input type="submit" name="prueba" value="siguiente">


	</div>	
</form>





<!--<form action="pruebita.php" method="post" name="Escuela_formulario">
	<div>
		<label for="ID_escuela">Escribe el ID de la Escuela:</label>
		<input type="text" name="txtEscuelaID" id="name" value="" tabindex="1" />		
		<br><br>


		<label for="Nombre_escuela">Escribe el nombre de la escuela:</label>
		<input type="text" name="txtEscuelaNombre" id="name" value="" tabindex="1" />
		<br><br>

		<label for="Rector_escuela">Escribe el rector encargado:</label>
		<input type="text" name="txtRectorID" id="name" value="" tabindex="1" />
		<br><br>

		<input type="submit" name="prueba" value="Listo">


	</div>	
	




</form>-->
		<br>

<!--<form action="pruebita.php" method="post"  name="RegresoMain" onclick="ActivarBtn()">
		<input type="submit" name="BtnRegresoMain" value="Regresar">
		
			
			<br>
	</form>-->




</body>
</html>