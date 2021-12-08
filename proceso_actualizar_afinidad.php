<HTML>

<HEAD>
    <TITLE>ACTUALIZAR REGISTRO</TITLE>
</HEAD>

<BODY>
    <?php
   require 'conexion_teatro.php';
   $id_afinidad = $_POST["id_afinidad"];
    $obra = $_POST["obra"];
    $papel = $_POST["papel"];
    $artista = $_POST["artista"];
    $interpretaciones = $_POST["interpretaciones"];
   
 //creamos la sentencia y la ejecutamos
    $consulta = "update afinidad set obra = '$obra', papel = '$papel', artista = '$artista', interpretaciones = '$interpretaciones' WHERE id_afinidad = '$id_afinidad'";
    $query=mysqli_query($db,$consulta);
    ?>

    <h1>
        <div align="center">Registro Actualizado</div>
    </h1>
    <div align="center"><a href="administrador.php">OK</a></div>

</BODY>

</HTML>