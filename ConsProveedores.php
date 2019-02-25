<?php
include 'menu.php';
?>
<html>
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="reset.css">

<link rel="stylesheet" href="main.css">
  <title>Consulta Proveedores</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  <div class="form__top">
    <h2>Consulta <span>Proveedores</span></h2>
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
    $R=mysqli_query($db,"SELECT `idProveedor`, `nombre`, `telefono`, `celular`, `direccion`, `colonia`, `ciudad`, `cp`, `mail` FROM `proveedores`");
    echo "<table>
    <tr>
    <th>N°</th>
    <th>Nombre</th>
    <th>Teléfono</th>
    <th>Celular</th>
    <th>Dirección</th>
    <th>Colonia</th>
    <th>Ciudad</th>
    <th>CP</th>
    <th>E-Mail</th>
    </tr>";
    while($row = mysqli_fetch_array($R)) {
        echo "<tr>";
        echo "<td>" . $row['idProveedor'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['telefono'] . "</td>";
        echo "<td>" . $row['celular'] . "</td>";
        echo "<td>" . $row['direccion'] . "</td>";
        echo "<td>" . $row['colonia'] . "</td>";
        echo "<td>" . $row['ciudad'] . "</td>";
        echo "<td>" . $row['cp'] . "</td>";
        echo "<td>" . $row['mail'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    </div>
    </div>
    </nav>
    </body>
    </html>
