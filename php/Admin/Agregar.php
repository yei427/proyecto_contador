<?php
include("../Conexion.php");

if(isset($_POST['Registrar'])){
	//Obtener Valores del formulario
	$nombre = $_POST['name'];
	$apellido = $_POST['lastname'];
	$direccion = $_POST['adress'];
	$celular = $_POST['phone_number'];
	$ciudad = $_POST['city'];
	$email = $_POST['email'];
	$tipo_id = $_POST['type_D'];
	$num_id = $_POST['Id_Number'];
	$fecha = $_POST['birth_date'];
	$pass = $_POST['password'];
	$user=$_POST['usuario'];
	$Fecha=date("Y-m-d",strtotime($fecha));
     
    $x = $num_id;
	
	$nuevo_Id=mysqli_query($con,"select Num_Id from $user where Num_Id='$num_id'");

	//creacion de tabla con id del usuario 

	$tabla1 = " CREATE TABLE`" . mysqli_real_escape_string($con, $x)."`(     
    id INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    valor2 VARCHAR(50),
    Valor1 VARCHAR(50),
    Horas INT(3) )";

	

	if(mysqli_query($con, $tabla1)){
		echo "La tabla se creó correctamente...";
	}else{
		die("Error al crear tabla: " . $con->error);


	}
	
	if(mysqli_num_rows($nuevo_Id)>0)
	{
		echo "
		<p class='avisos'>El usuario ya esta registrado</p>
		<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p>
		";
	}else{
		//Insertar en Tabla Usuarios
		$ejecutar = mysqli_query($con,"INSERT INTO usuarios(email,clave,rol) VALUES('$email','$pass','$user')") or die (mysqli_error($con));

		//Obtener valor del Id_Usuario
		$sql="select Id_Usuario from usuarios where email='$email'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($result);
		$id=$row['Id_Usuario'];
		
		//Insertar en Tabla Paciente
		$ejecutar = mysqli_query($con,"INSERT INTO $user (Nombre,Apellido,Direccion,Telefono_Celular,Ciudad,Email,Tipo_Id,Num_id,Fecha_Nacimiento,Id_Usuario) VALUES('$nombre','$apellido','$direccion','$celular','$ciudad','$email','$tipo_id','$num_id','$Fecha','$id')")  or die (mysqli_error($con)); 

		
		//Se comprueba la inserción de ambos registros
		if($ejecutar){
			echo "
			<p class='avisos'>El  $user fue registrado exitosamente</p>
			<p class='avisos'><a href='javascript:history.go(-2)' class='clase1'>Volver atrás</a></p>
			";
	
		}
		
	}}
	mysqli_close($con);
	?>