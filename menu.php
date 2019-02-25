<?php
 session_start();
 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    ?>
    <html>
    <head>
      <Title>Agrocado Web</title>
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
          <a class="navbar-brand" href="#"> Agrocado Web   |   </a>
          <img src="c.png" width="50" height="50">
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
           <li><a href="index.php"></a></li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registros <span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="RegistroClientes.php">Clientes</a></li>
               <li><a href="RegistroEncargados.php">Encargados</a></li>
               <li><a href="RegistroHuertas.php">Huertas</a></li>
               <li><a href="RegistroProdcutos.php">Productos</a></li>
               <li><a href="RegistroProveedores.php">Proveedores</a></li>
               <li role="separator" class="divider"></li>
               <li><a href="RegistroAplicaciones.php">Aplicaciones</a></li>
               <li><a href="RegistroReporte.php">Reportes</a></li>
             </ul>
           </li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultas <span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="ConsClientes.php">Clientes</a></li>
               <li><a href="ConsEncargados.php">Encargados</a></li>
               <li><a href="ConsHuertas.php">Huertas</a></li>
               <li><a href="ConsProductos.php">Productos</a></li>
               <li><a href="ConsProveedores.php">Proveedores</a></li>
               <li role="separator" class="divider"></li>
               <li><a href="ConsApHuer.php">Aplicaciones</a></li>
               <li><a href="ConRepHuerta.php">Reportes</a></li>
             </ul>
           </li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes <span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="ReporteClientes.php">Clientes</a></li>
               <li><a href="ReporteEncargados.php">Encargados</a></li>
               <li><a href="ReporteHuertas.php">Huertas</a></li>
               <li><a href="ReporteProductos.php">Productos</a></li>
               <li><a href="ReporteProveedores.php">Proveedores</a></li>
               <li role="separator" class="divider"></li>
               <li><a href="ReporteAplicacionesh.php">Aplicaciones</a></li>
             </ul>
           </li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
            <!-- COMO LA SESION SI ESTA INICIADA IMPRIME CON ECHO EL NOMBRE DEL USUARIO-->
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php
              echo $_SESSION['username'];
            ?></a></li>
            <!-- Y MOSTRAMOS "CERRAR SESION" con direccion a la pagina "logut.php"-->
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a>
          </ul>
    </body>
    </html>
    <?php
  } else {
    header("Location: index.php");
  }
?>
