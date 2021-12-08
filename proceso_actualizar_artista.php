<HTML>

<HEAD>
    <TITLE>ACTUALIZAR REGISTRO</TITLE>
</HEAD>

<BODY>
    <?php
   require 'conexion_teatro.php';
   $nombre_artistico = $_POST["nombre_artistico"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $edad = $_POST["edad"];
    $cache = $_POST["cache"];
    $descripcion = $_POST["descripcion"];
    $papel_afin = $_POST["papel_afin"];
    $cantidad_interpretaciones = $_POST["cantidad_interpretaciones"];

    //creamos la sentencia y la ejecutamos
    $consulta = "update artista set nombre = '$nombre', apellidos = '$apellidos', edad = '$edad', cache = '$cache', descripcion = '$descripcion', papel_afin = '$papel_afin', cantidad_interpretaciones = '$cantidad_interpretaciones'WHERE nombre_artistico = '$nombre_artistico'";
    $query=mysqli_query($db,$consulta);
    ?>

    <h1>
        <div align="center">Registro Actualizado</div>
    </h1>
    <div align="center"><a href="administrador.php">OK</a></div>

</BODY>

</HTML>