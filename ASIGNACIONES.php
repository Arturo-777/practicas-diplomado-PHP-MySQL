<!DOCTYPE html>
<html>
<head>
	<title>ASIGNACIONES</title>
</head>
<body>


<?php
echo "<h>parte A</h>\n";

//punto 1
echo "<h2>punto 1</h2> \n";

$x = 144;

$y = 999;

$suma = $x + $y;

$resta = $x - $y;

$multiplicacion = $x * $y;

$division = $x / $y;

echo "<p> valor de x = $x  </p>\n";

echo "<p> valor de y = $y  </p>\n";

echo "<p> La suma es: $suma  </p>\n";

echo "<p> La resta es: $resta  </p>\n";

echo "<p> La multiplicacion es: $multiplicacion  </p>\n";

echo "<p> La division es: $division  </p>\n";

//punto 2

echo "<h2>punto 2</h2> \n";
  
$nombre = "Arturo Carreras Rosa";  

echo "<p> mi nombre es: $nombre </p> \n";

//punto 3

$peso = 350;

$dolar = 50;


function peso_a_dolar($peso1 , $dolar1){

$convert = $peso1 / $dolar1;

return "cantidad en dolares es :$convert";

}


echo peso_a_dolar($peso, $dolar);




 ?>


<form action="procesado.php" method="post" name="frm">
	<div>
		<label for="name">Escribe algo:</label>
		<input type="text" name="string" id="name" value="" tabindex="1" />
		<input type="submit" name="prueba" value="procesar">
	</div>	
	
</form>


<br>

PUNTO B
<form action="puntoB.php" method="post" name="irutube">
	<input type="submit" name="youtube" value="ir a otra url">
		</form>
				<br>




<?php 
echo "nombre del servidor: {$_SERVER['SERVER_NAME']}<br>";
echo "Tu dirección IP es: {$_SERVER['REMOTE_ADDR']}<br>";
echo "IP del servidor es: {$_SERVER['SERVER_ADDR']}<br>";
echo "nombre del fichero: {$_SERVER['SCRIPT_FILENAME']}<br>";
echo "version php: {$_SERVER['SERVER_SIGNATURE']}<br>";


?>






</body>
</html>