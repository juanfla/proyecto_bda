<?php
include("conexion.php");


if(isset($_POST["Registrar"])){
	$username = $_POST["UserName"];
	$nombres = $_POST["Nombres"];
	$apellidos = $_POST["Apellidos"];
    $correo = $_POST["Correo"];
	$password1 = $_POST["Contrasena"];
	$password2 = $_POST["ConfirmarC"];
	
	if($password1!=$password2){
		die("Contraseñas no coinciden");
	}

	$password1 = hash("sha256",$password1);
	
	//for($id_usuario=1;$id_usuario<=1000;$id_usuario++){
	//$query = "SELECT id_usuario FROM t_usuarios WHERE id_usuario = '$id_us'";
$query = "INSERT INTO t_usuarios VALUES (id_usuario,'$username','$nombres','$apellidos','$correo','$password1')";

$resultado=mysqli_query($con,$query);
if($resultado){
	echo"<script>alert('Se ha registrado correctamente');
		location.href = 'index-usuario.php';	
	</script>";
	
}else{

	echo "<script>alert('NO se ha registrado correctamente, Lo Siento'); window.history.go(-1);</script>";	
}


}
mysqli_close($con);

?>