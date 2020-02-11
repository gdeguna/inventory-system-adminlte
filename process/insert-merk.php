<?php

require "Merk.php";

$merkbarang = new Merk();
$payload = [
	'merek' => $_POST['merek']
];

$create = $merkbarang->create($payload);



// if($create === TRUE)
header("location: ../m-merk.php");