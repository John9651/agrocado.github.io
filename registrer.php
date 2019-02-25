<!DOCTYPE >
<?php
include 'conexion.php';
  ?>
<html>
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="reset.css">

<link rel="stylesheet" href="main.css">
  <title>Registro Usuarios</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"> Agrocado Web   |   </a>
      <img src="c.png" width="50" height="50">
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
       <li><a href="index.php"></a></li>

     </ul>
   </nav>
  <div class="container" >
  <div class="form__top">
    <h2>Registro <span>Usuario</span></h2>
  </div>
        <form class="form__reg" action="GrabarUsuarios.php" method="post">
          <table border="0" with="100%">
    <tr>
      <td width="100%" colspan="2">
    </tr>
    <tr>
    <td width="19%" align="right" >Nombre:</td>
    <td width="81%"><input type="text" name="nombre" size="29"></td>
  </tr>
  <tr>
  <td width="19%" align="right" >Usuario:</td>
  <td width="81%"><input type="text" name="tel" size="29"></td>
</tr>
<tr>
<td width="19%" align="right" >Contraseña:</td>
<td width="81%"><input type="text" name="cel" size="29"></td>
</tr>
  <tr>
    <td width="19%"></td>
    <td width="81%"><input type="submit" value="Enviar" name="B1" ></td>
  </tr>
</table>
</form>
</body>
</html>
