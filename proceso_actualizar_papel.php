<HTML>

<HEAD>
    <TITLE>ACTUALIZAR REGISTRO</TITLE>
</HEAD>

<BODY>
    <?php
   require 'conexion_teatro.php';
   $nombre_papel = $_POST["nombre_papel"];
   echo $nombre_papel;
    $obra = $_POST["obra"];
    echo $obra;
    $duracion = $_POST["duracion"];
    echo $duracion;
    $atrezo = $_POST["atrezo"];
    echo $atrezo;
    //creamos la sentencia y la ejecutamos
    $consulta = "update papel set obra = '$obra', duracion = '$duracion', atrezo = '$atrezo' WHERE nombre_papel = '$nombre_papel'";
    $query=mysqli_query($db,$consulta);
    ?>

    <h1>
        <div align="center">Registro Actualizado</div>
    </h1>
    <div align="center"><a href="administrador.php">OK</a></div>

</BODY>

</HTML>