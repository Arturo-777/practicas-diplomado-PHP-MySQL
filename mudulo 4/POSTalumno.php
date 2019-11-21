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

	 $p1 = $_POST['txtAlumnoID'];

	 $p2 = $_POST['txtAlumnoNombre'];

	 $p3 = $_POST['txtAlumnoApellido'];

	 $p4 = $_POST['txtTutorID'];

	 $p5 = $_POST['txtTutorNombre'];

	 $p6 = $_POST['txtTutorApellido'];


	 $mysql_insertar = "insert into estudiante (estudID,estudNOM,estudAP)
	Values ('$p1','$p2','$p3')";
	$mysql_consulta = $conexion -> query($mysql_insertar);

	$mysql_insertar = "insert into tutor_estud (estudID)
	Values ('$p1')";
	$mysql_consulta = $conexion -> query($mysql_insertar);

	$mysql_insertar = "insert into esc_personas (estudID)
	Values ('$p1')";
	$mysql_consulta = $conexion -> query($mysql_insertar);


	$mysql_insertar = "insert into clases (estudID)
	Values ('$p1')";
	$mysql_consulta = $conexion -> query($mysql_insertar);


	$mysql_insertar = "insert into tutor (tutorID,tutorNOM,tutorAP)
	Values ('$p4','$p5','$p6')";
	$mysql_consulta = $conexion -> query($mysql_insertar);

	$mysql_insertar = "insert into tutor_estud (tutorID)
	Values ('$p4')";
	$mysql_consulta = $conexion -> query($mysql_insertar);



	 ?>

	<form action="pruebita.php" method="post" name="returno_main">

	<input type="submit" name="prueba" value="Listo">
	
	</form>	











</body>
</html>