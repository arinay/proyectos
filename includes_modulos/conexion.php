<?php
error_reporting(0);

	$mysqli = new MySQLi("localhost", "root","", "federacion");
		if ($mysqli -> connect_error) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_error() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		elseif($VECTOR_MENSAJE_CONEXION == "Sí") {
			echo "¡Conexión exitosa!";
		}
		else{
			echo "";
		}

	
?>