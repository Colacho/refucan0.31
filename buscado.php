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
        <main class="">
            <div class="central">
                <!-- INICIO CARRUSEL -->
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                            <img style="max-height: 200px;" src="images/buscado.png" class="d-block w-100" alt="...">
                        </div>
                    <?php 
                     $con = mysqli_connect('localhost', 'root', '', 'refucan') or die('Error al conectarse');
                    
                     $consulta = "SELECT * FROM animales WHERE buscado = 'Si'";
             
                     $resultado = mysqli_query($con, $consulta);
                    
                        while($row = mysqli_fetch_assoc($resultado)) { 
                        echo '
                        <div class="carousel-item">
                            <img style="max-height: 200px;" src="fotos/'.$row['foto'].'" class="d-block w-100" alt="...">
                        </div>
                        ';
                    }    
                    ?>
                        
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- FIN CARRUSEL -->
                <div class="botones">
                    <a class="btn btn-warning btn-lg" role="button" href="index.php">Volver</a>
                </div>
                <div class="tablanoticias">
                    <?php
                            
                            $con = mysqli_connect('localhost', 'root', '', 'refucan') or die('Error al conectarse');
                    
                            $consulta = "SELECT * FROM animales WHERE buscado = 'Si'";
                    
                            $resultado = mysqli_query($con, $consulta);
                        ?>
                        <table class="table table-light table-striped">
                            <thead class="table table-dark" >
                                <th >Foto</th>
                                <th >Nombre</th>
                                <th >Datos</th>
                            </thead>
                            <tbody>
                            <?php while($row = mysqli_fetch_assoc($resultado)) { 
                                echo '
                                
                                    <tr>
                                        <td >
                                            <img height="50px" src="fotos/'.$row['foto'].'">
                                        </td>
                                        <td>'.$row['nombre'].'</td>
                                        <td>'.$row['buscado_datos'].'</td>
                                    </tr>
                                
                                ';                             
                            } 
                            mysqli_close($con);    
                        ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </main>
            
        <?php
            include('componentes\footer.php');    
        ?>

    </body>

</html>