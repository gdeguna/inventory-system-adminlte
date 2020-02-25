<?php
require_once("./process/auth.php"); 
// require "Barang.php";
?>

<?
session_start();
?>
<?php 
  // variabel untuk hide
  $hiddendashboardicon = "";
  $nav_hiddendatamaster = "";
  $databarang_hidetmbltmbh = "";
  $databarang_hidetmbledit = "";
  $hideall = "";
  $nav_hiddendatauser = "";

  // logika jika session berbeda apa yang harus dilakukan
  if($_SESSION['levels'] == "Admin"){
    $hiddendashboardicon = "";
    $nav_hiddendatauser = "style='display:none;'";
  }elseif ($_SESSION['levels'] == "Karyawan") {
    $nav_hiddendatamaster = "style='display:none;'";
    $databarang_hidetmbltmbh = "style='display:none;'";
    $databarang_hidetmbledit = "style='display:none;'";
    $hideall = "style='display:none;'";
    $nav_hiddendatauser = "style='display:none;'";
  }
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventory System | WEB BASE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-green.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>