<?php
include 'conexion.php';
$c2=$_POST['idHuerta'];
$c3=$_POST['Hora'];
$c4=$_POST['idTipo'];
$c5=$_POST['Dia'];
$R=mysqli_query($db,"INSERT INTO `aplicaciones`VALUES (NULL,$c2,'$c3',$c4,'$c5')");
?>
<HTML>
<HEAD>
  <SCRIPT LANGUAGE="JavaScript">
  <!---
    function HolaMundo() {
      alert("¡Grabado !");
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
