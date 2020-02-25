<?php
  include 'include/head.php';
?>
<?php
  require"./process/Users.php";
  $user = new Users();
  $rows = $user->all(); 
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
        Daftar Semua Karyawan
        <small>List semua Karyawan.</small>
      </h1>
<!--       <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
<!--       <br> -->
      <div class="row">
        <div class="col-lg-12" col-xs-12>
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Tabel User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <!-- <th>No.</th> -->
                  <th>Nama Karyawan</th>
                  <th>Level</th>
                  <th>No. Tlp</th>
                  <th>Email</th>
                  <th <?php echo $databarang_hidetmbledit; ?> >Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($row = $rows->fetch_assoc()) {
                ?>
                <tr>
                  <!-- <td>1</td> -->
                  <td><?php echo $row['nama_karyawan'] ?></td>
                  <td><?php echo $row['levels'] ?></td>
                  <td><?php echo $row['no_tlp'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td>
                    <a href="form-edituser.php?id=<?php echo $row['id_karyawan'] ?>" class="btn btn-success btn-flat" <?php echo $databarang_hidetmbledit; ?> >Edit</a>

                    <a class="btn btn-danger btn-flat" onclick="return hapus(<?php echo $row['id_karyawan'] ?>)">Delete</a>
                  </td>
                </tr>
                <?php
                  }
                ?>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">


function hapus(id_karyawan){
  Swal.fire({
    title: 'Apakah Anda Yakin?',
    text: "Data ini akan dihapus secara permanen.",
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
      document.location = "./process/delete-user.php?id_karyawan="+ id_karyawan;
    }
  })
}
</script>
</body>