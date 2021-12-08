<HTML>

<HEAD>
    <TITLE>ACTUALIZAR REGISTRO</TITLE>
</HEAD>

<BODY>
    <?php
   require 'conexion_teatro.php';
   $id_funcion = $_POST["id_funcion"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $teatro = $_POST["teatro"];
    $obra = $_POST["obra"];
    $id_afinidad = $_POST["id_afinidad"];


    //creamos la sentencia y la ejecutamos
    $consulta = "update funcion set fecha = '$fecha', hora = '$hora', teatro = '$teatro', obra = '$obra', id_afinidad = '$id_afinidad' WHERE id_funcion = '$id_funcion'";
    $query=mysqli_query($db,$consulta);
    ?>

    <h1>
        <div align="center">Registro Actualizado</div>
    </h1>
    <div align="center"><a href="administrador.php">OK</a></div>

</BODY>

</HTML>