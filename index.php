<?php
require_once("./process/auth.php"); 
// var_dump($_SESSION['user']);
?>
<?php
require "./process/Data-barang.php";
$barang = new Barang();
$jumlahbarang =$barang->jumlahbarang();
$rowjumlah = $jumlahbarang->fetch_assoc();
?>

<?php
$conect=mysqli_connect("localhost","root","","db_inventory");
$ambildata=mysqli_query($conect, "SELECT COUNT(id_karyawan) totalkar FROM tb_karyawan;");
$rowkar=mysqli_fetch_array($ambildata);

$ambilhari=mysqli_query($conect, "SELECT waktu_masuk,COUNT(*) AS jumlah_harian FROM tb_barang WHERE waktu_masuk=DATE(NOW()) GROUP BY waktu_masuk;");
$rowhari=mysqli_fetch_array($ambilhari);
?>

<!-- ============================================== BATAS =================================================== -->
<?php
  include "include/head.php"
?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
<?php
  include "include/header.php"
?>
<?php
  require "include/nav.php"
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Lihat Rekapan Inventory Anda</small>
      </h1>
<!--       <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <br />
      <div class="row">
         <div class="col-md-12 col-xs-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-green disabled color-palette">
              <div class="widget-user-image">
                <img class="img-circle" src="dist/img/avatar2.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Hello <b><?php echo $_SESSION['user']['nama_karyawan']; ?></b></h3>
              <h5 class="widget-user-desc"><?php echo $_SESSION['user']['levels']; ?></h5>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
      </div>
      <div class="row" <?php echo $hiddendashboardicon; ?> >
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $rowjumlah['total']?></h3>

              <p>Jumlah Barang Seluruhnya</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="data_barang.php" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6" <?php echo $hideall; ?> >
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $rowhari['jumlah_harian']?></h3>

              <p>Total Barang Masuk Hari Ini</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6" <?php echo $hideall; ?> >
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $rowkar['totalkar']?></h3>

              <p>Total Pengguna</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Total Barang Yang Dipinjam</p>
            </div>
            <div class="icon">
              <i class="ion ion-bookmark"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>53</h3>

              <p>Total Barang Yang Dikembalikan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
  include "include/footer.php"
 ?>
<?php
  include "include/script.php"
?>
</body>
</html>
