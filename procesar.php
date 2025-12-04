<html>
    <head>
        <title>Procesar datos $_POST</title>
</head>
<body>
    <?php
    $nombre_post = $_POST['campoNombre'];
    $comentario_post = $_POST['campoComentario'];


    $conexion = mysqli_connect("sql302.infinityfree.com","if0_40475202","gLBa1aYL5Hb","if0_40475202_interactivo");

if(!$conexion){
    echo "Error: No se pudo conectar a MySQL";
    echo "error de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}

    $sql = "INSERT INTO visita (nombre,comentario) VALUES ('$nombre_post','$comentario_post')";
    if(mysqli_query($conexion, $sql)){
    echo "Registro insertado exitosamente";
    }else{
    echo "Error: no se pudo realizar el registro " . "<br>". mysqli_error($conexion);
    }
?>
<h2>Tu comentario se guardo correctamente</h2>
<a href="formulario.html">Volver al formulario</a>
<a href="ver_visitas.html">Ver listado</a>
</body>
</html>