<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Test Estudiantes || Itcha</title>
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">
  </head>
  <body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="index.html">Registro Academico Itcha</a>
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
    </nav>
    <div id="wrapper">
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
        <a class="nav-link" href="/">
           <i class="fas fa-user-plus"></i>
            <span>Estudiantes</span>
          </a>
        </li>
       <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-car-side"></i>
            <span>Vehiculos</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="#">Registrar Vehiculos</a>
            <a class="dropdown-item" href="#">Alquilar Vehiculos</a>
            <a class="dropdown-item" href="#">Vehiculos Alquilados</a>
          </div>
        </li>-->
      </ul>

      <div id="content-wrapper">
        <div class="container-fluid">
          <div class="card mb-3">
            <div class="card-body">
              @yield('contenido')
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/sb-admin.js')}}"></script>
  </body>
</html>
