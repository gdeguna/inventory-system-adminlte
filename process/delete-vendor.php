<?php

require "Vendor.php";

$vendor = new Vendor();

$delete = $vendor->delete($_GET['id_vendor']);

// if($create === TRUE)
header("location: ../m-vendor.php");