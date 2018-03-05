<?php
session_start();
include("includes_modulos/conexion.php");
if(isset($_SESSION['usuario'])){
	echo '<script> window.location= "menu.php";</script>';
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8 /">
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="./css/index.css">
	<title>Iniciar Sesión</title>

</head>
<body>
 <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <h2>ACCESO USUARIO</h2>
            <img id="profile-img" class="profile-img-card" src="backgrounds/logosinada.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="./includes_modulos/validar.php" >
                
                <input type="text" id="inputEmail" class="form-control" placeholder="&#128101; Usuario" required >
                <input type="password" id="inputPassword" class="form-control" placeholder="&#128272; Contraseña" required>
                
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Acceder</button>
            </form><!-- /form -->
           
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>


</html>
