<?php

require "Vendor.php";

$vendor = new Vendor();
$payload = [
	'id_jenis_vendor' => $_POST['id_jenis_vendor'],
	'vendor' => $_POST['vendor'],
	'contact' => $_POST['contact'],
	'alamat' => $_POST['alamat']
];

$create = $vendor->buat($payload);



// if($create === TRUE)
header("location: ../m-vendor.php");