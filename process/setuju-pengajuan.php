<?php

require "Data-barang.php";

$barang = new Barang();

$create = $barang->approve($_GET['id_barang']);



if($create === TRUE)
header("location: ../pengadaan-barang.php");