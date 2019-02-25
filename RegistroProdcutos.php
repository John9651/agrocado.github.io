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
  <title>Registrar Productos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container" >
  <div class="form__top">
    <h2>Registrar <span>Productos</span></h2>
  </div>
        <form class="form__reg" action="GrabarProductos.php" method="post">
          <table border="0" with="100%">
    <tr>
      <td width="100%" colspan="2">
    </tr>
    <tr>
    <td width="19%" align="right" >Tipo:</td>
    <td width="81%">
    <Select name ='idTipo'>
    <?php
    $R=mysqli_query($db,"Select * from tipoproducto");
    while($row=mysqli_fetch_array($R))
    echo"<option value='$row[0]'>$row[1]</option>";
    echo"</form>";
    ?>
    </select>
  </td>
  </tr>
  <tr>
  <td width="19%" align="right" >Descripción:</td>
  <td width="81%"><input type="text" name="desc" size="29"></td>
  </tr>
  <tr>
  <td width="19%" align="right" >Costo:</td>
  <td width="81%"><input type="number" name="costo" size="29"></td>
  </tr>
  <tr>
  <td width="19%" align="right" >Unidad de Medida:</td>
  <td width="81%"><input type="text" name="unidad" size="29"></td>
</tr>
<tr>
  <td width="19%"></td>
  <td width="81%"><input type="submit" value="Enviar" name="B1" ></td>
</tr>
</table>
</form>
</body>
</html>
