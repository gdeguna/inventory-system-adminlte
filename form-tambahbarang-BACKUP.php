<?php
  include 'include/head.php';
  require "./process/Data-barang.php";
  
  $barang = new Barang();
  // $edit = $barang->join();
  // $row = $edit->fetch_assoc();
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
            <form class="form-horizontal" method="POST" action="./process/insert-barang.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="namabarang" class="col-sm-2 control-label">Nama Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_barang" id="nama_barang" required="required" placeholder="">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="jenisbarang" class="col-sm-2 control-label">Jenis Barang</label>
                  <div class="col-sm-10">
                  <select name="id_jenis_barang" class="form-control">
                    <?php
                      $rows = $barang->jenisbarang();
                      while ($row = $rows->fetch_assoc()){
                      ?>
                      <option value="<?php echo $row['id_jenis_barang'] ?>"><?php echo $row['jenis_barang'] ?> </option>
                      <?php
                      } 
                      ?>
                    </select>
                  </div>
                </div>
              <div class="form-group">
                  <label for="vendor" class="col-sm-2 control-label">Vendor</label>

                  <div class="col-sm-10">
                    <select name="id_vendor" class="form-control">
                      <?php
                        $vendor = $barang->vendor();

                        while ($rowvendor = $vendor->fetch_assoc()) {
                          $selected="";
                          if($rowvendor['id_vendor']==$row['id_vendor'])
                            $selected="selected";
                          echo "<option value='".$rowvendor['id_vendor']."' ".$selected.">".$rowvendor['vendor']."</option>";
                        }
                      ?>
                    </select>
                  </div>
              </div>
              <div class="form-group">
                  <label for="merk" class="col-sm-2 control-label">Merk</label>

                  <div class="col-sm-10">
                    <select name="id_merek" class="form-control">
                      <?php
                        $merk = $barang->merk();

                        while ($rowmerk = $merk->fetch_assoc()) {
                          $selected="";
                          if($rowmerk['id_merek']==$row['id_merek'])
                            $selected="selected";
                          echo "<option value='".$rowmerk['id_merek']."' ".$selected.">".$rowmerk['merek']."</option>";
                        }
                      ?>
                    </select>
                </div>
                </div>
              <div class="form-group">
                  <label for="lokasibarang" class="col-sm-2 control-label">Lokasi Barang</label>

                  <div class="col-sm-10">
                      <select name="id_vendor" class="form-control">
                        <?php
                          $lokasi = $barang->lokasi();

                          while ($rowlokasi = $lokasi->fetch_assoc()) {
                            $selected="";
                            if($rowlokasi['id_lokasi']==$row['id_lokasi'])
                              $selected="selected";
                            echo "<option value='".$rowlokasi['id_lokasi']."' ".$selected.">".$rowlokasi['lokasi']."</option>";
                          }
                        ?>
                      </select>
                  </div>
                </div>
              <div class="form-group">
                  <label for="tanggalpembelian" class="col-sm-2 control-label">Tanggal Pembelian</label>

                  <div class="col-sm-10">
                    <input type="date" name="tanggal_pembelian" class="form-control" id="tanggal_pembelian" placeholder="" required="required">
                  </div>
                </div>
              <div class="form-group">
                  <label for="jumlahbarang" class="col-sm-2 control-label">Jumlah Barang</label>

                  <div class="col-sm-10">
                    <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="" required="required">
                  </div>
                </div>
              <div class="form-group">
                  <label for="totalharga" class="col-sm-2 control-label">Harga Total</label>

                  <div class="col-sm-10">
                    <input type="text" name="harga" class="form-control" id="harga" placeholder="" required="required">
                  </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="data_barang.php" class="btn btn-default">Batal</a>
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
