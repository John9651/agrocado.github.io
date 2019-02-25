<?php
include 'menu.php';
?>
<html>
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="reset.css">

<link rel="stylesheet" href="main.css">
  <title>Consulta Productos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  <div class="form__top">
    <h2>Consulta <span>Productos</span></h2>
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
include 'conexion.php';
$R=mysqli_query($db,"SELECT `idProducto`, `tipoproducto`.`descripcion`, `productos`.`descripcion`, `costo`, `unidadMedida` FROM `productos` inner join `tipoproducto` on `productos`.`idTipoProd`=`tipoproducto`.`idTipoProd`");
echo "<table>
<tr>
<th>N°</th>
<th>Tipo</th>
<th>Descripción</th>
<th>Costo</th>
<th>Unidad de Medida</th>
</tr>";
while($row = mysqli_fetch_array($R)) {
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "<td>" . $row[4]  . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</div>
</div>
</nav>
</body>
</html>
