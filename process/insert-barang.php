<?php

require "Data-barang.php";

$barang = new Barang();
$payload = [
	'nama_barang' => $_POST['nama_barang'],
	'id_jenis_barang'=> $_POST['id_jenis_barang'],
	'id_merek'=> $_POST['id_merek'],
	'id_vendor'=> $_POST['id_vendor'],
	'id_lokasi'=> $_POST['id_lokasi'],
	'tanggal_pembelian'=> $_POST['tanggal_pembelian'],
	'jumlah'=> $_POST['jumlah'],
	'harga'=> $_POST['harga']
];

$create = $barang->create($payload);



// if($create === TRUE)
header("location: ../data_barang.php");