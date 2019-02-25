<!DOCTYPE >
<html>
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="reset.css">

<link rel="stylesheet" href="main.css">
  <title>Iniciar Sesion</title>
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
    <h2>Iniciar <span>Sesion</span></h2>
  </div>
        <form class="form__reg" action="IngresarUsuario.php" method="post">
          <table border="0" with="100%">
    <tr>
      <td width="100%" colspan="2">
    </tr>
		<div id="form-login" class="form-login">
		  <form name="loginform" id="loginform" method="post" action="">
				<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" id="username" name="username" placeholder="Usuario..." /></label>
				</div>
				<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña...">
				</div>
				<br/>
		    <p class="submit">
		  	<button type="submit" name="login" class="btn btn-lg btn-primary btn-block">Entrar</button>
		    </p>
				<div class="form-group">
					<div class="col-md-12 control">
						<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
							No tiene una cuenta! <a href="registrer.php">Registrate aquí</a>
						</div>
					</div>
				</div>
		  </form>
		  <div id="error">
		  <?php if (!empty($message)) {echo "<p class=\"error\">" . "ERROR: ". $message . "</p>";} ?>
		  </div>
		</div>
</table>
</form>
</body>
</html>
