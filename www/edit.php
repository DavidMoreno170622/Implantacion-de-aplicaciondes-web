<?php
include 'info.php';

$usuario = null;

/* ====== GET → CARGAR DATOS SI ES EDITAR ====== */
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id = :id";
    $stmt = $conex->prepare($sql);
    $stmt->execute([':id' => $id]);

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
}

/* ====== POST → INSERT o UPDATE ====== */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email  = $_POST['email'];
    $rol    = $_POST['rol'];

    if (!empty($_POST['id'])) {
        // UPDATE
        $sql = "UPDATE usuarios 
                SET nombre = :n, email = :e, rol = :r 
                WHERE id = :id";
        $stmt = $conex->prepare($sql);
        $stmt->execute([
            ':n' => $nombre,
            ':e' => $email,
            ':r' => $rol,
            ':id'=> $_POST['id']
        ]);
    } else {
        // INSERT
        $sql = "INSERT INTO usuarios (nombre, email, rol)
                VALUES (:n, :e, :r)";
        $stmt = $conex->prepare($sql);
        $stmt->execute([
            ':n' => $nombre,
            ':e' => $email,
            ':r' => $rol
        ]);
    }

    header("Location: listado.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $usuario ? 'Editar Usuario' : 'Nuevo Usuario' ?></title>
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
            padding-left: 15px;
        }

        /* Hover en botones */
        button:hover {
            background-color: #ff3333; /* Rojo más brillante */
        }

        /* Formulario */
        form {
            background-color: #333333; /* Fondo gris oscuro */
            border-radius: 10px;
            padding: 20px;
            max-width: 400px; /* Formulario más ancho */
            width: 100%;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
            margin: 0px auto;
        }

        /* Campos de formulario más estrechos */
        input[type="text"],
        input[type="email"] {
            width: 80%; /* Campos más estrechos */
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #e60000; /* Borde rojo */
            border-radius: 5px;
            background-color: #222222; /* Fondo oscuro */
            color: #f1f1f1;
            font-size: 1rem;
            display: block;
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px; /* Espacio a la izquierda de los campos */
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #ff3333; /* Borde rojo más brillante */
            outline: none;
        }

        /* Ajustar los label */
        label {
            display: block;
            margin-left: 10%; /* Desplazar las etiquetas hacia la izquierda */
            font-size: 1.1rem;
            margin-bottom: 5px;
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
    </style>
</head>
<body>

    <a href="http://localhost/listado.php"><button type="button">Volver a la lista</button></a>

    <h2><?= $usuario ? 'Editar Usuario' : 'Nuevo Usuario' ?></h2>

    <form method="post">
        <!-- Campo oculto para ID (si es edición) -->
        <input type="hidden" name="id" value="<?= $usuario['id'] ?? '' ?>">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"
               value="<?= $usuario['nombre'] ?? '' ?>" required><br><br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email"
               value="<?= $usuario['email'] ?? '' ?>" required><br><br>

        <label for="rol">Rol</label>
        <input type="text" name="rol" id="rol"
               value="<?= $usuario['rol'] ?? '' ?>" required><br><br>

        <button type="submit">
            <?= $usuario ? 'Actualizar' : 'Crear' ?>
        </button>
    </form>

</body>
</html>

