<?php
  include 'include/head.php';
?>
<?php
    require"./process/Vendor.php";
    $vendor = new Vendor();
    $rows = $vendor->all(); 
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
        Master Vendor
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
              <h3 class="box-title">Nama Vendor</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Vendor</th>
                  <th>Contact</th>
                  <th>Alamat</th>
                  <th>Jenis Vendor</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    $i=1;
                    while ($row = $rows->fetch_assoc()) {
                  ?>
                <tr>
                  <td><?php echo $i; $i++ ?></td>
                  <td><?php echo $row['vendor'] ?></td>
                  <td><?php echo $row['contact'] ?></td>
                  <td><?php echo $row['alamat'] ?></td>
                  <td><?php echo $row['jenis_vendor'] ?></td>
                  <td><a class="btn btn-danger btn-flat" onclick="return hapusvendor(<?php echo $row['id_vendor'] ?>)">Delete</a></td>
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
              <h3 class="box-title">Tambah Master Vendor</h3>
            </div>
            <form class="form-horizontal" method="POST" action="./process/insert-vendor.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="namavendor" class="col-sm-2 control-label">Nama Vendor</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="vendor" id="vendor" required="required" placeholder="Nama Vendor">
                  </div>
                </div>
                <div class="form-group">
                  <label for="contactvendor" class="col-sm-2 control-label">Contact</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="contact" id="contactvendor" required="required" placeholder="0824534543">
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamatvendor" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="alamat" required="required" placeholder="JL.Batukaru">
                  </div>
              </div>
              <div class="form-group">
                  <label for="jenisvendor" class="col-sm-2 control-label">Jenis Vendor</label>
                  <div class="col-sm-10">
                  <select name="id_jenis_vendor" class="form-control">
                    <?php
                      $kolom = $vendor->jenisvendor();
                      while ($rowku = $kolom->fetch_assoc()){
                      ?>
                      <option value="<?php echo $rowku['id_jenis_vendor'] ?>"><?php echo $rowku['jenis_vendor'] ?> </option>
                      <?php
                      } 
                      ?>
                    </select>
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="m-vendor.php" class="btn btn-default">Batal</a>
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


function hapusvendor(id_vendor){
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
      document.location = "./process/delete-vendor.php?id_vendor="+ id_vendor;
    }
  })
}
</script>
</body>
