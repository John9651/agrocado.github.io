<?php
$username=$_POST['username'];
$password=$_POST['password'];
 $serverName = "agrocado.mssql.somee.com";
$connectionInfo = array( "Database"=>"agrocado", "UID"=>"john9651_SQLLogin_1", "PWD"=>"kjobhpmn9u");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn == false ) {
    die( print_r( sqlsrv_errors(), true));
}else{
print_r(si);
}
 $sql = "SELECT * FROM Usuarios";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}else{
print_r(si);
}

  while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
    if($row['password']=$password){
      if($row['username']=$username){
          $_SESSION['username']=$username;
          $_SESSION['loggedin'] = true;
          session_start();
          header("Location: principal.php");
      }else{
        echo"<script type=\"text/javascript\">alert('¡Usuario incorrecto!'); window.location='login.php';</script>";
      }
    }else{
      echo"<script type=\"text/javascript\">alert('¡Contraseña incorrecta!'); window.location='login.php';</script>";
    }
  }
?>
