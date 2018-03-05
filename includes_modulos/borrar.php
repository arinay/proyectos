<?php

require("conexion.php");

$borrar_b="delete * FROM botes";
$borrar_c="delete * FROM comite";
$borrar_d="delete * FROM directivos_botes";
$borrar_t="delete * FROM tripulantes";


$si=mysqli_query($mysqli,$borrar_b,$borrar_c,$borrar_d,$borrar_t);

include("cerrar_conexion.php");
?>