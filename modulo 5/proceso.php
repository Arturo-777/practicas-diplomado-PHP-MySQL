<?php

$nombre = $_POST['txtNombre'];
$Apellido = $_POST['txtApellido'];
$cedula = $_POST['txtCedula'];



if ($nombre == "" || $Apellido == "" || $cedula == "" ) {

echo "<h1>algun campo esta vacio, porfavor llenelos</h1>";
	
}else{
echo "nombre:".$nombre.'<br>';
echo "Apellido:".$Apellido.'<br>';
echo "cedula:".$cedula.'<br>';
}






  ?>