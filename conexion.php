<?php
$h='localhost';
$u='id7993329_john';
$p='AbbeyDawn9651';
$bd='id7993329_agrocado';

//Crear conección y seleccionar Base de Datos
$db = mysqli_connect($h, $u, $p, $bd);

if (!$db->set_charset("utf8")) {
    printf("Error al cargar charset utf8: %s\n", $db->error);
}

if ($db->connect_error) {
    die("No se puede conectar con la base de datos: " . $db->connect_error);
}
?>
