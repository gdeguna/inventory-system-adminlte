<?php

require "Data-barang.php";

$barang = new Barang();

$delete = $barang->delete($_GET['id_barang']);

// if($create === TRUE)
header("location: ../data_barang.php");