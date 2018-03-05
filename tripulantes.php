<!DOCTYPE html>
	<?php
	session_start();
	?>

<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Añadir Tripulantes</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

	
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/datepicker.css" rel="stylesheet">
	<link href="css/formulario.css" rel="stylesheet">
	
	
	
	
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	
	       $(function(){
	           $('.datepicker').datepicker();
	       });
		   
	</script>
</head>
<body>
	<?php
	// LLAMA AL FICHERO
	    include("includes_modulos/conexion.php");
	?>
	<div class="form-group">
		<fieldset class="well the-fieldset">
			<legend class="legends-form">Añadir tripulante</legend>
			<form action="#" id="form-submit" method="post">
			<fieldset class="well the-fieldset">
			<legend class="in-legend">Datos personales</legend>
				<label class="labels-inline-block required">Nombre: <span class="required_class">*</span></label>
					<input class="form-control form-inline" id="name-1" maxlength="20" name="nombre" placeholder="Introduce aquí tu nombre..." required="" type="text"> 
				<label class="labels-inline-block required">Apellidos: <span class="required_class">*</span></label>
					<input class="form-control form-inline" id="surname-1" maxlength="60" placeholder="Introduce aquí tus apellidos..." name="apellidos"  type="text"> 
				<label class="labels-inline-block required">DNI: <span class="required_class">*</span></label>
					<input class="form-control form-inline" id="dni-1" maxlength="10" placeholder="Introduce aquí tu DNI..." name="DNI" type="text"> 
				<label class="labels-inline-block required">Fecha de Nacimiento: <span class="required_class">*</span></label>
					<input class="datepicker form-control form-inline" id="birth-date" placeholder="Introduce aquí tu fecha de nacimiento..." name="Fecha_nacimiento" required="" type="date"> 
				<label class="labels-inline-block required">Domicilio: <span class="required_class">*</span></label>
					<input class="form-control form-inline" id="dom-1" maxlength="30" placeholder="Introduce aquí tu domicilio..." name="domicilio" required="" type="text"> 
				<label class="labels-inline-block required">Provincia: <span class="required_class">*</span></label>
					<input class="form-control form-inline" id="prov-1" maxlength="30" placeholder="Introduce aquí tu provincia..." name="provincia" required="" type="text">
				<label class="labels-inline-block required">Código Postal: <span class="required_class">*</span></label>
					<input class="form-control form-inline" id="cp-1" maxlength="20" placeholder="Introduce aquí tu CP..." name="Cp" required="" type="numeric"> 
				<label class="labels-inline-block required">Teléfono: <span class="required_class">*</span></label>
					<input class="form-control form-inline" id="telefone-1" maxlength="20" placeholder="Introduce aquí tu teléfono..." name="telefono" required="" type="numeric"> 
			</fieldset>
			<fieldset class="well the-fieldset">
			<legend class="in-legend">Datos de tripulante</legend>
				<label class="labels-inline-block required">Número de licencia: <span class="required_class">*</span></label>
					<input class="form-control form-inline" id="n_licence" maxlength="20" placeholder="Introduce aquí tu número de licencia..." name="N_licencia" required="" type="numeric">
				<label class="labels-inline-block required">NMGD: <span class="required_class">*</span></label>
					<input class="form-control form-inline" id="NMGD-1" maxlength="20" placeholder="Introduce aquí tu NMGD..." name="NMGD" required="" type="numeric"> 
				<label class="labels-inline-block required">Seleccione un primer bote: <span class="required_class">*</span></label>
					<select class="form-control" id="first-ship" name="N_vela" style="color: black !important;">
						<option value="null"></option><?php
						                                        
						          $query = $mysqli -> query ("SELECT * FROM botes");
						                                            
						          while ($valores = mysqli_fetch_array($query)) {
						                                                
						            echo '<option value="'.$valores[N_vela].'">'.$valores[nombre].'</option>';
						                                                    
						          }
						        ?>
					</select><br>
					<label class="labels-inline-block required">Seleccione la primera fecha de alta: <span class="required_class">*</span></label>
					<input class="datepicker form-control form-inline" id="first-date" maxlength="20" placeholder="Primera fecha de alta..." name="Fecha_alta" required="" type="date">


				<label class="labels-inline-block">Seleccione un segundo bote:</label>
					<select class="form-control" id="second-ship" name="N_vela2" style="color: black !important;">
						<option value="null"> </option><?php
						                                        
						          $query2 = $mysqli -> query ("SELECT * FROM botes");
						                                            
						          while ($valores2 = mysqli_fetch_array($query2)) {
						                                                
						            echo '<option value="'.$valores2[N_vela].'">'.$valores2[nombre].'</option>';
						                                                    
						          }
						        ?>
					</select>
				
				<label class="labels-inline-block">Segunda fecha de alta:</label>
					<input class="datepicker form-control form-inline" id="second-date" maxlength="20"  placeholder="Segunda fecha de alta..." type="date"> 
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
	<?php
	
			$nombre=$_POST['nombre'];
			$apellidos=$_POST['apellidos'];
			$dni=$_POST['DNI'];
			$NMGD=$_POST['NMGD'];
			$N_licencia=$_POST['N_licencia'];
			$Fecha_nacimiento=$_POST['Fecha_nacimiento'];
			$domicilio=$_POST['domicilio'];
			$provincia=$_POST['provincia'];
			$Cp=$_POST['Cp'];
			$telefono=$_POST['telefono'];
			$N_vela=$_POST['N_vela'];
			$Fecha_alta=$_POST['Fecha_alta'];
			$N_vela2=$_POST['N_vela2'];
			$Fecha_alta2=$_POST['Fecha_alta2'];
			
			$registro=mysqli_query($mysqli, "INSERT INTO tripulantes (nombre,apellidos,DNI,NMGD,N_licencia,Fecha_nacimiento,domicilio,provincia,Cp,telefono,N_vela,Fecha_alta,N_vela2,Fecha_alta2) 
			values('$nombre','$apellidos','$dni','$NMGD','$N_licencia','$Fecha_nacimiento','$domicilio','$provincia','$Cp','$telefono','$N_vela','$Fecha_alta','$N_vela2','$Fecha_alta2')") 
			or die(mysqli_error("Fallo al registrar al tripulante."));

		include("cerrar_conexion.php");
		
	?>
</body>
</html>