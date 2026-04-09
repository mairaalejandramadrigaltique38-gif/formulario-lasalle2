<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO contactos (nombre, correo, mensaje)
        VALUES ('$nombre', '$correo', '$mensaje')";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>

<body style="
font-family: Arial;
background: linear-gradient(135deg, #4facfe, #00f2fe);
height: 100vh;
display:flex;
justify-content:center;
align-items:center;
">

<div style="
background:white;
padding:30px;
width:320px;
border-radius:15px;
box-shadow:0 10px 25px rgba(0,0,0,0.2);
text-align:center;
">

<?php
if ($conexion->query($sql) === TRUE) {
    echo "<h2 style='color:green;'>✅ Datos guardados correctamente</h2>";
    echo "<br>";
    echo "<a href='ver.php' style='text-decoration:none; background:#007BFF; color:white; padding:10px 15px; border-radius:5px;'>Ver mensajes</a>";
    echo "<br><br>";
    echo "<a href='index.html' style='text-decoration:none; color:#333;'>Volver al formulario</a>";
} else {
    echo "<h2 style='color:red;'>❌ Error al guardar</h2>";
    echo "<p>" . $conexion->error . "</p>";
    echo "<br>";
    echo "<a href='index.html'>Volver</a>";
}
?>

</div>

</body>
</html>