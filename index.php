<?php
session_start();
$session = $_SESSION['usuario']; 
if($session == null) {
    header("location:login.php");
    session_destroy();
    echo $error;
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
            include('componentes\navBar.php')
        ?>
            
        <main>
            <div class="central">
                <div>
                <img class="logocentral imgcentral" src="images/logo2.jpeg"/>
                </div>
                <div class="botones">         
                    <a class="btn btn-warning btn-lg" role="button" href="buscar.php">Buscar</a>
                    <a class="btn btn-warning btn-lg" role="button" href="noticias.php">Noticias</a>
                    <a class="btn btn-warning btn-lg" role="button" href="cargar.php">Cargar</a>    
                </div>
            </div>
        </main>
            
        <?php
            include('componentes\footer.php')
        ?>

    </body>

</html>