<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>MENÚ</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="./css/styles_menu_3.css" />

</head>
<body>
<?php
session_start();
?>

	<div id="demo-2">
	<h1>BIENVENIDO USUARIO <?php echo $_SESSION['user'];?> AL MENÚ AÑADIR</h1>
	<nav>
		<ul>
		
			<li>
				<a href="tripulantes.php">
					<span>Añadir tripulantes</span>
				</a>
			</li>
			<li>
				<a href="comite.php">
					<span>Añadir comité</span>
				</a>
			</li>
			<li>
				<a href="botes.php">
					<span>Añadir botes</span>
				</a>
			</li>
			<li>
				<a href="directiva_botes.php">
					<span>Añadir directiva botes</span>
				</a>
			</li>
			<li>
				<a href="junta.php">
					<span>Añadir junta</span>
				</a>
			</li>
			<li>
				<a href="vela.php">
					<span>Sellado de vela</span>
				</a>
			</li>
			<li>
				<a href="consultas.php">
					<span>Ir a consultas</span>
				</a>
			</li>
			<li>
				<a href="desconectar.php">
					<span>Desconectar</span>
				</a>
			</li>
			
		</ul>
		
	</nav>
	</div>
</body>
</html>
