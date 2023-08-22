<!DOCTYPE html>

<html lang="en" >
<head>
    <meta charset="utf-8" />

    <title>CONTARMASTER</title>
    <link type="icon" href="Img/logo.png" />
    <link rel=StyleSheet HREF="../css/Agregar.css" type="text/css" media=screen>
</head>
<body>
    <header><h1>Regristo_horas</h1></header>
    <form action="../php/Admin/Agregar.php" method="post" class="formulario">
        DIA<input type="date" name="date" id="date" required/>
        Horas <input type="float" name="hours" id="hours" required/>
        Valor <input type="float" name="money" id="money" required/>
        
    
        <input id="usuario" name="usuario" value="Paciente" type="hidden" />

                <input type="submit" value="Registrar" value="Registrar" name="Registrar" id="Registrar"/>
    </form>
    <footer>Desarrollado por yei427</footer>

</body>
</html>