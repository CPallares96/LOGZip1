<?php


//Recuperar Variables

$inp_usuario=$_POST['inp_usuario'];
$inp_contrasena=$_POST['inp_contrasena'];

//coneccion a la base de datos
$conexion=mysqli_connect("localhost","root","","zipcar1");
$consulta="SELECT * FROM datos WHERE usuario='$inp_usuario' and contrasena='$inp_contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    
    header("location:CRUDZip1-master\index.html");
}else{
    echo "Error de autenticación";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>