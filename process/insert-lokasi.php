<?php

require "Lokasi.php";

$lokasibarang = new Lokasi();
$payload = [
	'lokasi' => $_POST['lokasi']
];

$create = $lokasibarang->create($payload);



// if($create === TRUE)
header("location: ../m-lokasi.php");