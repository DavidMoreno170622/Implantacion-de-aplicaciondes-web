<?php

include "info.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM usuarios WHERE id = :id";
    $stmt = $conex->prepare($sql);
    $stmt->execute([':id' => $id]);
}

header("Location: listado.php");
exit;

?>