<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>CONSULTAS</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="./css/styles_menu_3.css">
</head>
<body>
	<?php
	session_start();
	?>

	<div id="demo-2">
			<h1>BIENVENIDO USUARIO <?php echo $_SESSION['user'];?> AL MENÚ CONUSLTAS</h1>
	<nav>
		<ul>
		
			<li>
				<a href="c_consulta_tripulantes.php">
					<span>Consutla tripulantes</span>
				</a>
			</li>
			<li>
				<a href="c_consulta_comite.php">
					<span>Consulta comité</span>
				</a>
			</li>
			<li>
				<a href="c_consulta_botes.php">
					<span>Consulta botes</span>
				</a>
			</li>
			<li>
				<a href="c_consulta_directiva_botes.php">
					<span>Consulta directiva botes</span>
				</a>
			</li>
			<li>
				<a href="c_consulta_junta.php">
					<span>Consulta junta</span>
				</a>
			</li>
			
			<li>
				<a href="./includes_modulos/desconectar.php">
					<span>Desconectar</span>
				</a>
			</li>
			
			
		</ul>
	</nav>
	</div>
	
	
	

</body>


</html>
