<div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" style="background-color: #fcaa1b;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Carga de Protectoras
        </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <form id="protectora" action="" method="POST">
                <fieldset>
                    <legend>Datos de la Protectora</legend>
                    <label>Nombre</label><br><input type="text" name="protectora_nombre" placeholder="Nombre" size="30"/><br>
                    <label>DNI Responsable</label><br><input type="text" name="protectora_dni" placeholder="DNI" size="30"/><br>
                    <label>Facebook</label><br><input type="text" name="facebook" placeholder="Facebook" size="30"/><br>
                    
                    <button type="submit" name="protectora" class="btn btn-light btn-lg" >Cargar</button>
                </fieldset>
                <br>
            </form>
        </div>
    </div>
</div>
<?php
if (isset($_POST['protectora'])) {
    $con = mysqli_connect('localhost', 'root', '', 'refucan') or die('Error al conectarse');
    $sql = "INSERT INTO protectoras
    VALUES(
        null,
        '".$_POST["protectora_nombre"]."', 
        '".$_POST["protectora_dni"]."', 
        '".$_POST["facebook"]."' 
        
        )";
        $resultado = mysqli_query($con, $sql) or die('Error de consulta');
    mysqli_close($con);
}
?>
