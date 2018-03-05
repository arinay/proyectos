<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Añadir BOTES</title>
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
			<legend class="legends-form">Añadir nuevo bote</legend>
			<form action="./includes_modulos/anadir_botes.php" class="" method="post">
			<fieldset class="well the-fieldset">
				<legend class="in-legend">Datos básicos</legend>
				<label class="labels-inline-block required" maxlength="2" >Número de vela: <span class="required_class">*</span></label>
				<input type="numeric" name="N_vela" class="form-control form-inline" placeholder="Introduce el número de vela..." maxlength="2" required />
				<label class="labels-inline-block required">Nombre de bote: <span class="required_class">*</span></label> 
				<input type="text" name="nombre" class="form-control form-inline" placeholder="Introduce el nombre del bote..." maxlength="50" required/>
			</fieldset>
			<fieldset class="well the-fieldset">
				<legend class="in-legend">Datos técnicos</legend>
				<label class="labels-inline-block required">Eslora: <span class="required_class">*</span></label>
				<input type="numeric" name="eslora" class="form-control form-inline" placeholder="Introduce la medida de la eslora..." maxlength="4" required/>
				<label class="labels-inline-block required">Manga: <span class="required_class">*</span></label>
				<input type="numeric" name="manga" class="form-control form-inline" placeholder="Introduce la medida de la manga..." maxlength="4" required />
				<label class="labels-inline-block required">Puntal: <span class="required_class">*</span></label>
				<input type="numeric" name="puntal" class="form-control form-inline" placeholder="Introduce la medida del puntal..." maxlength="4" required />
				<label class="labels-inline-block required"> Puntal medio: <span class="required_class">*</span></label> 
				<input type="numeric" name="puntal_medio" class="form-control form-inline" placeholder="Introduce la medida del puntal medio..." maxlength="6" required />
				<label class="labels-inline-block required"> Orza peso: <span class="required_class">*</span></label> 
				<input type="numeric" name="Orza_peso" class="form-control form-inline" placeholder="Introduce el peso de la orza..." maxlength="6" required />
				<label class="labels-inline-block required"> Orza contorno superior: <span class="required_class">*</span></label> 
				<input type="numeric" name="Orza_contorno_superior" class="form-control form-inline" placeholder="Introduce la medida de la orza superior..." maxlength="4" required />
				<label class="labels-inline-block"> Orza altura: <span class="required_class">*</span></label> 
				<input type="numeric" name="Orza_altura" class="form-control form-inline" placeholder="Introduce la medida de la altura de la orza..." maxlength="4" required />
				<label class="labels-inline-block"> Orza contorno inferior: <span class="required_class">*</span></label> 
				<input type="numeric" name="Orza_contorno_inferior" class="form-control form-inline" placeholder="Introduce la medida de la orza inferior..." maxlength="4" required />
				<span class="formfield">
				<label class="labels-inline-block"> Color: <span class="required_class">*</span></label> 
				<textarea name="color" class="textarea" placeholder="Introduce el color del bote..." required></textarea>
				</span>
				<input class="submit_gradient" type="submit" value="Dar de alta">
			</form>
			</fieldset>
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