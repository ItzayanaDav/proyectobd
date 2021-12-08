<HTML>

<HEAD>
    <TITLE>ACTUALIZAR REGISTRO</TITLE>
</HEAD>

<BODY>
    <?php
   require 'conexion_teatro.php';
   $nombre_teatro = $_POST["nombre_teatro"];
    $calle_numero = $_POST["calle_numero"];
    $localidad = $_POST["localidad"];
    $provincia = $_POST["provincia"];
    $telefono = $_POST["telefono"];
    $categoria = $_POST["categoria"];
    $aforo = $_POST["aforo"];
    //creamos la sentencia y la ejecutamos
    $consulta = "update teatro set calle_numero = '$calle_numero', localidad = '$localidad', provincia = '$provincia', telefono = '$telefono', categoria = '$categoria', aforo = '$aforo' $ WHERE nombre_teatro = '$nombre_teatro'";
    $query=mysqli_query($db,$consulta);
    ?>

    <h1>
        <div align="center">Registro Actualizado</div>
    </h1>
    <div align="center"><a href="administrador.php">OK</a></div>

</BODY>

</HTML>