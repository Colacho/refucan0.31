
<div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" style="background-color: #fcaa1b;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="falseS" aria-controls="collapseOne">
                            Carga de Animales
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form id="perros" action="" method="POST" enctype="multipart/form-data">
                                <fieldset>
                                    <legend>Datos del Animal</legend>

                                    <label>Nombre:</label>
                                    <input type="text" name="nombre" size="30" require/><br>

                                    <label for="sexo">Sexo:</label>
                                        <select id="sexo" name="sexo" require>
                                            <option value="macho">Macho</option>
                                            <option value="hembra">Hembra</option>
                                        </select>
                                    <br>
                                    
                                    
                                    <label>Raza :</label><input type="text" name="raza" placeholder="Raza" size="33"/><br>
                                    
                                    <label for="porte">Porte:</label>
                                        <select id="porte" name="porte">
                                            <option value="pequeño">Pequeño</option>
                                            <option value="mediano">Mediano</option>
                                            <option value="grande">Grande</option>
                                        </select>
                                    
                                        <label for="manto">Manto:</label>
                                    <select id="manto" name="manto">
                                            <option value="blanco">Blanco</option>
                                            <option value="negro">Negro</option>
                                            <option value="marron">Marron</option>
                                            <option value="gris">Gris</option>
                                            <option value="dorado">Dorado</option>
                                            <option value="cobrizo">Cobrizo</option>
                                        </select><br>

                                    <label>Rasgo Particular:</label><br>
                                    <textarea cols="40" rows="5" name="rasgos"></textarea><br>

                                    <label>Cargar Foto del Animal:</label><br>
                                    <input type="file" name="foto" value="" ><br>


                                    <label for="protectora_nombre">Seleccione protectora:</label>
                                    <select name="protectora_nombre" id="protectora_nombre">
                                    
                                    <-- Mapea la base de datos en busca de protectoras -->
                                    <?php
                                        $con = mysqli_connect('localhost', 'root', '', 'refucan') or die('Error al conectarse');
                                        $consulta = "SELECT * FROM protectoras";
                                        $resultado = mysqli_query($con, $consulta);
                                        while($row = mysqli_fetch_assoc($resultado)) { 
                                            echo '
                                            <option value="'.$row['protectora_nombre'].'"> '.$row['protectora_nombre'].' </option>
                                            ';
                                        }
                                        mysqli_close($con);
                                    ?>
                                    </select><br>
                                    <label>Nombre Dueño:</label>
                                    <input type="text" name="nombre_persona" size="30" require/><br>

                                    <label>Apellido Dueño:</label>
                                    <input type="text" name="apellido_persona" size="30" require/><br>

                                    <label>DNI del dueño:</label>
                                    <input type="text" name="dni" placeholder="DNI del Dueño" size="24" /><br>

                                    <label>Domicilio del dueño:</label>
                                    <input type="text" name="domicilio_persona" placeholder="Domicilio del Dueño" size="24" /><br>

                                    <label>Telefono del dueño:</label>
                                    <input type="text" name="telefono_persona" placeholder="Telefono del Dueño" size="24" /><br>

                                    <button type="submit" name="formperro" class="btn btn-light btn-lg">Cargar</button>
                                </fieldset>
                            </form>
                            
                        </div>
                    </div>
                </div>

<?php
    if (isset($_POST['formperro'])) {
        
        $con = mysqli_connect('localhost', 'root', '', 'refucan') or die('Error al conectarse');
        
        
        $foto = $_FILES['foto']['name'];
        $tmpNombre = $_FILES['foto']['tmp_name'];
        $destino = "fotos/".$foto;
        
       


       

           move_uploaded_file($tmpNombre, $destino);
    

        $sql = "INSERT INTO animales
        VALUES(
        null,
        '".$_POST["nombre"]."', 
        '".$_POST["sexo"]."', 
        '".$_POST["raza"]."', 
        '".$_POST["porte"]."', 
        '".$_POST["manto"]."', 
        '".$_POST["rasgos"]."',
        '$foto',
        '".$_POST["protectora_nombre"]."',
        '".$_POST["nombre_persona"]."',
        '".$_POST["apellido_persona"]."',
        '".$_POST["dni"]."',
        '".$_POST["domicilio_persona"]."',
        '".$_POST["telefono_persona"]."'
        )";

        $resultado = mysqli_query($con, $sql) or die('Error de consulta');
        
        
        $sql2 = "INSERT INTO historia_clinica
        VALUES(
        0000-00-00, 
        0000-00-00, 
        0000-00-00, 
        0000-00-00, 
        0000-00-00,
        0000-00-00,
        0000-00-00,
        'si'
        
        )";

        $resultado = mysqli_query($con, $sql2) or die('Error de consulta');

        mysqli_close($con);
        
    }
?>
<!-- Clave foranea
ALTER TABLE animales ADD FOREIGN KEY(dni_persona) REFERENCES personas(dni); -->