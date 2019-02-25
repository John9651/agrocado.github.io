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
$R=mysqli_query($db,"SELECT `idAplicacion`, `idHuerta`, `Hora`, `tipoaplicacion`.`descripcion` as `tipo`, `Dia` FROM `aplicaciones` inner join `tipoaplicacion` on `aplicaciones`.`idTipo`= `tipoaplicacion`.`idTipoAplicacion` WHERE `idHuerta` = $q");
echo "<table>
<tr>
<th>N°</th>
<th>Hora</th>
<th>Tipo</th>
<th>Fecha</th>
</tr>";
while($row = mysqli_fetch_array($R)) {
    echo "<tr>";
    echo "<td>" . utf8_decode($row['idAplicacion']) . "</td>";
    echo "<td>" . utf8_decode($row['Hora']) . "</td>";
    echo "<td>" . utf8_decode($row['tipo']) . "</td>";
    echo "<td>" . utf8_decode($row['Dia']) . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
