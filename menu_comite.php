<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>

<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>MENÚ</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="./css/css_menu.css">
</head>
<body>
	<div class="centraTabla">
			<table >
		<tr><td colspan="2"><h1>BIENVENIDO USUARIO <?php echo $_SESSION['user'];?> AL MENÚ  </h1></td>
		</tr>
		<tr>
		<td>
			
			<form method="POST" action="comite_consulta.php">
				<button type="subimit">IR A CONSULTAS</button>
			</form>
		</td>
		<tr>
		<td colspan="2" align="center">
<form method="POST" action="./includes_modulos/desconectar.php">
				<button type="subimit">DESCONECTAR</button>
			</form></td>

		</tr>
	</table>
	</div>
	
	
	

</body>


</html>
