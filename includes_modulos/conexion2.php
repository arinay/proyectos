<?php
error_reporting(0);

	$mysqli = new MySQLi("mysql.hostinger.es", "u127441037_admin","5o8n#$>9#V", "u127441037_vela");
		if ($mysqli -> connect_error) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_error() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		elseif($VECTOR_MENSAJE_CONEXION == "Sí") {
			echo "¡Conexión exitosa!";
		}
		else{
			echo "Error de conexión";
		}

	
?>