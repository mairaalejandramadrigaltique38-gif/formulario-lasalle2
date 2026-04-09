<?php
$conexion = new mysqli("sql112.infinityfree.com", "if0_41417544", "Karolpuentes100", "if0_41417544_lasalle_db");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>