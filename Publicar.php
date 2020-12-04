<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar...</title>
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
                    <img src="Img/carreras.jpg" width="600" height="300"></img>
					<img src="Img/CUT.png" width="600" height="300"></img>
					<img src="Img/futbol.jpg" width="600" height="300"></img> </marquee>
				
				</center>
				
                <form action = "reg_publicacion.php" method = "POST">
				<br>
                       <p>Nombre del evento</p>
                        <input type="text" name = "Evento" class="field" maxlength="15" required><br>
                        
						
						<p>Seleccione el deporte</p>
						<select name = "Options"> 
						<option>Fútbol</option>
						<option>Basebol</option>
						<option>Balonmano</option>
						<option>Tenis</option>
						<option>Voleibol</option>
						<option>Baloncesto</option>
						<option>Otro... Especificar en la descripcion y nombre del evento</option>
						
						</select>
									<!-- Campo de entrada de fecha y hora -->
						<p>Selecciona la fecha y hora deseada</p>
									<input type="datetime-local" name="Fecha" min="2018-03-25"
									max="2018-05-25" step="2">
						
						
						<p>Descripcion de tu evento</p>
						<textarea class="textarea" name = "Descripcion" required></textarea><br>
						<p class="center-content">
                    <input type="submit" class="btn btn-green" name = "Publicar" value="enviar">
						</p>
  Declaro haber leido y aceptar las reglas generales del sitio web y estoy tratando el foro para actividades deportivas<input type="checkbox"  required><br>
  <br>
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