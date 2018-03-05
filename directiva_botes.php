<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Añadir Directiva botes</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

	<!-------------- CSS FILES LIST --------------->
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/datepicker.css" rel="stylesheet">
	<link href="css/formulario.css" rel="stylesheet">
	
	
	<!-------------- JS FILES LIST --------------->
	
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	
		// FUNCIÓN QUE INVOCA EL DATEPICKER SOBRE ELEMENTO CON LA CLASE SELECCIONADA
		
	       $(function(){
	           $('.datepicker').datepicker();
	       });
	</script>
</head>
<body>
<?php
//llama al fichero, para no estar poniendo siempre la conexion
	include("includes_modulos/conexion.php");

?>
	<div class="form-group">
		<fieldset class="well the-fieldset">
			<legend class="legends-form">Añadir a miembro de directiva</legend>
			
			<fieldset class="well the-fieldset">
			<legend class="in-legend">Datos personales</legend>
			<form class="añadir directiva bote" method="POST" action="includes_modulos/alta_directiva_bote.php">
			<label class="labels-inline-block required">DNI: <span class="required_class">*</span></label>
			<input type="text" name="dni" class="form-control form-inline" placeholder="Introduce aquí tu DNI..." maxlength="9" required />
			<label class="labels-inline-block required">Nombre: <span class="required_class">*</span></label>
			<input type="text" name="nombre" class="form-control form-inline" placeholder="Introduce aquí tu nombre..." maxlength="20" required/>
			<label class="labels-inline-block required"> Apellidos: <span class="required_class">*</span></label> 
			<input type="text" name="apellidos" class="form-control form-inline" placeholder="Introduce aquí tus apellidos..." maxlength="60" required />
			<label class="labels-inline-block required"> Bote:</label> 
			<select name="N_vela" class="form-control">
				<option value="0">Selección:</option>
			<?php
										
			$query = $mysqli -> query ("SELECT * FROM botes");
											
			while ($valores = mysqli_fetch_array($query)) {
												
				echo '<option value="'.$valores[N_vela].'">'.$valores[nombre].'</option>';
													
			}
			?>
			</select>
			<label class="labels-inline-block required"> Correo personal:</label> 
			<input type="email" name="correo_personal" class="form-control form-inline" placeholder="Introduce aquí tu email personal..." maxlength="80"  />
			<label class="labels-inline-block required"> Teléfono:</label>
			<input type="numeric" name="telefono" class="form-control form-inline" placeholder="Introduce aquí tu teléfono..." maxlength="9"  />
			<label class="labels-inline-block required">Correo de bote:</label> 
			<input type="email" name="correo_bote" class="form-control form-inline" placeholder="Introduce aquí tu email de bote..." maxlength="80"  />
			<label class="labels-inline-block required"> Cargo:</label>
			<input type="text" name="cargo" class="form-control form-inline" placeholder="Introduce aquí tu cargo..." maxlength="30"  /><br>
			<input class="submit_gradient" type="submit" value="Dar de alta">
			</fieldset>
			</form>
			<figure>
				<figcaption class="caption-class" style="text-align: right !important">
					<span class="required_class">*</span> = Este campo es requerido.
				</figcaption>
			</figure>
			<a href="menu.php"><img class="image-return" src="backgrounds/return.png"></a>
		</fieldset>
	</body>
	</html>