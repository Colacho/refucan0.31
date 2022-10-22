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

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$id = $_POST['animal_id'];
		$nombre = $_POST['nombre'];
		$sexo = $_POST['sexo'];
		$raza = $_POST['raza'];
		$porte = $_POST['porte'];
		$manto = $_POST['manto'];
		$rasgos = $_POST['rasgos'];
		$foto = $_POST['foto'];
		$protectora = $_POST['protectora'];
		$nombre_persona = $_POST['nombre_persona'];
		$apellido_persona = $_POST['apellido_persona'];
		$dni = $_POST['dni'];
		$domicilio_persona = $_POST['domicilio_persona'];
		$telefono_persona = $_POST['telefono_persona'];
		

		echo '
		
		<div class="tablaBuscar">
		<form method="POST">
			<table class="table table-light table-striped table-lg">
				<thead class="table table-dark">
					<td>Foto</td>
					<td>Nombre</td>
					<td>Raza</td>
					<td>Porte</td>
					<td>Dueño</td>
					<td>DNI</td>
					<td>Telefono</td>
					<td>Domicilio</td>
			</thead>
			<tbody>
                    <tr>
                        <tr>
							
                            <td >
                                <input value="'.$nombre.'" name="nombre">  
                            </td>
						</tr>
						<tr>
							<td >
                                <input value="'.$sexo.'" name="sexo">  
                            </td>
						</tr>
						<tr>
							<td>
                                <input value="'.$dni.'" name="dni">  
                            </td>
						</tr>
						<tr>
							<td >
                                <input value="'.$raza.'" name="raza">  
                            </td>
						</tr>
						<tr>
							<td >
                                <input value="'.$porte.'" name="nombre">  
                            </td>
						</tr>
						<tr>
							<td >
                                <input value="'.$manto.'" name="nombre">  
                            </td>
						</tr>
						<tr>
							<td >
                                <input value="'.$rasgos.'" name="nombre">  
                            </td>
						</tr>
						<tr>
							<td >
                                <input type="file" value="'.$foto.'" name="nombre">
								<img height="50px" src="fotos/'.$foto.'"> 
                            </td>
						</tr>
						<tr>
							<td >
                                <input value="'.$protectora.'" name="nombre">  
                            </td>
						</tr>
						<tr>
                            <td>
                            
                                <td rowspan="2"><button class="btn btn-light btn-lg" type="submit" name="modificar" >Modificar</button></td>
                            </td>
                        </tr>
                            
                        </tr>
                    
					</tbody>
					</table>
			</form>
		</div>
		<button class="btn btn-light btn-lg"><a href="buscar.php">Volver</a></button>
		';
		
	}
?>
	</main>
</body>
</html>       


<?php
if(isset($_POST['modificar'])) {
    $con = mysqli_connect('localhost', 'root', '', 'refucan') or die('Error al conectarse');
    $sql3 = "UPDATE animales SET 
    nombre = '$nombre' WHERE animal_id = '$id'
";
    $resultado = mysqli_query($con, $sql3) or die('Error de consulta');
    mysqli_close($con);
}
?>