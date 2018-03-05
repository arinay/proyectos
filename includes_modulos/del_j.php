<?php


extract($_GET);
		require("conexion.php");
if(@$idborrar==$id[0]){
		
		$sql="DELETE FROM junta_directiva WHERE id=$id";
		$resborrar=mysqli_query($mysqli,$sql);
	
		echo '<script>alert("REGISTRO BOORRADO")</script> ';
		
		echo "<script>location.href='../consultas.php'</script>";

}
?>
