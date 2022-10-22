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
                    <div>
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
                    ";
                    $resultado = mysqli_query($con, $consulta);
                    mysqli_close($con);
                   
            ?>
                    
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
                                    <input style="display: none;" type="file" name="foto" value="<?php echo $foto ?>">
                                </td>
                                <td >
                                    <?php echo $row['nombre']?>
                                    <input style="display: none;" value="<?php echo $row['nombre']?>" name="nombre">  
                                </td>
                                <td>
                                    <?php echo $row['sexo'] ?>
                                    <input style="display: none;" value="<?php echo $row['sexo']?>" name="sexo"> 
                                </td>
                                
                                <td>
                                    <?php echo $row['raza'] ?>
                                    <input style="display: none;" value="<?php echo $row['raza']?>" name="raza"> 
                                </td>
                                <td>
                                    <?php echo $row['porte'] ?>
                                    <input style="display: none;" value="<?php echo $row['porte']?>" name="porte"> 
                                </td>
                                <td style="display: none;">
                                    <?php echo $row['manto'] ?>
                                    <input style="display: none;" value="<?php echo $row['manto']?>" name="manto"> 
                                </td>
                                <td style="display: none;">
                                    <?php echo $row['rasgos'] ?>
                                    <input style="display: none;" value="<?php echo $row['rasgos']?>" name="rasgos"> 
                                </td>
                                
                                
                                <td>
                                    <?php echo $row['protectora'] ?>
                                    <input style="display: none;" value="<?php echo $row['protectora']?>" name="protectora"> 
                                </td>
                                <td>
                                    <?php echo $row['nombre_persona'] ?>
                                    <input style="display: none;" value="<?php echo $row['nombre_persona']?>" name="nombre_persona"> 
                                </td>
                                <td>
                                    <?php echo $row['apellido_persona'] ?>
                                    <input style="display: none;" value="<?php echo $row['apellido_persona']?>" name="apellido_persona"> 
                                </td>
                                <td style="display: none;">
                                    <?php echo $row['dni'] ?>
                                    <input style="display: none;" value="<?php echo $row['dni']?>" name="dni"> 
                                </td>
                                <td style="display: none;">
                                    <?php echo $row['domicilio_persona'] ?>
                                    <input style="display: none;" value="<?php echo $row['domicilio_persona']?>" name="domicilio_persona"> 
                                </td>
                                <td style="display: none;">
                                    <?php echo $row['telefono_persona'] ?>
                                    <input style="display: none;" value="<?php echo $row['telefono_persona']?>" name="telefono_persona"> 
                                </td>
                                <td>
                                
                                    <td rowspan="2"><button type="submit" class="btn btn-warning btn-md" value="editar" name="editar" >Editar</button></td>
                                </td>
                               
                                
                            </tr>
                            <tr>
                                
                                    <td>
                                        Parvovirus: <?php echo $row['parvovirus'] ?>
                                        <input style="display: none;" value="<?php echo $row['parvovirus']?>" name="parvovirus"> 
                                    </td>
                                    <td>
                                        Antirrabica: <?php echo $row['antirrabica'] ?>
                                        <input style="display: none;" value="<?php echo $row['antirrabica']?>" name="antirrabica"> 
                                    </td>
                                    <td>
                                        Hepatitis: <?php echo $row['hepatitis'] ?>
                                        <input style="display: none;" value="<?php echo $row['hepatitis']?>" name="hepatitis"> 
                                    </td>
                                    <td>
                                        Moquillo: <?php echo $row['moquillo'] ?>
                                        <input style="display: none;" value="<?php echo $row['moquillo']?>" name="moquillo"> 
                                    </td>
                                    <td>
                                        leptospirosis: <?php echo $row['leptospirosis'] ?>
                                        <input style="display: none;" value="<?php echo $row['leptospirosis']?>" name="leptospirosis"> 
                                    </td>
                                    <td>
                                        Castrado: <?php echo $row['castrado'] ?>
                                        <input style="display: none;" value="<?php echo $row['castrado']?>" name="castrado"> 
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
