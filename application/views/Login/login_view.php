<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMT | INICIO DE SESIÓN</title>

  <!-- Icono -->
  <link rel="icon" type="img/icon" href="./vendor/dist/img/logos/coche.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./vendor/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./vendor/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./vendor/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>SMT</b>Puebla</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicio de Sesión</p>

      <form action="<?php echo base_url('Login/login')  ?>" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" id="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-danger btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <br>
    <br>
      <p class="mb-0 text-center">
        <a href="https://smt.puebla.gob.mx/" class="text-center">SMT de Puebla</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="./vendor/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./vendor/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./vendor/dist/js/adminlte.min.js"></script>
</body>
</html>