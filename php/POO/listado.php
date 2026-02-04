<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #121212; /* Fondo negro */
            color: #f1f1f1; /* Texto blanco para buen contraste */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative; /* Aseguramos que los elementos se posicionen correctamente */
            min-height: 100vh; /* Para asegurarnos de que el cuerpo cubra toda la pantalla */
        }

        /* Títulos principales */
        h1, h2 {
            color: #e60000; /* Rojo */
            font-size: 2rem;
            text-align: center;
            margin-top: 20px;
        }

        /* Botones */
        button {
            background-color: #e60000; /* Rojo */
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        /* Hover en botones */
        button:hover {
            background-color: #ff3333; /* Rojo más brillante */
        }

        /* Tabla */
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #222222; /* Fondo oscuro para la tabla */
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #333333; /* Línea de separación gris oscuro */
        }

        th {
            background-color: #e60000; /* Rojo en encabezados */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #333333; /* Filas alternas más oscuras */
        }

        tr:hover {
            background-color: #444444; /* Color al pasar el mouse */
        }

        /* Enlace del botón "Volver a la lista" */
        a {
            text-decoration: none;
        }

        a button {
            background-color: #444444; /* Gris oscuro para el botón de "Volver" */
        }

        a button:hover {
            background-color: #333333; /* Gris aún más oscuro al pasar el mouse */
        }

        /* Contenedor para el botón "Nuevo Usuario" */
        .nuevo-usuario-container {
            width: 80%; /* Asegura que el contenedor tenga el mismo ancho que la tabla */
            text-align: right; /* Alinea el botón a la derecha */
            margin-top: 20px;  /* Espacio por encima del botón */
        }

        /* Estilo del botón "Nuevo Usuario" */
        .nuevo-usuario {
            padding: 10px 20px;
            background-color: #e60000; /* Cambié el color a gris oscuro */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .nuevo-usuario:hover {
            background-color: #ff3333; /* Gris aún más oscuro al pasar el mouse */
        }
    </style>
</head>
<body>

    <h1>Listado de Usuarios</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>

<?php
    include 'info.php';  // Conexión a la base de datos

    $sql = "SELECT * FROM usuarios";  // Traemos todos los usuarios
    $res = $conex->query($sql);

    if($res->rowCount() > 0) {
        while($fila = $res->fetch(PDO::FETCH_OBJ)) {
            echo "<tr>";
            echo "<td>" . $fila->id . "</td>";
            echo "<td>" . $fila->nombre . "</td>";
            echo "<td>" . $fila->email . "</td>";
            echo "<td>" . $fila->rol . "</td>";
            echo "<td>
                    <a href='http://localhost/edit.php?id={$fila->id}'>
                        <button type='button'>Editar</button>
                    </a>
                  </td>";
            echo "<td>
                    <form action='delete.php' method='POST'>
                        <input type='hidden' name='id' value='{$fila->id}'>
                        <button type='submit'>Borrar</button>
                    </form>
                  </td>";
        }
    } else {
        echo "<tr><td>No hay usuarios registrados.</td></tr>";
    }
?>
    </table>

    <!-- Contenedor para el botón "Nuevo Usuario" -->
    <div class="nuevo-usuario-container">
        <a href="http://localhost/edit.php">
            <button class="nuevo-usuario" type="button">Nuevo usuario</button>
        </a>
    </div>

</body>
</html>
