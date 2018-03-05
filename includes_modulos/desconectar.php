<?php 
session_start();
error_reporting(0);
if($_SESSION['user']){	
	session_destroy();
	header("location: http://127.0.0.1/proyectos/proyecto_fede3/");
}
else{
	header("location: http://127.0.0.1/proyectos/proyecto_fede3/index.php");
}
?>