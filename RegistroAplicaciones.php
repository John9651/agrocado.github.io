<?php
include 'menu.php';
?>
  <html>
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="main.css">
    <title>Registrar Aplicaciones</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
		<div class="form__top">
			<h2>Registrar <span>Aplicaciones</span></h2>
		</div>
          <form class="form__reg" action="GrabarAplicaciones.php" method="post">
            <table border="0" with="100%">
      <tr>
        <td width="100%" colspan="2">
      </tr>
      <tr>
      <td width="19%" align="right" >Huerta:</td>
      <td width="81%">
      <Select name ='idHuerta'>
      <?php
      include 'conexion.php';
      $R=mysqli_query($db,"Select * from huertas");
      while($row=mysqli_fetch_array($R))
      echo"<option value='$row[0]'>$row[1]</option>";
      echo"</form>";
      mysql_close($R);
      ?>
      </select>
    </td>
    </tr>
    <tr>
    <td width="19%" align="right" >Hora:</td>
    <td width="81%">
      <input type="time" name="Hora" min="01:00"
                                 max="23:00" step="3600">
    </td>
  </tr>
  <tr>
  <td width="19%" align="right" >Tipo:</td>
  <td width="81%">
  <Select name ='idTipo'>;
  <?php
   include 'conexion.php';
   $R=mysqli_query($db,"SELECT * FROM `tipoaplicacion`");
   while($row=mysqli_fetch_array($R))
   echo"<option value='$row[0]'>$row[1]</option>";
   echo"</select>";
   echo"</form>";
  ?>
</td>
</tr>
<tr>
<td width="19%" align="right" >Dia:</td>
<td width="19%">
  <input type="date" name="Dia" min="2018-10-15"
                                  max="2020-12-25" step="1">
</td>
</tr>
    <tr>
      <td width="19%"></td>
      <td width="81%"><input type="submit" value="Enviar" name="B1" ></td>
    </tr>
  </table>
  </form>
</body>
</html>
