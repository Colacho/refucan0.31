<?php

session_start();
$session = $_SESSION['usuario'];


if (!isset($session)) {
    session_destroy();
    header('location:login.php');
    exit();
} 

?>

<!DOCTYPE html>
<html>

    <?php
        include('componentes\head.php')
    ?>
   
    <body class="containergeneral">
        
        <?php
            include('componentes\header.php');
            include('componentes\navBar.php');
            
        ?>
        <main>
            
            <div class="central">
                <h1 class="titulo-carga">Seleccione que desea Cargar</h1>
                
                <div class="accordion" id="accordionExample">
                    
                    <?php
                    include('componentes\cargarAnimal.php');
                    include('componentes\cargarPersona.php');
                    include('componentes\cargarProtectora.php')
                    ?>

                </div>
                <a type="button" class="btn btn-warning btn-lg" href="index.php">Volver al inicio</a>
            </div> 
        </main>
            
        <?php
            include('componentes\footer.php')
            
        ?>

    </body>

    
</html>