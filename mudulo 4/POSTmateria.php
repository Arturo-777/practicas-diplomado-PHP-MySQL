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

	 $p1 = $_POST['txtmateriaID'];

	 $p2 = $_POST['txtmateriaNombre'];



	 $mysql_insertar = "insert into materia (matID,matNOM)
	Values ('$p1','$p2')";
	$mysql_consulta = $conexion -> query($mysql_insertar);


	$mysql_insertar = "insert into clases (matID)
	Values ('$p1')";
	$mysql_consulta = $conexion -> query($mysql_insertar);



	 ?>

	<form action="pruebita.php" method="post" name="returno_main">

	<input type="submit" name="btnReturn" value="Listo">
	
	</form>	








</body>
</html>