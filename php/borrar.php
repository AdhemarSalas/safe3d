<?php

$conexion=mysqli_connect("localhost","root","","print3d");

$sentencia="SELECT * FROM trabajadores";
$consulta=mysqli_query($conexion,$sentencia);
if(isset($_GET['Eliminar'])){
  $id=$_GET['Eliminar'];
  $query=mysqli_query($conexion,"DELETE FROM trabajadores WHERE ID='$id'");
  header("location:borrar.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Borrar</title>
    <link rel="stylesheet" href="../css/style5.css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="form-register">
<div class="container">
      <a href="../interfaz.php">
      <div class="box">
        <span></span>
        <span></span>
      </div>
      </a>
      <table id="tabla">

        <thead id="tabla1">
          <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Contraseña</th>
          <th>Cargo</th>
        </tr>
        <div id="linea">

        </div>
      </thead>


        <tbody>
          <?php
            while($registro=mysqli_fetch_array($consulta)){
              echo('<tr>');
              echo("<td>".$registro['ID']."</td>");
              echo("<td>".$registro['nombre']."</td>");
              echo("<td>".$registro['clave']."</td>");
              echo("<td>".$registro['cargo']."</td>");
              ?>
              <td><button type="button" class="Ingresar" onclick="preguntar(<?php echo $registro['ID']?>)">Eliminar</button></td>

              <?php
              echo('</tr>');
            }
          ?>
        </tbody>

      </table>

    </div>
</div>
  </body>
  <script src="../java/java.js">
  </script>

  <script>
  function preguntar(id)
  {
    if(id!=1)
    {
    if(confirm('Desea borrar el registro'))
    {
      window.location.href="borrar.php?Eliminar="+id;
    }
  }
  }

  </script>
</html>
