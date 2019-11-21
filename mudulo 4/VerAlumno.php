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


	 $mysql_busqueda = "SELECT estudNOM,estudAP,tutorNOM,tutorAP
	 FROM estudiante
	inner join (tutor_estud)
	ON (estudiante.estudID = tutor_estud.estudID)
    INNER JOIN (tutor)
    ON (tutor_estud.tutorID = tutor.tutorID)";

	$mysql_consulta = $conexion -> query($mysql_busqueda);


	while ($fila = $mysql_consulta -> fetch_assoc()) {

		echo "<table><tr><td>";

		echo $fila['estudNOM']."</td><td>";

		echo $fila['estudAP']."</td><td>";
		
		echo $fila['tutorNOM']."</td><td>";

		echo $fila['tutorAP']."</td></tr></table>";

		echo "<br>";		
						}

	$conexion->close();					
							

	 ?>

	 <form action="pruebita.php" method="post" name="returno_main">

	<input type="submit" name="btnReturn" value="Listo">
	











</body>
</html>