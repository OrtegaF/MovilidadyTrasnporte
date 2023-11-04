<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIIUTP | <?= $titulo ?></title>
    <!-- Icono -->
    <link rel="icon" type="img/icon" href="./vendor/dist/img/logos/favicon.ico">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./vendor/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="./vendor/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="./vendor/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./vendor/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="./vendor/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./vendor/dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="./vendor/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="./vendor/plugins/toastr/toastr.min.css">

    <!-- Own stylesheets -->
    <!-- <link rel="stylesheet" href="../dist/css/personalized.css"> -->

    <link rel="stylesheet" href="./vendor/dist/css/beaver.css">
</head>
<body style="background: #dcdcdc;">
<nav class=" navbar navbar-expand navbar-white navbar-light"  style= "background: #902923">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <img src="./vendor/dist/img/AdminLTELogo.png" alt="SMT Puebla" style="height:50px;">
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://smt.puebla.gob.mx/" class="nav-link" style="color: #fff;"><h4>SMT de Puebla</h4></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link" style="color: #fff;"><h4>Arrastre</h4></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto" >
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search" style="color: #fff;"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" >
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link text-black" href="<?= base_url('login') ?>" role="button" title="LogIn">
            <i class="fas fa-user" style="color: #fff;"></i>
        </a>
      </li>
    </ul>
  </nav>
  <section class="content" style="padding:50px; marging:30px;">
    <div class="row">
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="./vendor/dist/img/photo1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-danger">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="./vendor/dist/img/photo2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-danger">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="./vendor/dist/img/photo3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-danger">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<footer style="padding: 20px;">
	<div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2023 <a href="https://smt.puebla.gob.mx/" target="_blank" class="text-navy">Movilidad y Transporte</a></strong> Todos los derechos reservados
</footer>
</html>