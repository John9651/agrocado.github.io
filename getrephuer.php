<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
include 'conexion.php';
$R=mysqli_query($db,"SELECT `idReporte`, `idHuerta`, `fecha`, `descripcion`, `estado` FROM `reportes` WHERE `idHuerta` = $q");
echo "<table>
<tr>
<th>N°</th>
<th>Fecha</th>
<th>Descripción</th>
<th>Estado</th>
</tr>";
while($row = mysqli_fetch_array($R)) {
    echo "<tr>";
    echo "<td>" . utf8_decode($row['idReporte']) . "</td>";
    echo "<td>" . utf8_decode($row['fecha']) . "</td>";
    echo "<td>" . utf8_decode($row['descripcion']) . "</td>";
    echo "<td>" . utf8_decode($row['estado']) . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
