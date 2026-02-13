<?php
$host = "mysql";              // 👈 CLAVE
$db   = "crud_db";            // debe coincidir con MYSQL_DATABASE
$user = "root";               // o el usuario real
$pass = "root";               // password del docker-compose
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $conex = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    echo "Conexión exitosa a la base de datos!";
} catch (PDOException $e) {
    die("Fallo en la conexión: " . $e->getMessage());
}
