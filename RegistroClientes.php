<?php
include 'menu.php';
?>
<html>
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="reset.css">

<link rel="stylesheet" href="main.css">
  <title>Registrar Clientes</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container" >
  <div class="form__top">
    <h2>Registrar <span>Clientes</span></h2>
  </div>
        <form class="form__reg" action="GrabarClientes.php" method="post">
          <table border="0" with="100%">
    <tr>
      <td width="100%" colspan="2">
    </tr>
    <tr>
    <td width="19%" align="right" >Nombre:</td>
    <td width="81%"><input type="text" name="nombre" size="29"></td>
  </tr>
  <tr>
  <td width="19%" align="right" >Teléfono:</td>
  <td width="81%"><input type="number" name="tel" size="29"></td>
</tr>
<tr>
<td width="19%" align="right" >Celular:</td>
<td width="81%"><input type="number" name="cel" size="29"></td>
</tr>
<tr>
<td width="19%" align="right" >Dirección:</td>
<td width="81%"><input type="text" name="dir" size="29"></td>
</tr>
<tr>
<td width="19%" align="right" >Colonia:</td>
<td width="81%"><input type="text" name="col" size="29"></td>
</tr>
<tr>
<td width="19%" align="right" >Ciudad:</td>
<td width="81%"><input type="text" name="ciu" size="29"></td>
</tr>
<tr>
<td width="19%" align="right" >CP:</td>
<td width="81%"><input type="number" name="cp" size="29"></td>
</tr>
<tr>
<td width="19%" align="right" >e-Mail:</td>
<td width="81%"><input type="email" name="mail" size="29"></td>
</tr>
  <tr>
    <td width="19%"></td>
    <td width="81%"><input type="submit" value="Enviar" name="B1" ></td>
  </tr>
</table>
</form>
</body>
</html>
