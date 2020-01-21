<?php

$conexion=mysqli_connect("localhost","root","","impresoras3d");
if (mysqli_connect_errno())
  {
  echo "Error al conectarse a MySQL: " . mysqli_connect_error();
  }
// $printer=$_GET["manten"];
$aux = $_GET["a"];
$num = $_GET["num"];
// echo $printer;
// $insertar = "INSERT INTO trabajadores(nombre,clave,cargo) VALUES('$nombre','$clave','$cargo')";

$sql1 = "UPDATE impresoras SET reparacion='1' WHERE ID=".$num;
$sql2 = "UPDATE impresoras SET reparacion='0' WHERE ID=".$num;

if ($aux=='1'){
  mysqli_query($conexion,$sql1);
  // echo '<script> window.location="../interfaz.html" </script>';
  header('Location: ' . $_SERVER["HTTP_REFERER"] );
}
else if ($aux=='0'){
  mysqli_query($conexion,$sql2);
  // echo '<script> window.location="../interfaz.html" </script>';
  header('Location: ' . $_SERVER["HTTP_REFERER"] );
}

mysqli_close($conexion);
?>
