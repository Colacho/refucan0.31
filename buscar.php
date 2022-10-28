<?php

session_start();
$session = $_SESSION['usuario']; 
if($session == null) {
    $error = include('componentes\error.php');
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
    <main class="mainBusqueda">
        
            <form action="buscar.php" method="POST">
                <fieldset class="formBusqueda">
                    <legend>Seleccione Criterio de busqueda</legend>
                    <div>
                        <input class="inputBuscar" type="text" name="nombre" placeholder="Nombre" />
                        <input class="inputBuscar" type="text" name="raza" placeholder="Raza" />
                        <input class="inputBuscar" type="text" name="dni" placeholder="DNI" />
                        <input class="inputBuscar" type="text" name="porte" placeholder="Tamaño" />
                    </div>
                    <div class="botones">
                        <button class="btn btn-warning btn-lg" type="submit" name="buscar">Buscar</button>
                        <a type="button" class="btn btn-warning btn-lg" href="index.php">Volver</a>
                    </div>  
                </fieldset>
            </form>
        
        <div class="tablaBuscar">
            <!-- CONECCION -->
            <?php
                
                date_default_timezone_set('America/Argentina/Buenos_Aires');
                $fechaActual = date("Y-m-d");
                
                if(isset($_POST['buscar'])) {
                    $con = mysqli_connect('localhost', 'root', '', 'refucan') or die('Error al conectarse');
                        
                    $consulta = "SELECT * FROM animales
                    JOIN historia_clinica ON animales.animal_id = historia_clinica.clinica_id
                    WHERE nombre LIKE '%{$_POST['nombre']}%' 
                    AND raza LIKE '%{$_POST['raza']}%' 
                    AND dni LIKE '%{$_POST['dni']}%' 
                    AND porte LIKE '%{$_POST['porte']}%'
                    AND vivo = 'Si'
                    ";
                    $resultado = mysqli_query($con, $consulta);
                    mysqli_close($con);
                   
            ?>
            <!-- TABLA     -->
            <table class="table table-light table-striped table-lg">
                    <thead class="table table-dark">
                        <td>Foto</td>
                        <td>Nombre</td>
                        <td>Sexo</td>
                        <td>Raza</td>
                        <td>Porte</td>
                        <td>Protectora</td>
                        <td>Nombre Dueño</td>
                        <td>Apellido Dueño</td>      
                </thead>
                <?php   
                    while($row = mysqli_fetch_assoc($resultado)) {          
                ?>
                             
                <tbody >
                    <form method="POST" action="modificar.php">
                        <tr>
                            <tr>
                                <input style="display: none;" name="animal_id"  value="<?Php echo $row['animal_id'] ?>">
                                <td rowspan="2">
                                    <img height="50px" src="<?php echo 'fotos/'.$row['foto'].'' ?>">
                                </td>
                                <td >
                                    <?php echo $row['nombre']?>     
                                </td>
                                <td>
                                    <?php echo $row['raza'] ?>
                                </td>
                                <td>
                                    <?php echo $row['porte'] ?>
                                </td>
                                <td>
                                    <?php echo $row['protectora'] ?>
                                </td>
                                <td>
                                    <?php echo $row['dni'] ?> 
                                </td>
                                <td>
                                    <td rowspan="2"><button type="submit" class="btn btn-warning btn-md" value="editar" name="editar">Editar</button></td>
                                </td>          
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                        $parvovirus = $row['parvovirus'] == "0000-00-00" ? "No" : $row['parvovirus']; 
                                    ?>
                                    Parvovirus: <?php  echo $parvovirus ?>
                                    
                                </td>
                                <td>
                                    <?php
                                        $antirrabica = $row['antirrabica'] == "0000-00-00" ? "No" : $row['antirrabica']; 
                                    ?>
                                    Antirrabica: <?php echo $antirrabica ?>
                                    
                                </td>
                                <td>
                                <?php
                                        $hepatitis = $row['hepatitis'] == "0000-00-00" ? "No" : $row['hepatitis']; 
                                    ?>
                                    Hepatitis: <?php echo $hepatitis ?>
                                    
                                </td>
                                <td>
                                    <?php
                                        $moquillo = $row['moquillo'] == "0000-00-00" ? "No" : $row['moquillo']; 
                                    ?>
                                    Moquillo: <?php echo $moquillo ?>
                                     
                                </td>
                                <td>
                                    <?php
                                        $leptospirosis = $row['leptospirosis'] == "0000-00-00" ? "No" : $row['leptospirosis']; 
                                    ?>
                                    leptospirosis: <?php echo $leptospirosis ?>
                                     
                                </td>
                                <td>
                                    <?php
                                        $castrado = $row['castrado'] == "0000-00-00" ? "No" : $row['castrado']; 
                                    ?>
                                    Castrado: <?php echo $castrado ?>
                                    
                                </td>
                            </tr>      
                        </tr>
                    </form>
                </tbody>
                <?php                
            }     
        }
        ?>
            </table>
            
        </div>
        
    

    </main>


    

    <?php
        include('componentes\footer.php')
    ?>

    </body>

</html>
