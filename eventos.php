<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="irl/styles.css">
	<style>
		 body{font-family: Aial; box-sizing: border-box;}
  
  form{
	background-color: black;
	border-radius: 15px;		<!--Curvea un poco las esquinas del cuadro en rosa -->
	padding: 35px;
	color: #999;
	margin: 0 auto;
	width: 700px;
  }
  input,textarea{
  border: 0;
  }
  .field{
  width: 50%;
	height: 50px;
	padding: 12px 20px;
	box-sizing: border-box;
	border: 2px solid #ccc;
	border-radius: 4px;
	background-color: #f8f8f8;
	resize: none;
  }
  .field:focus{
  }
  .center-content{
  }
  

	</style>
</head>
<body>    
    <header class="start">
        <div class="head-left">
            FOROCUT 
        </div>        
        <div class="head-right">
            <ul class="nav-menu-right">
                <li><a href="indexlog.php" class="btn"> Volver al inicio</a></li>
            </ul>
            
        </div>
    </header>
    <div class="menu-btn">
        <i class="fas fa-bars fa-2x"></i>
      </div>
<br>
<br>
<br>
<br>
		
	            <center>	
				
				  	<marquee direction="right">
                    <img src="Img/carreras.jpg" width="600" height="100"></img>
					<img src="Img/CUT.png" width="600" height="100"></img>
                    <img src="Img/futbol.jpg" width="600" height="100"></img> 
                    </marquee>
				</center>
				
                <form>

                <?php
                include("conexion.php");
                $query = "SELECT nombreEvento,deporte,fechaEvento,descripcion FROM t_eventos ";
                $result = mysqli_query($con,$query);
                echo "
                	<table border = 1 cellspacing = 1 cellpadding = 1>
                		<tr>
                			<th>Evento</th>
                			<th>Tipo</th>
                			<th>Fecha de inicio</th>
                			<th>Descripción</th>
                		</tr>";
                while($row = mysqli_fetch_array($result)){
                	echo "
                		<tr>
                			<td>".$row[0]."</td>
                			<td>".$row[1]."</td>
                			<td>".$row[2]."</td>
                			<td>".$row[3]."</td>
                		</tr>";
                }
                echo "</table>";
                                  ?> 

                </form>
				
	
				
				
				
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
    <?php?>
</body>
</html>