<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];

session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","refucan");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and pass='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['cargo_id']==1){ //administrador
    
    header("location:index.php");

}else
if($filas['cargo_id']==2){ //cliente
    $cargo = 2;
    header("location:index.php");
}
else{
    header("location:notLogged.php");
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>