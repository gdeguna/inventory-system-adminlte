<?php

require "Users.php";

$user = new Users();
$payload = [
	'nama_karyawan' => $_POST['nama_karyawan'],
	'no_tlp'=> $_POST['no_tlp'],
	'levels'=> $_POST['levels']
];

$edit = $user->update($_GET['id'], $payload);



if($edit === TRUE)
header("location: ../data_user.php");