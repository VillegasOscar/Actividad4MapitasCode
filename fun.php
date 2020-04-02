<?php
include 'conexion.php';
$nombre = $_POST['nombre'];
$apellidop = $_POST['apellidop'];
$apellidom = $_POST['apellidom'];
$programa = $_POST['programa'];
date_default_timezone_set("America/Mexico_City");
$fecharegistro= date ("Y/m/d", time());
$email = $_POST['email'];
$estatus = $_POST['estatus'];
$query = "insert into personal (nombre, apellidop, apellidom, programa, fecharegistro, email, estatus) values ('$nombre', '$apellidop', '$apellidom', '$programa', '$fecharegistro', '$email', 'activo')";
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
  
?>