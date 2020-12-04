<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADIMNISTRADOR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>    
    <header class="start">
        <div class="head-left">
            FOROCUT 
        </div>        
        <div class="head-right">
            <ul class="nav-menu-right">
                <li><p class="welcome">Bienvenido</p></li>
				<li><a href="../indexAdmin.php" class="btn">Cerrar Sesión</a></li>

            </ul>
            
        </div>
    </header>
    <div class="menu-btn">
        <i class="fas fa-bars fa-2x"></i>
      </div>
    <div class="principal">        
      
       
	    <br><br>
	   <center>
	   
	  <div class="iniciasec">
                <article>
                   USUARIOS
                </article>
            
        </div>
	   </center>
	   
        <br><br>
		<center>
        
        <?php
                include("../conexion.php");
                $query = "SELECT nombres,apellidos,username,email FROM t_usuarios ";
                $result = mysqli_query($con,$query);
                echo "
                	<table border = 1 cellspacing = 1 cellpadding = 1>
                		<tr>
                			<th>Nombre</th>
                			<th>Apellidos</th>
                			<th>Username</th>
                			<th>Email</th>
                		</tr>";
                while($row = mysqli_fetch_array($result)){
                	echo "
                		<tr>
                			<td>".$row[1]."</td>
                			<td>".$row[2]."</td>
                			<td>".$row[0]."</td>
                			<td>".$row[3]."</td>
                		</tr>";
                }
                echo "</table>";
                                  ?> 

		</center>
		
        <footer class="first-footer">        
            Contactenos:
            <ul>                
                <li>
                    <a name="abajo" href="mailto:jose.escobedo1001@gmail.com" target="_blank">
                        <i class="far fa-envelope"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/Deeport-103087228093570/" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/_deeport_/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/deeport10" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
            </ul>       
        </footer> 
		<center>
        <footer class="abajo">
            &copy; 2020 *DEEPORT* Derechos reservados
        </footer>
		</center>
    </div>
    
</body>
</html>