<!DOCTYPE html>
<?php
error_reporting(0);
?>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>SELLADO DE VELA</title>
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
			<legend class="legends-form">AÑADIR VELAS SELLADAS</legend>
			<form action="./includes_modulos/alta_vela.php" class="" method="post">
			<fieldset class="well the-fieldset">
			<legend class="in-legend">Datos del bote</legend>
			<label class="labels-inline-block required">Nombre: <span class="required_class">*</span><select name="N_vela">
			<option value="0">Selección:</option>
        <?php
										
          $query = $mysqli -> query ("SELECT * FROM botes");
											
          while ($valores = mysqli_fetch_array($query)) {
												
            echo '<option value="'.$valores[N_vela].'">'.$valores[nombre].'</option>';
													
          }
        ?>
		</select>

			<label class="labels-inline-block required">Fecha: <span class="required_class">*</span></label>
			<input class="form-control form-inline" type="text" placeholder="Introduce aquí tus apellidos..." name="apellidos" maxlength="60"required="" />
			<label class="labels-inline-block required">DNI: <span class="required_class">*</span></label>
			<input class="form-control form-inline" type="text" placeholder="Introduce aquí tu DNI..." name="DNI" maxlength="10" required="" />
			<label class="labels-inline-block required">Cargo: <span class="required_class">*</span></label>
			<input class="form-control form-inline" type="text" placeholder="Introduce aquí tu cargo..." name="cargo" maxlength="20" required="" />
			<label class="labels-inline-block required">Teléfono: <span class="required_class">*</span></label>
			<input class="form-control form-inline" type="text" placeholder="Introduce aquí tu teléfono..." name="telefono" id="telefono" maxlength="20" required="" />
			<label class="labels-inline-block required"> Correo: <span class="required_class">*</span></label> 
			<input class="form-control form-inline" type="text" placeholder="Introduce aquí tu email..." name="correo" id="correo" maxlength="500" required="" />
			<input class="submit_gradient" type="submit" value="dar de alta">
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


		
		<td colspan="4">	
		<H1>AÑADIR SELLADO DE VELA</H1>
		</td>
		</tr>

		

		<tr>
		<td>
		<label for="N_vela"> Vela:</label> </td>
		<td>
		<select name="N_vela">
			<option value="0">Selección:</option>
        <?php
										
          $query = $mysqli -> query ("SELECT * FROM botes");
											
          while ($valores = mysqli_fetch_array($query)) {
												
            echo '<option value="'.$valores[N_vela].'">'.$valores[nombre].'</option>';
													
          }
        ?>
		</select><br>
		</td>
		<td>

		<label for="Fecha"> Fecha de sellado:</label> 
		</td>
		<td>
		<input type="date" id="datepicker2" name="fecha" id="fecha" maxlength="20" required /><br>
		</td>
		</tr>

		<tr>
		<td>
		<label for="N_vela2"> Vela dos:</label> </td>
		<td>
		<select name="N_vela2">
			<option value="0">Selección:</option>
        <?php
										
          $query2 = $mysqli -> query ("SELECT * FROM botes");
											
          while ($valores2 = mysqli_fetch_array($query2)) {
												
            echo '<option value="'.$valores2[N_vela].'">'.$valores2[nombre].'</option>';
													
          }
        ?>
		</select><br>
		</td>
		<td>
		<label for="Fecha2"> Fecha de sellado 2:</label> </td>
		<td>
		<input type="date" name="fecha2" id="fecha2" maxlength="20"  /><br></td>
		</tr>

		<tr>
		<td>
		<label for="N_vela3"> Vela tres:</label> </td>
		<td>
		<select name="N_vela3">
			<option value="0">Selección:</option>
        <?php
										
          $query2 = $mysqli -> query ("SELECT * FROM botes");
											
          while ($valores2 = mysqli_fetch_array($query2)) {
												
            echo '<option value="'.$valores2[N_vela].'">'.$valores2[nombre].'</option>';
													
          }
        ?>
		</select><br>
		</td>
		<td>
		<label for="Fecha3"> Fecha de sellado tercera:</label> </td>
		<td>
		<input type="date" name="fecha3" id="fecha3" maxlength="20"  /><br></td>
		</tr>
		<tr>

		<tr>
		<td>
		<label for="N_vela4"> Vela cuatro:</label> </td>
		<td>
		<select name="N_vela4">
			<option value="0">Selección:</option>
        <?php
										
          $query2 = $mysqli -> query ("SELECT * FROM botes");
											
          while ($valores2 = mysqli_fetch_array($query2)) {
												
            echo '<option value="'.$valores2[N_vela].'">'.$valores2[nombre].'</option>';
													
          }
        ?>
		</select><br>
		</td>
		<td>
		<label for="Fecha4"> Fecha de sellado cuatro:</label> </td>
		<td>
		<input type="date" name="fecha4" id="fecha4" maxlength="20"  /><br></td>
		</tr>


		<td colspan="2">
		<button type="subimit">AÑADIR</button>
		
		</td>
		</form>
		<td colspan="2">
		<form method="POST" action="menu.php"><button type="subimit" value="menu.php"> VOLVER A MENÚ </button></form>
		</td>
		</tr>
		</table>
	
	</body>
	</html>