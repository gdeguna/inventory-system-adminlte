<?php
require "./process/Data-barang.php";

$barang = new Barang();
$edit = $barang->join($_GET['id']);
$row = $edit->fetch_assoc();

?>

<body>

<br /><br />

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" action="../process/edit-barang.php?id=<?php echo $row['id_barang'] ?>">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Barang</label>
			    <input type="text" name="nama_barang" class="form-control" id="nama_barang" required="required" value="<?php echo $row['nama_barang'] ?>">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Jenis Barang</label>
			    <select name="id_jenis_barang" class="form-control">
			    <?php
			    		$jenis = $barang->jenisbarang();

			    		while ($rowjenis = $jenis->fetch_assoc()) {
			    			$selected="";
				    		if($rowjenis['id_jenis_barang']==$row['id_jenis_barang'])
				    			$selected="selected";
			    			echo "<option value='".$rowjenis['id_jenis_barang']."' ".$selected.">".$rowjenis['jenis_barang']."</option>";
			    		}
			    	?>
			    </select>
			  </div>
			  <!-- vendor -->
			  <div class="form-group">
			    <label for="exampleInputEmail1">Vendor</label>
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

			  <div class="form-group">
			    <label for="exampleInputEmail1">Merk</label>

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
			  <!-- end vendor -->
			  <div class="form-group">
			    <label for="exampleInputEmail1">Lokasi Barang</label>
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