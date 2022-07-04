<?php
session_start();
if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
}
//memulai koneksi dengan database
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Barang</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Data Barang</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->

            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        
                            <div class="sb-sidenav-menu-heading">Halaman Utama</div>
                            <a class="nav-link" href="?halaman=beranda">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home
                            </a>
                                    <div class="sb-sidenav-menu-heading">Halaman Barang</div>
                                    <a class="nav-link" href="?halaman=data-resi">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Data Barang
                                    </a>
                                    <div class="sb-sidenav-menu-heading">Laporan</div>
                                    <a class="nav-link" href="cetak-laporan.php" target="_blank">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Cetak Laporan
                                    </a>
                                    <hr style="border-top: 1px solid #ffffff;">
                        </div>
                </nav>
            </div>
                    <?php
                        if(isset($_GET['halaman'])){
                        $hal = $_GET['halaman'];
                        switch ($hal) {
                            case 'tabelbebas':
                                include "tabelbebas.php";
                            break;
                            case 'ubah_data':
                                include "ubah-data.php";
                            break;
                            case 'aksi_data':
                                include "aksi_data.php";
                            break;
                            case 'tambah-resi':
                                include "tambah-data.php";
                            break;
                            case 'data-resi': //jika memanggil halaman=beranda maka...
                                include "data-resi.php"; //menampilkan file beranda.php
                            break;
                            case 'beranda': //jika memanggil halaman=beranda maka...
                                include "beranda.php"; //menampilkan file beranda.php
                            break;
                        default: //jika memanggil halaman tidak ada maka...
                        echo "<center><h3> ERROR !</h3></center>"; //menampilkan pesan error
                        break;
                        }
                    }
                        else{ //jika tidak memanggil halaman apapun maka...
                        include "beranda.php"; //menampilkan file beranda.php
                    }
                    ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>