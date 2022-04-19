<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SIM KESEHATAN</title>

  <script src="../dist/modules/jquery.min.js"></script>
  <script src="../dist/modules/popper.js"></script>
  <script src="../dist/modules/tooltip.js"></script>
  <script src="../dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../dist/modules/moment.min.js"></script>
  <script src="../dist/js/stisla.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <!-- JS Libraies -->
  <script src=">../dist/modules/datatables/datatables.min.js"></script>
  <script src=">../dist/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src=">../dist/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src=">../dist/modules/jquery-ui/jquery-ui.min.js"></script>

  <!-- Page Specific JS File -->
  <script src=">../dist/js/page/modules-datatables.js"></script>
  
  <!-- Template JS File -->
  <script src="../dist/js/scripts.js"></script>
  <script src="../dist/js/custom.js"></script>


  <!-- General CSS Files -->
  <link rel="shortcut icon" href="{!! asset('/image/logo-wk.png') !!}">
  <link rel="stylesheet" href="../dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../dist/modules/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../dist/modules/ionicons/css/ionicons.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../dist/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="../dist/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../dist/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
  
  <!-- Template CSS -->
  <link rel="stylesheet" href="../dist/css/style.css">
  <link rel="stylesheet" type="text/css" href="dist../dist/sweetalert.css">
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar mb-2">
        <a href="#" class="navbar-brand sidebar-gone-hide" style="font-size: 20px;"><img src="/image/logo-wk.png" width="12%">SIM KESEHATAN</a>
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
        </div>
        <form class="form-inline ml-auto">
          
        </form>
        <ul class="navbar-nav navbar-right">
          
          
          <form action="logout" method="post">
            @csrf
            <button>Logout</button>
          </form>
        </ul>
      </nav>
      

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container justify-content-center ">
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a href="/"  class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
              <a href="siswa_imt" class="nav-link"><i class="far ion-clipboard"></i><span>Hitung IMT</span></a>       
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="far ion-clipboard"></i><span>Grafik IMT</span></a>       
            </li>
          </ul>
        </div>
      </nav>
      {{-- isian--}}
      @yield('container')
      {{--isian--}}
  <script src="../dist/modules/jquery.min.js"></script>
  <script src="../dist/modules/popper.js"></script>
  <script src="../dist/modules/tooltip.js"></script>
  <script src="../dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../dist/modules/nicescroll/jquery.nicescroll.min.js') !!}"></script>
  <script src="../dist/modules/moment.min.js') !!}"></script>
  <script src="../dist/js/stisla.js') !!}"></script>
  
  <!-- JS Libraies -->
  <script src="../dist/modules/datatables/datatables.min.js') !!}"></script>
  <script src="../dist/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') !!}"></script>
  <script src="../dist/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') !!}"></script>
  <script src="../dist/modules/jquery-ui/jquery-ui.min.js') !!}"></script>

  <!-- Page Specific JS File -->
  <script src="../dist/js/page/modules-datatables.js') !!}"></script>
  
  <!-- Template JS File -->
  <script src="../dist/js/scripts.js') !!}"></script>
  <script src="../dist/js/custom.js') !!}"></script>
</body>
</html>