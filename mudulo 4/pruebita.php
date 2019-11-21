<!DOCTYPE html>
<html>
<head>
	<title>Pruebita</title>
<script type="text/javascript" src="java.js"></script>
</head>
<body>



<!--require para establecer conexion con la base de datos-->
	<?php
	//inclusion del archivo de conexion a BD
			require ('conexion.php');

 	 ?>
<!--Estructura de la pagina -->
<h1>Bienvendiso a el sistema de escuela Arturo Carreras</h1>





<!--esta seccion te permite registrar la escuela que vas a administrar onclick="ActivarBtn()" -->
	<form action="Escuela.php" method="post"  name="EscuelaF" >
		<input type="submit" name="BtnEscuela" value="Escuela">
			
			<br>
	</form>
	<br>


<!--esta seccion te permite gestionar y visualizar las personas (docentes,alumnos y tutores) -->	
	<form action="Personas.php" method="post"  name="PersonasF">
		<input type="submit" name="BtnPersona" value="Personas">
	
	<br>
	</form>
	<br>

<!--esta seccion te permite gestionar y visualizar las materias que imparte dicha escuela -->
	<form action="Materias.php" method="post"  name="MateriasF">
		<input type="submit" name="BtnMateria" value="Materias">

	<br>
	</form>
	<br>

<!--esta seccion te permite crear los grupos en el que estaran los docentes impartiendo materias a alumnos -->
	<form action="Grupos.php" method="post"  name="gruposF" >		
		<input type="submit" name="BtnGrupo" value="grupos">

	<br>

		
	<script type="text/javascript">
		
	
	</script>




	</form>
	<br>

	
	
	


</body>
</html>