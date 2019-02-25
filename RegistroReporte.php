<?php
  include 'conexion.php';
  include 'menu.php'
?>
<html>
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="reset.css">

<link rel="stylesheet" href="main.css">
  <title>Registrar Reportes</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  <div class="form__top">
    <h2>Registrar <span>Reportes</span></h2>
  </div>
        <form class="form__reg" action="GrabarReporte.php" method="post">
          <table border="0" with="100%">
    <tr>
      <td width="100%" colspan="2">
    </tr>
    <tr>
    <td width="19%" align="right" >Huerta:</td>
    <td width="81%">
    <Select name ='idHuerta'>
    <?php
    $R=mysqli_query($db,"Select * from huertas");
    while($row=mysqli_fetch_array($R))
    echo"<option value='$row[0]'>$row[1]</option>";
    echo"</form>";
    ?>
    </select>
  </td>
  </tr>
<tr>
<td width="19%" align="right" >Fecha:</td>
<td width="19%">
<input type="date" name="fecha" min="2018-10-15"
                                max="2020-12-25" step="1">
</td>
</tr>
<tr>
  <td width="19%" align="right" >Descripción:</td>
  <td width="81%"><input type="text" name="desc" size="29"></td>
</tr>
  <tr>
    <td width="19%"></td>
    <td width="81%"><input type="submit" value="Enviar" name="B1" ></td>
  </tr>
</table>
</form>
</body>
</html>
