<?php
  include 'include/head.php';
  require "./process/Users.php";

  $user = new Users();
  $tampil = $user->find($_GET['id']);
  $show = $tampil->fetch_assoc();
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
        Edit User
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
              <h3 class="box-title">Form Edit Usre</h3>
            </div>
            <form class="form-horizontal" method="POST" action="./process/edit-user.php?id=<?php echo $show['id_karyawan'] ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="namakaryawan" class="col-sm-2 control-label">Nama Karyawan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_karyawan" id="nama_karyawan" required="required" placeholder="" value="<?php echo $show['nama_karyawan'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="notlp" class="col-sm-2 control-label">No. Telepon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_tlp" id="no_tlp" required="required" placeholder="" value="<?php echo $show['no_tlp'] ?>">
                  </div>
                </div>
                <div class="form-group">
                    <label for="levels" class="col-sm-2 control-label">Levels</label>

                    <div class="col-sm-10">
                      <select name="levels" class="form-control">
                          <option value="Admin">Admin</option>
                          <option value="Karyawan">Karyawan</option>
                          <option value="Super Admin">DEWA</option>
                      </select>
                    </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="data_user.php" class="btn btn-default">Batal</a>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
            </form>
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
