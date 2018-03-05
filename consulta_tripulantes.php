<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Tripulantes</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/formulario.css" rel="stylesheet">
</head>
<body>
<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
	
	include("includes_modulos/conexion.php");
?>
	
<div class="form-group">
<fieldset class="well-2 the-fieldset">
<legend class="legends-form-2">Consulta tripulantes</legend>
<form method="POST" action="includes_modulos/b_tripulantes.php">
<fieldset class="well-2 the-fieldset">
<legend class="in-legend-2">Buscar por bote</legend>
 <label class="labels-inline-block-2 required" name="N_vela">Bote: </label>
	<select class="form-control-2 form-inline" name="N_vela">
			<option value="0">Selección:</option>
        <?php
										
          $query = $mysqli -> query ("SELECT * FROM botes");
											
          while ($valores = mysqli_fetch_array($query)) {
												
            echo '<option value="'.$valores[N_vela].'">'.$valores[nombre].'</option>';
													
          }
        ?>
		</select>
	<input class="submit_gradient-2" type="submit" value="Buscar">
</fieldset>
 </form>
 <form method="POST" action="includes_modulos/b_tripulantes.php">
<fieldset class="well-2 the-fieldset">
<legend class="in-legend-2">Buscar por apellidos</legend>
 	<label class="labels-inline-block-2">Apellidos: </label>
 	<input class="form-control-2 form-inline" type="text" name="apellidos">
	<input class="submit_gradient-2" type="submit" value="Buscar">
</fieldset>
 </form>
 <a href="consultas.php"><img class="image-return" src="backgrounds/return.png"></a>
</fieldset>
 </div>
</body>
</html>
