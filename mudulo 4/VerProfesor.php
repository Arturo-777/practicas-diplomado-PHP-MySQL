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


	 $mysql_busqueda = "SELECT * FROM docente ";
	$mysql_consulta = $conexion -> query($mysql_busqueda);


	while ($fila = $mysql_consulta -> fetch_assoc()) {

		echo "<table><tr><td>";

		echo $fila['profID']."</td><td>";

		echo $fila['profNOM']."</td><td>";

		echo $fila['profAP']."</td></tr></table>";

		echo "<br>";		
						}

	$conexion->close();					
							

	 ?>

	 <form action="pruebita.php" method="post" name="returno_main">

	<input type="submit" name="btnReturn" value="Listo">
	








</body>
</html>