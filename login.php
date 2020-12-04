<?php
        session_start();
        /*if(isset($_SESSION['usuario'])){
            header("location: ValidarLogin.php");
        }*/
?>


<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="irl/styles.css">
    <link rel="stylesheet" href="irl/styles_forms.css">
</head>
<body>
    
    <header class="start">
        <div class="head-left">
            FOROCUT 
        </div>        
        <div class="head-right">
            <ul class="nav-menu-right">
                <li><a href="index-usuario.php" class="btn"> Volver al inicio</a></li>
            </ul>
            
        </div>
    </header>
    </div>
    <form action="ValidarLogin.php" method="POST">
        <div class="regi">
        <p>Iniciar sesión</p>
        
            <div class="inputs">
                <input type="email" name="Correo" id="Correo" placeholder="Correo" required>
            </div>
            <div class="inputs">
                <input type="password" name="Contrasena" id="Contrasena" maxlength="20" placeholder="Contraseña" required>
            </div>
            <center><input type="submit" value="Ingresar" ></center>
            <center><a href="registro.php">¿Aún no tienes cuenta?</a></center>
			<br>
			<br>
			<br>
        </div>    
    			                                                      
    </form>
         
</body>

</html>
