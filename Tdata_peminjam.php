<?php
   session_start();
   if (!isset ($_SESSION ['nama'])){
      echo "anda belum login! silahkan <a href='index.html'> login dulu,</a>";
   }else{


 ?>
 <!DOCTYPE html>
<html lang="en">
<link rel ="icon" type="image/png" href="KS.png">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="">
          
        </div>
        <div class="sidebar-brand-text mx-3"><img style="width:110%"src="logo.png"></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="Dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables2.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Aset</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Call Information</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">For Information:</h6>
            <a class="collapse-item" href="https://accounts.google.com">Email</a>
            <a class="collapse-item" href="https://web.whatsapp.com/">Whatsapp</a>
          </div>
        </div>
      </li>

     
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="Transaksi.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Transaksi</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="peminjam_asetK.php">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data Peminjam Aset</span></a>
      </li>

     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          
<div class="date">
                <i class="icon-calendar icon-large"></i>
                <?php
                $Today = date('y:m:d');
                $new = date('l, F d, Y', strtotime($Today));
                echo $new;
                ?>
              </div>
         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

           
              

           
            <!-- Nav Item - User Information -->
            
                
              
                <a href="logout.php" class="btn btn-primary square-btn-adjust">Logout</a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"></h1>
          <p class="mb-4"> <a target="_blank" href="https://datatables.net"></a></p>
<?php
    //koneksi ke database
    include('koneksi.php');
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    
     $nama             = $_REQUEST['nama'];
     $nik              = $_REQUEST['nik'];
     $divisi           = $_REQUEST['divisi'];
     $tgl_peminjaman   = $_REQUEST['tgl_peminjaman'];
     $tgl_pengembalian = $_REQUEST['tgl_pengembalian'];
     $lokasi           = $_REQUEST['lokasi'];
     $jenis_aset1      = $_REQUEST['jenis_aset1'];
     $jenis_aset2      = $_REQUEST['jenis_aset2'];
     $jenis_aset3      = $_REQUEST['jenis_aset3'];
     $jenis_aset4      = $_REQUEST['jenis_aset4'];
     $jenis_aset       = $jenis_aset1.$jenis_aset2.$jenis_aset3.$jenis_aset4;
     
     $serial_number1   = $_REQUEST['serial_number1'];
     $serial_number2   = $_REQUEST['serial_number2'];
     $serial_number3   = $_REQUEST['serial_number3'];
     $serial_number4   = $_REQUEST['serial_number4'];
     $serial_number    = $serial_number1.$serial_number2.$serial_number3.$serial_number4;
     $kembali          = $_REQUEST['kembali'];
     $status           = $_REQUEST['status'];
     $l                = $_REQUEST['l'];
 
 $sql = "SELECT * FROM data_peminjam WHERE serial_number='$serial_number' ";
  $query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
  if(mysqli_num_rows($query) > 0){
    
    echo 'Gagal Meminjam ! <br> Maaf Serial Number Sudah Di Pinjam Boss !';
 
  } else {

      if(!$insert = mysqli_query($koneksi, "INSERT INTO data_peminjam VALUES(NULL,'$nama', '$nik', '$divisi', '$tgl_peminjaman', '$tgl_pengembalian','$lokasi', '$jenis_aset', '$serial_number', '$kembali', '$status', '$l')")){
          echo 'Gagal Menambahkan Buku';
      }else{
          echo 'Data berhasil di tambahkan';
      }
    ?>
  <?php } ?>
    <h1 align="center">Data Peminjam</h1>
        <table class="table table-bordered table-hover table-striped">
            <tbody>
                
                <tr>
                    <td><b>Nama Peminjam</b></td>
                    <td><?php echo $nama; ?></td>
                </tr>
                <tr>
                    <td><b>Nik</b></td>
                    <td><?php echo $nik; ?></td>
                </tr>
                <tr>
                    <td><b>Divis</b></td>
                    <td><?php echo $divisi; ?></td>
                </tr>
                <tr>
                    <td><b>Tgl Peminjaman</b></td>
                    <td><?php echo $tgl_peminjaman; ?></td>
                </tr>
                <tr>
                    <td><b>Tgl Pengembalian</b></td>
                    <td><?php echo $tgl_pengembalian; ?></td>
                </tr>
                <tr>
                    <td><b>Lokasi</b></td>
                    <td><?php echo $lokasi; ?></td>
                </tr>
                <tr>
                    <td><b>Jenis Aset</b></td>
                    <td><?php echo $jenis_aset; ?></td>
                </tr>
                 <tr>
                    <td><b>Serial Number</b></td>
                    <td><?php echo $serial_number; ?></td>
                </tr>
                
            </tbody>
        </table>
 
        <align><center> <a href="peminjam_asetK.php" class="btn btn-sm btn-primary">KEMBALI KE DATA PEMINJAMAN</a></center></align>
</body>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Muhazir & okyrosyadi 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
<?php } ?> 