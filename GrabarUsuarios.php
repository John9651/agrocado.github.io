<HTML>
<HEAD>
  <?php
  include 'conexion.php';
  $c2=$_POST['nombre'];
  $c3=$_POST['tel'];
  $c4=$_POST['cel'];
  $R=mysqli_query($db,"INSERT INTO `usuarios` values ('$c4','$c3','$c2')");
  ?>
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
