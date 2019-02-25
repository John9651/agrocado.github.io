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
$c2=$_POST['idTipo'];
$c3=$_POST['desc'];
$c4=$_POST['costo'];
$c5=$_POST['unidad'];
$R=mysqli_query($db,"INSERT INTO productos values (null,$c2,'$c3',$c4,'$c5')");
?>
