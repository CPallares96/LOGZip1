<?php
	//conectamos Con el servidor
	$host ="localhost";
	$user ="root";
	$pass ="";
	$db="zipcar1";
	
	//funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
	$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
	mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
	
	//Recuperar Variables
	$email=$_POST['email'];
	$usuario=$_POST['usuario'];
	$contrasena=$_POST['contrasena'];
	
	//se hace la sentencia de sql
	$sql="INSERT INTO datos VALUES('$email',
								   '$usuario',
								   '$contrasena')";
	//se ejecuta la sentencia sql
	
	$ejecutar=mysqli_query($con,$sql);
	
	//se verifica la ejecucion
	
	if(!$ejecutar){
	
		echo"Hubo un error";
	
	}else{
	
	echo'<script type="text/javascript">
	alert("Tarea Guardada");
	window.location.href="index.html";
    </script>';
	
	}
	
	?>