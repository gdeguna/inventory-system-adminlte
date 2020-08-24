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
        Laporan Peminjaman
        <small>Lihat Rekapan Peminjaman Anda</small>
      </h1>
<!--       <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <br />
      
      <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Peminjaman</h3>
            </div>
            <!-- /.INI TABEL PERTAMA -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">TOP</th>
                  <th>Barang</th>
                  <th>Total</th>
                  <th>Kondisi Aktif</th>
                  <th>Kondisi Rusak</th>
                  <th>Progress</th>
                  <th style="width: 40px">Label</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>MOUSE REXUS C10</td>
                  <td>100</td>
                  <th>90</th>
                  <th>10</th>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-green">90%</span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>MONITOR LG 24MK600</td>
                  <td>50</td>
                  <th>48</th>
                  <th>2</th>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 50%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-yellow">70%</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>VGA RTX 2060</td>
                  <td>30</td>
                  <th>30</th>
                  <th>0</th>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">30%</span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>RAM CORSAIR VENGEANCE</td>
                  <td>25</td>
                  <th>20</th>
                  <th>5</th>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-danger" style="width: 20%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red">90%</span></td>
                </tr>
              </table>
            </div>
           
            <!-- /.INI BODY TABEL KEDUA -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
           <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Laporan Peminjaman</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>


            <!-- /.INI TABEL KEDUA BROOO -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>TOP</th>
                  <th>Barang</th>
                  <th>Total Pinjaman</th>
                  <th>Status</th>
                  <th>Note</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>VGA RTX 2060</td>
                  <td>10</td>
                  <td><span class="label label-success">TOP 1</span></td>
                  <td>Vga ini sangat keren banyak peminjam</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Mouse Rexus</td>
                  <td>8</td>
                  <td><span class="label label-warning">TOP 2</span></td>
                  <td>Mouse Rexus Murah Meriah banyak peminant</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Speaker Logitech</td>
                  <td>5</td>
                  <td><span class="label label-primary">TOP 3</span></td>
                  <td>Speaker ini enak didengar</td>
                </tr>
              </table>
            </div>
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>

          <!-- AKHRIAN -->
           <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">PILIH BRO TABELNYA MAAF KALAU KURANG DI KATA DAN TABELNYA :)</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <div class="input-group-btn">
                  </div>
                </div>
              </div>
            </div>





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
