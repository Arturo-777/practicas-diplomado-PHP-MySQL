<!DOCTYPE html>
<html>
<head>
	<title>GLOBAL</title>
</head>
<body>




<!-- Ultimo punto en el que se organizan palabras reservadas dentro de una tabla -->
<table border="1" align="center">
    <thead>
        <tr>
            <?php
              $practica3 = array('break','clone', 'die()','empty()','endswitch' );
                foreach ($practica3 as $valor) {
                  echo '<th>'.$valor.'</th>';
                }
            ?>



<?php

//Ejemplo de identificador(una funcion en este caso) con literal boobleana

$practica3 = array('break','clone', 'die()','empty()','endswitch' );




function _Comparativa($comparativa='-3')
{
	if ($comparativa > 0) {
		echo "es mayor <br>";
	}
	else
		echo "no es mayor <br>";
}
//invocacion de la funcion previamente creada
_Comparativa();



//Inclusion practica 2/ cuerpo principal
require 'ASIGNACIONES.PHP';


//Inclusion de la captura de un string en un arreglo de practica 2
include 'procesado.php';


//Inclusion de visitar una URL diferente, estara comentado para que no
//interruma el funcionamiento de la pagina.
//include 'puntoB.php';


  ?>



</body>
</html>