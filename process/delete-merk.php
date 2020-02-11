<?php

require "Merk.php";

$merkbarang = new Merk();

$delete = $merkbarang->delete($_GET['id_merek']);

// if($create === TRUE)
header("location: ../m-merk.php");