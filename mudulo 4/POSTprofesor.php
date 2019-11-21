<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

			<?php 

	include 'conexion.php';


	 ?>



	<?php 

	 $p1 = $_POST['txtProfesorID'];

	 $p2 = $_POST['txtProfesorNombre'];

	 $p3 = $_POST['txtProfesorApellido'];



	 $mysql_insertar = "insert into docente (profID,profNOM,profAP)
	Values ('$p1','$p2','$p3')";
	$mysql_consulta = $conexion -> query($mysql_insertar);


	$mysql_insertar = "insert into esc_personas (profID)
	Values ('$p1')";
	$mysql_consulta = $conexion -> query($mysql_insertar);

	$mysql_insertar = "insert into clases (profID)
	Values ('$p1')";
	$mysql_consulta = $conexion -> query($mysql_insertar);




	 ?>

	<form action="pruebita.php" method="post" name="returno_main">

	<input type="submit" name="prueba" value="Listo">
	
	</form>	








</body>
</html>