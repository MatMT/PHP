<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "todoDB";

$conexion = new mysqli($server, $user, $password, $db);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

/*
$sql = "CREATE DATABASE tododb ";
if ($conexion->query($sql) === true) {
    echo "Base de datos creada correctamente";
} else {
    die("Error al crear la base de datos: " . $conexion->error);
}
*/

$sql = "CREATE TABLE todoTable(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    texto VARCHAR(100) NOT NULL,
    complete BOOLEAN NOT NULL,
    time_stamp TIMESTAMP
)";

if ($conexion->query($sql) === true) {
    echo "Tabla creada correctamente";
} else {
    die("Error " . $conexion->error);
}
