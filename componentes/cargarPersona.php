<div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" style="background-color: #fcaa1b;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Carga de Personas
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <form id="personas" action="" method="POST">
                <fieldset>
                    <legend>Datos Personales</legend>
                    <label>Nombre:</label><br><input type="text" name="nombre" placeholder="Nombre" size="30"/><br>
                    <label>Apellido:</label><br><input type="text" name="apellido" placeholder="Apellido" size="30"/><br>
                    <label>Nº de Documento:</label><br><input type="text" name="dni" placeholder="DNI" size="30"><br>
                    <label>Domicilio:</label><br><input type="text" name="domicilio" placeholder="Domicilio" size="30"/><br>
                    <label>Celular:</label><br><input type="text" name="telefono" placeholder="sin 0 y sin 15" size="30"/><br>
                    <label>Correo Electronico:</label><br><input type="text" name="email" placeholder="Correo Electronico"size="30"><br>
                    <button type="submit" name="formpersona" class="btn btn-light btn-lg" >Cargar</button>
                </fieldset>
                <br>
            </form>
        </div>
    </div>
</div>
<?php
        
        if (isset($_POST['formpersona'])) {
            $con = mysqli_connect('localhost', 'root', '', 'refucan') or die('Error al conectarse');
            $sql = "INSERT INTO personas
            VALUES(
                null,
                '".$_POST["nombre"]."', 
                '".$_POST["apellido"]."', 
                '".$_POST["dni"]."', 
                '".$_POST["domicilio"]."', 
                '".$_POST["telefono"]."',
                '".$_POST["email"]."'
                )";
                $resultado = mysqli_query($con, $sql) or die('Error de consulta');
            mysqli_close($con);
        }


        
    ?>