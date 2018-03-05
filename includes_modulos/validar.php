<?php
session_start();
	require("conexion.php");

$usuario=$_POST['usuario'];
$pass=$_POST['pwd'];


//la variable $mysqli viene del conxion que lo llamo con el require("conexion.php")
$query=mysqli_query($mysqli,"SELECT * FROM usuario WHERE user='$usuario'");
//$res=mysqli_fetch_assoc($query) Obtiene una fila de resultado como un array asociativo
if($res=mysqli_fetch_assoc($query)){
	//va a mirar que coincida usuario y contraseña y que ademas sea con un nombre para que vaya a un menu u otro dependiendo del usuario
	if ($pass==$res['password'] and $usuario=='comite') {
		$_SESSION['id']=$res['id'];
		$_SESSION['user']=$res['user'];

		header("location: ../comite_consulta.php");
		
	}elseif ($pass==$res['password']) {
		$_SESSION['id']=$res['id'];
		$_SESSION['user']=$res['user'];

		header("location: ../menu.php");
		
	}

		// COMPRUEBA EL USUARIO Y LA CONTRASEÑA Y DA ACCESO AL MENÚ PRINCIPAL
		elseif ($reg['user']==$_POST['user'] and $pass==$res['password']){
			echo "<script>alert('CONTRASEÑA CORRECTA. BIENVENIDO ADMINISTRADOR')</script>";
			echo include("menu_user.php");
	}
	else{
		echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		echo "<script>location.href='../index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE; PORFAVOR PÓNGASE EN CONTACTO CON EL ADMINISTRADOR")</script> ';
		
		echo "<script>location.href='../index.php'</script>";	

	}


	mysqli_close($conexion);

?>