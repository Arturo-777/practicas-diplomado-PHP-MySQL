<?php

#$DB_host = "localhost";
#$DB_name = "pruebas";
#$DB_user = "root";
#$DB_pass = "";

$conexion = new mysqli("localhost","root","","gestor_escuela");
		
		if ($conexion -> connect_errno) {

			echo "algun error inesperado paso " . $conexion-> connet_errno;


			
		}

		else
				//echo "conexion exitosa <br>";

		$conexion-> set_charset("utf8");


			//$mysql_insertar = "insert into persona (PersonaID,PersonaNombre,PersonaApellido,PersonaGenero)
			//Values ('13-1331','Arturo','Carreras','M')";

			//$mysql_consulta = $conexion -> query($mysql_insertar);

  ?>
