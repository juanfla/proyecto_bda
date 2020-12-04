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
    <form action="registrar.php" method="POST">
        <div class="regi">
        <p>Registrar nueva cuenta</p>
            <div class="inputs">
             <input type="text" name="UserName" placeholder="UserName" required maxlength="15">
            </div>
            <div class="inputs">
             <input type="text" name="Nombres" placeholder="Nombres" required>
            </div>
            <div class="inputs">
             <input type="text" name="Apellidos" placeholder="Apellidos" required>
            </div>
            <div class="inputs">
                <input type="email" name="Correo" placeholder="Correo" required>
            </div>
            <div class="inputs">
                <input type="password" name="Contrasena" maxlength="20" placeholder="Contraseña" required minlength="6">
            </div>
            <div class="inputs">
                <input type="password" name="ConfirmarC" maxlength="20" placeholder="Confirmar Contraseña" required minlength="6">
            </div>
            <center><input type="submit" name = "Registrar" id="Registrar" value="Registrar" ></center>

            <center><a href="login.php">¿Ya tienes cuenta?</a></center>
       
        </div>    
    			                                                      
    </form>
         
</body>

</html>
