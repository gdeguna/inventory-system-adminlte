<?php
  include 'include/head.php';
?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
<?php
  include "include/header.php";
?>
<?php
  require "include/nav.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Merk Barang
        <!-- <small>List semua barang yang telah masuk ke system.</small> -->
      </h1>
<!--       <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row row-centered">
        <div class="col-lg-5 col-xs-12 col-centered">
          <!-- Horizontal Form -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Barang</h3>
            </div>
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="namabarang" class="col-sm-2 control-label">Nama Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="namabarang" placeholder="">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="jenisbarang" class="col-sm-2 control-label">Jenis Barang (population)</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="jenisbarang" placeholder="">
                  </div>
              </div>
              <div class="form-group">
                  <label for="vendor" class="col-sm-2 control-label">Vendor (population)</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="vendor" placeholder="">
                  </div>
              </div>
              <div class="form-group">
                  <label for="merk" class="col-sm-2 control-label">Merk (population)</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="merk" placeholder="">
              </div>
                </div>
              <div class="form-group">
                  <label for="lokasibarang" class="col-sm-2 control-label">Lokasi Barang (population)</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="lokasibarang" placeholder="">
                  </div>
                </div>
              <div class="form-group">
                  <label for="tanggalpembelian" class="col-sm-2 control-label">Tanggal Pembelian</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggalpembelian" placeholder="">
                  </div>
                </div>
              <div class="form-group">
                  <label for="jumlahbarang" class="col-sm-2 control-label">Jumlah Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="jumlahbarang" placeholder="">
                  </div>
                </div>
              <div class="form-group">
                  <label for="totalharga" class="col-sm-2 control-label">Harga Total</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="totalharga" placeholder="">
                  </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
            </form>
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

<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>

<style type="text/css">
  .row-centered {
    text-align: center;
  }

  .col-centered {
    display: inline-block;
    float: none;
    text-align: left;
    margin-right: -4px;
  }
</style>
