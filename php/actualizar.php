<?php

$con=mysqli_connect("localhost","root","","impresoras3d");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Error al conectarse a MySQL: " . mysqli_connect_error();
  }

$sql="SELECT reparacion,visible,estado FROM impresoras";
$result=mysqli_query($con,$sql);

$rows=$result->fetch_all(MYSQLI_ASSOC);

echo json_encode($rows);

mysqli_free_result($result);

mysqli_close($con);
?>
