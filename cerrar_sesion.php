<?php
    session_start();
    session_destroy();
    header("Location: index-usuario.php")
?>