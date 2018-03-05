<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Añadir Comite</title>
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
		   
		// FUNCIÓN QUE IMPIDE QUE LOS DATOS SE ENVÍEN A MENOS QUE ESTÉN RELLENADOS LOS CAMPOS OBLIGATORIOS
		
			$(".required").prop('required',true);
			
	</script>
</head>
<body>
<?php
//llama al fichero, para no estar poniendo siempre la conexion
	include("includes_modulos/conexion.php");

?>
	<div class="form-group">
		<fieldset class="well the-fieldset">
			<legend class="legends-form">Añadir a miembro del comité</legend>
			<form action="./includes_modulos/anadir_comite.php" class="" method="post">
			<fieldset class="well the-fieldset">
				<legend class="in-legend">Datos de miembro del comité</legend>
				<label class="labels-inline-block required">Nombre: <span class="required_class">*</span></label>
				<input type="text" name="nombre" class="form-control form-inline" maxlength="20" required />
				<label class="labels-inline-block required">Apellidos: <span class="required_class">*</span></label> 
				<input type="text" name="apellidos" class="form-control form-inline" maxlength="60" required/>
				<label class="labels-inline-block required">DNI: <span class="required_class">*</span></label>
				<input type="text" name="DNI" class="form-control form-inline" maxlength="10" required/>
				<label class="labels-inline-block required">NMGD: <span class="required_class">*</span></label>
				<input type="numeric" name="NMGD" class="form-control form-inline" maxlength="20" required />
				<label class="labels-inline-block required"> Teléfono: <span class="required_class">*</span></label> 
				<input type="numeric" name="telefono" class="form-control form-inline" maxlength="9" required />
				<label class="labels-inline-block required"> Correo: <span class="required_class">*</span></label> 
				<input type="text" name="correo" class="form-control form-inline" maxlength="60" required />
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
	</div>
</body>
</html>