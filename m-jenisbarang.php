<?php
  include 'include/head.php';
?>
<?php
    require"./process/Jenis-barang.php";
    $jenisbarang = new Jenisbarang();
    $rows = $jenisbarang->all(); 
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
        Master Jenis Barang
        <!-- <small>List semua barang yang telah masuk ke system.</small> -->
      </h1>
<!--       <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-lg-8 col-xs-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Jenis Barang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Jenis Barang</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $i=1;
                  while($row = $rows->fetch_assoc()) {
                  ?>
                <tr>
                  <td><?php echo $i; $i++ ?></td>
                  <td><?php echo $row['jenis_barang'] ?></td>
                  <td>
                    <a class="btn btn-danger btn-flat" onclick="return hapusjenis(<?php echo $row['id_jenis_barang'] ?>)">Delete</a>
                  </td>
                </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xs-12">
          <!-- Horizontal Form -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Master Jenis Barang</h3>
            </div>
            <form class="form-horizontal" method="POST" action="./process/insert-jenis.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="jenisbarang" class="col-sm-2 control-label">Jenis Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jenis_barang" id="jenis_barang" required="required" placeholder="contoh: Elektronik">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="m-jenisbarang.php" class="btn btn-default">Batal</a>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">


function hapusjenis(id_jenis_barang){
  Swal.fire({
    title: 'Apakah Anda Yakin?',
    text: "Data ini akan dihapus secara permanen dan akan berpengaruh ke semua data.",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.value) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      );
      document.location = "./process/delete-jenis.php?id_jenis_barang="+ id_jenis_barang;
    }
  })
}
</script>
</body>
