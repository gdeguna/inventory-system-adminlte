<?php
require "./process/Data-barang.php";

$barang = new Barang();
$edit = $barang->find($_GET['id']);
$row = $edit->fetch_assoc();

include "header.php";
?>

<body>
<?php include "navbar.php"; ?>

<br /><br />

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" action="update_data.php?id=<?php echo $row['id_barang'] ?>">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Barang</label>
			    <input type="text" name="nama_barang" class="form-control" id="nama_barang" required="required" value="<?php echo $row['nama_barang'] ?>">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Jenis Barang</label>
			    <input type="text" name="jenis_barang" class="form-control" id="jenis_barang" required="required" value="<?php echo $row['id_jenis_barang'] ?>">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Vendor</label>
			    <input type="text" name="vendor" class="form-control" id="vendor" required="required" value="<?php echo $row['vendor'] ?>">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Merk</label>
			    <input type="text" name="merek" class="form-control" id="merek" required="required" value="<?php echo $row['merek'] ?>">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Lokasi Barang</label>
			    <input type="text" name="lokasi" class="form-control" id="lokasi" required="required" value="<?php echo $row['lokasi'] ?>">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Tanggal Pembelian</label>
			    <input type="date" name="tanggal_pembelian" class="form-control" id="tanggal_pembelian" required="required" value="<?php echo $row['tanggal_pembelian'] ?>">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Harga Beli</label>
			    <input type="text" name="harga_beli" class="form-control" id="harga_beli" required="required" value="<?php echo $row['harga_beli'] ?>">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			  <a href="index.php" class="btn btn-secondary">Cancel</a>
			</form>
		</div>
	</div>
</div>
</body>
</html>