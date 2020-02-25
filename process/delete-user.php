<?php

require "Users.php";

$user = new Users();

$delete = $user->delete($_GET['id_karyawan']);

// if($create === TRUE)
header("location: ../data_user.php");