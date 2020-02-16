<?php

session_start();
if($_SESSION['levels']==""){
		header("location:landing.php?pesan=gagal");
	}

?>