<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
        <title>CONTARMASTER</title> <!--titulo de la pagina web-->
        <link type="icon" href=""/> <!--linea para agregar logo, pendiete por logo href es donde se debe agregar el logo-->
        <link rel=StyleSheet HREF="../css/agregar.css" type="text/css" media=screen><!--se llama al css para la ejecucion de la pagina-->
        
    </head>
    <body>
        <header><h1>Inicio de Sesion</h1></header>
        <form action="../php/validar.php" method="post" name="Inicio_Sesion" class="formulario">


            Usuario
            <input type="text" name="user" id="user" /><br>

            Contraseña:
            <input type="password" name="password" id="password" />

            <input type="submit" value="Iniciar Sesion" name="iniciar" id="iniciar" />
            <a href="frm_Registro_Paciente.php">Registrarse</a>
        </form>

        <footer>Desarrollado por Yei427</footer>

    </body>
</html>