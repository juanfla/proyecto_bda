<?php

$Correo= $_POST["Correo"];
$Contrasena= $_POST["Contrasena"];

//Conexion a DB

include("conexion.php");

$consulta="SELECT * FROM t_admins WHERE email='$Correo' and pass='$Contrasena'";
$resultado=mysqli_query($con, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
	header("location:indexlog.php");
	
}
else{
	echo '<script>
			alert("ERROR EN LA AUTENTICACION");
			window.history.go(-1);
			 </script>';
			 	   exit;
}
mysqli_free_result($resultado);

mysqli_close($conexion);

?>