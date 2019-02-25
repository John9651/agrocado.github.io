<?php
session_start(); //inisiamos la sesion
//unset($_SESSION['session_username']);//salimos de esa sesion
session_destroy();//destruimos la sesion
header("location:index.php"); //nos vamos al index
?>
