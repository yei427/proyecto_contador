<!DOCTYPE html>

<html lang="en" >
<head>
    <meta charset="utf-8" />

    <title>CONTARMASTER</title>
    <link type="icon" href="Img/logo.png" />
    <link rel=StyleSheet HREF="../css/Agregar.css" type="text/css" media=screen>
</head>
<body>
    <header><h1>horas</h1></header>
    <?php
    include ("../php/Conexion.php");
    $id=$_GET['id'];
    $sql="select * from Paciente where Id_Usuario=".$id;
    $result=mysqli_query($con,$sql);
    while($fila = mysqli_fetch_array($result)){
       //Obtener Valores del formulario
        $DIA = $fila['DIA'];
        $Horas =  $fila['Horas'];
        $Valor =  $fila['valor'];
        
        
    }
    ?>
    <form  method="POST" class="formulario">
        DIA <input type="date" name="date" id="date" value= <?php echo $DIA; ?> readonly/>
        Horas <input type="float" name="hours" id="hours" value= <?php echo $apellido; ?> readonly/>
        Valor <input type="float" name="money" id="money" value= <?php echo $direccion; ?> readonly/>
        
    
        <input id="id" name="id" value=<?php echo $id?> type="hidden" />

    </form>
    <?php mysqli_close($con); ?>
    <footer>Desarrollado por Yei427</footer>

</body>
</html>