<html>
<head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 20px;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    #tabla {
        border-collapse: collapse;
        width: 80%;
        margin: auto;
        background-color: #fff;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    #tabla th {
        background-color: #4CAF50;
        color: white;
        text-align: center;
    }

    #tabla th, #tabla td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #tabla tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #tabla tr:hover {
        background-color: #e6ffe6;
    }

    a {
        display: inline-block;
        margin: 10px;
        padding: 8px 12px;
        text-decoration: none;
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    a:hover {
        background-color: #45a049;
    }

    hr {
        margin: 20px auto;
        width: 80%;
    }
</style>
</head>
<body>
    <h2>Lista de Visitantes</h2>
    <?php
    $conexion = mysqli_connect("sql302.infinityfree.com","if0_40475202","gLBa1aYL5Hb","if0_40475202_interactivo");
    if(!$conexion) {
        echo "Error: No se pudo conectar a MySQL.<br>";
        echo "errno de depuración: " . mysqli_connect_errno() . "<br>";
        echo "error de depuración: " . mysqli_connect_error();
        exit;
    }

    $resultado = mysqli_query($conexion, "SELECT * FROM visita");
    ?>

    <table id="tabla">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Comentario</th>
        </tr>
        <?php
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila['id'] . "</td>";
            echo "<td>" . $fila['nombre'] . "</td>";
            echo "<td>" . $fila['comentario'] . "</td>";
            echo "</tr>";
        }
        mysqli_close($conexion);
        ?>
    </table>
    <hr>
    <div style="text-align:center;">
        <a href="formulario.html">Regresar al formulario</a>
        <a href="index.html">Ir a la página Principal</a>
    </div>
</body>
</html>