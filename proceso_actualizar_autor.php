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
    $precio_libreto = $_POST["precio_libreto"];
    $precio_representacion = $_POST["precio_representacion"];
    
    //creamos la sentencia y la ejecutamos
    $consulta = "update autor set nombre = '$nombre', apellidos = '$apellidos', edad = $edad, precio_libreto = $precio_libreto, precio_representacion = $precio_representacion WHERE nombre_artistico = '$nombre_artistico'";
    $query=mysqli_query($db,$consulta);
    ?>

    <h1>
        <div align="center">Registro Actualizado</div>
    </h1>
    <div align="center"><a href="administrador.php">OK</a></div>

</BODY>

</HTML>