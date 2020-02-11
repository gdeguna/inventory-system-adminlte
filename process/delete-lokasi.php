<?php

require "Lokasi.php";

$lokasibarang = new Lokasi();

$delete = $lokasibarang->delete($_GET['id_lokasi']);

// if($create === TRUE)
header("location: ../m-lokasi.php");