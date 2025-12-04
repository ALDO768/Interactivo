<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Tabla de información</title>
    <style>
    #tabla th, #tabla tr, #tabla td {
        border: 1px solid black;
    }
    </style>
</head>
<body>
<?php
$conexion = mysqli_connect("sql302.infinityfree.com","if0_40475202","gLBa1aYL5Hb","if0_40475202_interactivo");if(!$conexion){
    echo "Error: No se pudo conectar a MySQL";
    echo "errno de depuracion: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}

$resultado = mysqli_query($conexion, "SELECT id, nombre, comentario,  FROM visita");
?>
<p><a href="formulario.html">Agregar nuevo registro</a></p>   

    <table id="tabla">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Comentario</th>
    </tr>
    <?php
    while($fila = $resultado->fetch_assoc()){
        $id = $fila['id'];
        $nombre = $fila['nombre'];
        $apellidos = $fila['comentario'];
        echo "<tr>";
        echo "<td>";
        echo $fila['id'];
        echo "</td>";
        echo "<td>";
        echo $fila['nombre'];
        echo "</td>";
        echo "<td>";
        echo $fila['comentarios'];
        echo "</td>";
        echo "<td>";
        echo "<a href='detalle.php?id=$id'>Ver detalle<a/>    <a href='actualizar_formulario.php?id=$id'>Actualizar<a/>   <a href='eliminarRegistro.php?id=$id'>Eliminar<a/>";
        echo "</td>";
        echo "</tr>";

    };
    mysqli_close($conexion);
    ?>
    <table>
</body>
</html>