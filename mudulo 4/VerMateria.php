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


	 $mysql_busqueda = "SELECT matNOM FROM materia ";
	$mysql_consulta = $conexion -> query($mysql_busqueda);

	if ($conexion -> query($mysql_busqueda) == false) {
		echo "no se ha encontrado nada";
		exit();
	}


	while ($fila = $mysql_consulta -> fetch_assoc()) {

		echo "<table><tr><td>";

		echo $fila['matNOM']."</td></tr></table>";

		echo "<br>";		
						}

	$conexion->close();					
							

	 ?>

	 <form action="pruebita.php" method="post" name="returno_main">

	<input type="submit" name="btnReturn" value="Listo">
	



</body>
</html>