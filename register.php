<?php
    require ("inc/config.php");
    session_start();
    if(!isset($_SESSION["sess_user"])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Create new user">
    <meta name="author" content="Dirga and Bakti">

    <title>Admin Page - Tambah User</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>
<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Admin Page</a>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <a class="text-white">Welcome, <?=$_SESSION['sess_user'];?>!</a>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
          <a href="logout.php"><button type="button" class="btn btn-primary btn-sm">Logout</button></a>
      </ul>
    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="input.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Input Barang</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="register.php">
            <i class="fas fa-fw fa-user-plus"></i>
            <span>Tambah User</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tambah User</li>
          </ol>

          <!-- Page Content -->
        <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-fw fa-user-plus"></i> Tambah User</div>
            <div class="card-body">
            <?php
                $username = $_POST["username"];
                $password = $_POST["password"];
                $sqlstr="insert into users (username, password) Values ('$username','$password')";
                $hasil=@mysqli_query($conn,$sqlstr);
                if($hasil)
                {
                    echo ("User berhasil dibuat!");
                }else
                {
                    echo("Data gagal disimpan!<br>");
                }
            ?>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nama User</span>
                    </div>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                    </div>
                    <input type="password" class="form-control" name="password">
                </div>
            <input type="submit" value="Input" class="btn btn-primary">
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Created by: Dirga Brajamusti and Bakti Qilan Mufid</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

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
    <script src="js/sb-admin.min.js"></script>
</body>
</html>
