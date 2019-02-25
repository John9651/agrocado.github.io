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
<?php
include 'conexion.php';
$c2=$_POST['idEncargado'];
$c3=$_POST['nombre'];
$c4=$_POST['ubicacion'];
$R=mysqli_query($db,"INSERT INTO `huertas` values (null,'$c3','$c4',$c2)");
?>
