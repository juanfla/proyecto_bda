<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro deportivo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="irl/styles.css">
</head>
<body>    
    <header class="start">
        <div class="head-left">
            FOROCUT 
        </div>        
        <div class="head-right">
            <ul class="nav-menu-right">
                <li><a href="login.php" class="btn"><i class="fas fa-key"></i> iniciar sesion</a></li>
                <li><a href="registro.php" class="btn"><i class="fas fa-user-plus"></i>No</a></li>
            </ul>
            
        </div>
    </header>
	
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v7.0"></script>

    <div class="menu-btn">
        <i class="fas fa-bars fa-2x"></i>
      </div>
    <div class="principal">        
        <nav class="menu">
            <ul>
                <!-- left Nav -->                
                <li><a href="#">¿Qué es forocut?</a>
                    <ul>
                         <li><a href="irl/acerca_de.php">Acerca de</a></li>
                        <li><a href="irl/QuienesSomos.php">¿Quiénes somos?</a></li>
                                           
                    </ul>
                </li>
                <li><a href="eventos.php">Eventos</a></li>                                
                <li><a href="irl/normas.php">Normas del foro</a></li>              
                <li><a href="#">Soporte</a>
                    <ul>
                        <li><a href="#abajo">Contáctenos</a></li>                           
                    </ul>
                </li>
            </ul>
                    <!-- Right Nav -->
          
        </nav>
        <div class="iniciasec">
                <article>
                    Para poder participar necesitas iniciar sesion
                </article>
            
        </div>
        
        <div class="slider1">
            <ul class="slider">
                <li><img src="https://cnet1.cbsistatic.com/img/R52JECVHc9Yd4qJD2vbYNTgpoCY=/940x0/2020/03/23/28169f34-20c6-45c0-9f42-08ce381032a5/gettyimages-1184503153.jpg" alt=""></li>
                <li><img src="https://cdn.vidasana.sv/wp-content/uploads/2015/08/deportes-adolescencia-ejercicio-f%C3%BAtbol.jpg" alt=""></li>
                <li><img src="https://http2.mlstatic.com/red-voleibol-sport-net-volleyball-790metros-h229-D_NQ_NP_624584-MLM25755641265_072017-F.jpg" alt=""></li>
            </ul>
        </div>
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