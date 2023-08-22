<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>CONTARMASTER</title>
    <link type="icon" href="Img/logo.png" />
    <link rel=StyleSheet HREF="../css/principal.css" type="text/css" media=screen>
</head>
<body>
    <script src="../Scripts/Paciente.js"></script>
    <h1>CONTADOR de Horas</h1>
    <header><h1> Vista Usuario</h1></header>
    <div class="menu">
        <?php $id=$_GET['id']; ?>
        <div class="dropdown">
            <button class="mainmenubtn">Gestion usuario</button>
            <div class="dropdown-child">
                <a href="../formularios/frm_horas.php?id="+$id>Registrar</a>
                <a onclick="cargar_A(<?php echo $id; ?>)">ver Horas</a>
                <a onclick="cargar_S()">Ver servicios</a>

            </div>
        </div>
          <div class="dropdown">
            <a class="button" href="../php/cerrando.php">Cerrar sesión</a>

        </div>
    </div>
          
  <input id="id" name="id" value=<?php echo $id?> type="hidden" />
    <div name="subventana">
        <object type="text/html">
        </object>
    </div>
   
</body>
</html>
