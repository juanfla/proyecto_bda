<?php
include("conexion.php");
session_start();

if(isset($_POST["Publicar"])){
    $event = $_POST["Evento"];
    $deporte = $_POST["Options"];
	$fecha = $_POST["Fecha"];
	$Descripcion = $_POST["Descripcion"];
	date_default_timezone_set('America/Mexico_City');
	$date = date('d-m-y h:i:s');
	

	
$query = "INSERT INTO t_eventos VALUES (id_evento,'$event','$deporte','$date','$fecha','$Descripcion')";;

$resultado=mysqli_query($con,$query);
if($resultado){
	echo"<script>alert('Se ha publicado correctamente');
		location.href = 'eventos.php';	
	</script>";
	
}else{

	echo "<script>alert('NO se ha publicado correctamente, Lo Siento'); window.history.go(-1);</script>";	
}


}
mysqli_close($con);

?>