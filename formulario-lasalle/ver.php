<?php
include("conexion.php");

$sql = "SELECT * FROM contactos";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mensajes Recibidos</title>
</head>

<body style="
font-family: Arial;
background: linear-gradient(135deg, #4facfe, #00f2fe);
margin:0;
padding:0;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
">

<div style="
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 10px 25px rgba(0,0,0,0.2);
width:80%;
max-width:800px;
text-align:center;
">

<h2>📩 Mensajes recibidos</h2>

<table style="
width:100%;
border-collapse:collapse;
margin-top:20px;
">

<tr style="background:#007BFF; color:white;">
    <th style="padding:10px;">ID</th>
    <th style="padding:10px;">Nombre</th>
    <th style="padding:10px;">Correo</th>
    <th style="padding:10px;">Mensaje</th>
</tr>

<?php while($fila = $resultado->fetch_assoc()) { ?>
<tr style="background:#f9f9f9; text-align:center;">
    <td style="padding:10px;"><?php echo $fila['id']; ?></td>
    <td style="padding:10px;"><?php echo $fila['nombre']; ?></td>
    <td style="padding:10px;"><?php echo $fila['correo']; ?></td>
    <td style="padding:10px;"><?php echo $fila['mensaje']; ?></td>
</tr>
<?php } ?>

</table>

<br>

<a href="index.html" style="
text-decoration:none;
background:#28a745;
color:white;
padding:10px 15px;
border-radius:5px;
">Volver al formulario</a>

</div>

</body>
</html>