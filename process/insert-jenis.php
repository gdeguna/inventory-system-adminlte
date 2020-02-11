<?php

require "Jenis-barang.php";

$jenisbarang = new Jenisbarang();
$payload = [
	'jenis_barang' => $_POST['jenis_barang']
];

$create = $jenisbarang->create($payload);



// if($create === TRUE)
header("location: ../m-jenisbarang.php");