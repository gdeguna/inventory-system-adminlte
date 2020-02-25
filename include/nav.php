<aside class="main-sidebar">
  <?php $activePage = basename($_SERVER['PHP_SELF'], ".php");?>
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar2.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <h5><?php echo $_SESSION['user']['email']; ?></h5>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENUS</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li class="<?= ($activePage == 'data_barang') ? 'active':''; ?>"><a href="data_barang.php"><i class="fa fa-dropbox"></i> <span>Data Barang</span></a></li>
        <!-- <li><a href="#"><i class="fa fa-link"></i> <span>Data Master</span></a></li> -->
        <li class="treeview <?= ($activePage == 'm-jenisbarang') ? 'active':''; ?> <?= ($activePage == 'm-merk') ? 'active':''; ?> <?= ($activePage == 'm-vendor') ? 'active':''; ?> <?= ($activePage == 'm-lokasi') ? 'active':''; ?>">
          <a href="#" <?php echo $nav_hiddendatamaster ; ?> ><i class="fa fa-inbox"></i> <span>Data Master</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?= ($activePage == 'm-jenisbarang') ? 'active':''; ?>"><a href="m-jenisbarang.php">Master Jenis Barang</a></li>
            <li class="<?= ($activePage == 'm-merk') ? 'active':''; ?>"><a href="m-merk.php">Master Merk</a></li>
            <li class="<?= ($activePage == 'm-vendor') ? 'active':''; ?>"><a href="m-vendor.php">Master Vendor</a></li>
            <li class="<?= ($activePage == 'm-lokasi') ? 'active':''; ?>"><a href="m-lokasi.php">Master Lokasi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-shopping-cart"></i> <span>Transaksi</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Peminjaman</a></li>
            <li><a href="#">Pengembalian</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#" <?php echo $hideall; ?>><i class="fa fa-sticky-note"></i> <span>Laporan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Laporan Semua Data</a></li>
            <li><a href="#">Laporan Peminjaman</a></li>
          </ul>
        </li>
        <li <?php echo $nav_hiddendatauser ; ?> class="<?= ($activePage == 'data_user') ? 'active':''; ?>"><a href="data_user.php"><i class="fa fa-user" ></i> <span>Users</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>