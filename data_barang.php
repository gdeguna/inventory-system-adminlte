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
        Daftar Semua Barang
        <small>List semua barang yang telah masuk ke system.</small>
      </h1>
<!--       <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row align-items-start">
        <div class="col-sm-2">
          <div class="btn-group">
            <p>
            <a href="#" type="button" class="btn btn-block btn-success btn-flat"><i class="fa fa-edit"></i>TAMBAH DATA</a>
            </p>
          </div>
        </div>
      </div>
<!--       <br> -->
      <div class="row">
        <div class="col-lg-12" col-xs-12>
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <!-- <th>No.</th> -->
                  <th>Nama Barang</th>
                  <th>Jenis</th>
                  <th>Lokasi</th>
                  <th>Blabla</th>
                  <th>Blabla</th>
                  <th>Blabla</th>
                  <th>Blabla</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <!-- <td>1</td> -->
                  <td>Gelas</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
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
