<?php

require "Jenis-barang.php";

$jenisbarang = new Jenisbarang();

$delete = $jenisbarang->delete($_GET['id_jenis_barang']);

// if($create === TRUE)
header("location: ../m-jenisbarang.php");