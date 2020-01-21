<?php

$conexion=mysqli_connect("localhost","root","","impresoras3d");
if (mysqli_connect_errno())
  {
  echo "Error al conectarse a MySQL: " . mysqli_connect_error();
  }
// $printer=$_GET["manten"];
$aux = $_GET["b"];
$num = $_GET["num2"];
// echo $printer;
// $insertar = "INSERT INTO trabajadores(nombre,clave,cargo) VALUES('$nombre','$clave','$cargo')";

$sql1 = "UPDATE impresoras SET visible='1' WHERE ID=".$num;
$sql2 = "UPDATE impresoras SET visible='0' WHERE ID=".$num;

if ($aux=='1'){
  mysqli_query($conexion,$sql1);
  echo '<script> window.location="../interfaz.php" </script>';
}
else if ($aux=='0'){
  mysqli_query($conexion,$sql2);
  echo '<script> window.location="../interfaz.php" </script>';
}


mysqli_close($conexion);
?>
