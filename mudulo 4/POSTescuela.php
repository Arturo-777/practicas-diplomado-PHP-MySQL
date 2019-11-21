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

	 $p1 = $_POST['txtEscuelaID'];

	 $p2 = $_POST['txtEscuelaNombre'];

	 $p3 = $_POST['txtRectorID'];

	 $p4 = $_POST['txtRectorNombre'];

	 $p5 = $_POST['txtRectorApellido'];


	 $mysql_insertar = "insert into rector (rectorID,rectorNOM,rectorAP)
	Values ('$p3','$p4','$p5')";
	$mysql_consulta = $conexion -> query($mysql_insertar);


	$mysql_insertar = "insert into escuela (escuelaID,escuelaNOM,rectorID)
	Values ('$p1','$p2','$p3')";
	$mysql_consulta = $conexion -> query($mysql_insertar);

	$mysql_insertar = "insert into esc_personas (escuelaID)
	Values ('$p1')";
	$mysql_consulta = $conexion -> query($mysql_insertar);




	 ?>

	<form action="pruebita.php" method="post" name="returno_main">

	<input type="submit" name="prueba" value="Listo">
	
	</form>	




</body>
</html>