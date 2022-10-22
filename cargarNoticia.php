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

        <main class="carganoticia">
            <form action="cargarnoticia.php" method="POST">
                <fieldset>
                    <legend>Nueva Noticia</legend>
                    <textarea cols="40" rows="5" name="texto"></textarea><br>
                    
                    <button type="submit" name="carga" class="btn btn-light btn-lg">Cargar</button>
                    <button class="btn btn-light btn-lg" ><a href="noticias.php">Volver</a></button>
                </fieldset>
            </form>
            
        </main>
        <?php
            if (isset($_POST['carga'])) {
                date_default_timezone_set('America/Argentina/Buenos_Aires');
                $fechaActual = date("Y-m-d H:i");
                $con = mysqli_connect('localhost', 'root', '', 'refucan') or die('Error al conectarse');
                $sql = "INSERT INTO noticias
                VALUES(
                null,
                '$fechaActual',
                '".$_POST["texto"]."'
                )";
        
        
                $resultado = mysqli_query($con, $sql) or die('Error de consulta');
        
                mysqli_close($con);
            }
        ?>
       
       <?php
            include('componentes\footer.php')
        ?>

    </body>

</html>
