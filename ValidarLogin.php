<?php
session_start();
$Correo = $_POST["Correo"];
$Contrasena = $_POST["Contrasena"];
$Contrasena = hash("sha256", $Contrasena);

//Conexion a DB

include("conexion.php");


$consulta="SELECT * FROM t_usuarios WHERE email='$Correo' and pass='$Contrasena'";
$resultado=mysqli_query($con, $consulta);

$consulta2="SELECT * FROM t_admins WHERE email='$Correo' and pass='$Contrasena'";
$resultado2=mysqli_query($con, $consulta2);


$filas=mysqli_num_rows($resultado);
$filas2=mysqli_num_rows($resultado2);
if($filas || $filas2>0){
	if($filas){
		$_SESSION['usuario'] = $Correo;
		header("location:indexlog.php");
	}
	if($filas2){
		$_SESSION['administrador'] = $Correo;
		header("location:irl/administrador.php");
	}

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