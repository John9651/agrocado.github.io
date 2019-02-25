<?php
include 'conexion.php';
$c2=$_POST['idHuerta'];
$c3=$_POST['fecha'];
$c4=$_POST['desc'];
$R=mysqli_query($db,"INSERT INTO `reportes`(`idHuerta`, `fecha`, `descripcion`, `estado`) VALUES ($c2,'$c3','$c4','R')");
?>
<HTML>
<HEAD>
  <SCRIPT LANGUAGE="JavaScript">
  <!---
    function HolaMundo() {
      alert("¡Grabado!");
      window.history.go(-1);
    }
  // --->
  </SCRIPT>
</HEAD>
<BODY>
<FORM>
  <script type="text/javascript">
  HolaMundo();
  </script>
</FORM>
</BODY>
</HTML>
