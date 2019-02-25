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
$c2=$_POST['nombre'];
$c3=$_POST['tel'];
$c4=$_POST['cel'];
$c5=$_POST['dir'];
$c6=$_POST['col'];
$c7=$_POST['ciu'];
$c8=$_POST['cp'];
$c9=$_POST['mail'];
$R=mysqli_query($db,"INSERT INTO `proveedores` values (null,'$c2','$c3',$c4,'$c5','$c6','$c7',$c8,'$c9')");
?>
