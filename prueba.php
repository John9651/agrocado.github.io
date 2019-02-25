<html>
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="reset.css">

<link rel="stylesheet" href="main.css">
  <title>Consulta Clientes</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  <div class="form__top">
    <h2>Consulta <span>Clientes</span></h2>
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
$serverName = "agrocado.mssql.somee.com";
$connectionInfo = array( "Database"=>"agrocado", "UID"=>"john9651_SQLLogin_1", "PWD"=>"kjobhpmn9u");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}else{
print_r(si);
}

$sql = "SELECT * FROM Empacadoras";
$stmt = sqlsrv_query( $conn, $sql );

if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}else{
print_r(si);
}

echo "<table>
<tr>
<th>N°</th>
<th>Nombre</th>
<th>FRC</th>
<th>Teléfono</th>
<th>Celular</th>
<th>Dirección</th>
<th>Colonia</th>
<th>Ciudad</th>
<th>CP</th>
<th>E-Mail</th>
</tr>";
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
    echo "<tr>";
    echo "<td>" . $row['idEmpacadora'] . "</td>";
    echo "<td>" . $row['nombreEmpacadora'] . "</td>";
    echo "<td>" . $row['RFCEmpacadora'] . "</td>";
    echo "<td>" . $row['telEmpacadora'] . "</td>";
    echo "<td>" . $row['domicilioEmpacadora'] . "</td>";
    echo "<td>" . $row['coloniaEmpacadora'] . "</td>";
    echo "<td>" . $row['cpEmpacadora'] . "</td>";
    echo "<td>" . $row['ciudadEmpacadora'] . "</td>";
    echo "<td>" . $row['saldoEmpacadora'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
</div>
</div>
</nav>
</body>
</html>

