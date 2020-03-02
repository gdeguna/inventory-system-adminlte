<?php

require "Data-barang.php";

$barang = new Barang();

$create = $barang->tolak($_GET['id_barang']);



if($create === TRUE)
header("location: ../pengadaan-barang.php");