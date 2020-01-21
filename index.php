<?php
  session_start();
  error_reporting(0);
  if($_SESSION['cargo']=='Jefe'){
    header("location:interfaz.php");
  }else if($_SESSION['cargo']=='Trabajador'){
    header("location:interfaz2.php");
  }else if($_SESSION['cargo']=='Pasante'){
    header("location:interfaz1.php");
  }

 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

  </head>
  <body>

  <div class="container">

    <form class="login-form" action="php/validar.php" method="post">

      <div class="loading-spinner"></div>
      <div class="loading-dots">
        <div class="bounce"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>

      <h1>Ingreso</h1>

      <div class="imagen">
        <img src="imag/letras.png" alt="" width="150px">
      </div>

      <div class="fondo">
        <img src="imag/logo2.png" alt="" width="50px">
      </div>

      <div class="textb">
        <input type="text" id="nombre" name="nombre" autocomplete="off" required>
        <span data-placeholder="Usuario"></span>
      </div>

        <div class="textb">
          <input type="password" id="clave" name="clave" autocomplete="off" required>
          <span data-placeholder="Contraseña"></span>
        </div>

          <input type="submit" class="Ingresar" value="lngresar">
      </form>
</div>
    <script src="java/java.js">
    </script>


  </body>
</html>
