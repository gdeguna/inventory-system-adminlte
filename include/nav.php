<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar2.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['user']['email']; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENUS</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="index.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="data_barang.php"><i class="fa fa-dropbox"></i> <span>Data Barang</span></a></li>
        <!-- <li><a href="#"><i class="fa fa-link"></i> <span>Data Master</span></a></li> -->
        <li class="treeview">
          <a href="#"><i class="fa fa-inbox"></i> <span>Data Master</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="m-jenisbarang.php">Master Jenis Barang</a></li>
            <li><a href="m-merk.php">Master Merk</a></li>
            <li><a href="m-vendor.php">Master Vendor</a></li>
            <li><a href="m-lokasi.php">Master Lokasi</a></li>
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
          <a href="#"><i class="fa fa-sticky-note"></i> <span>Laporan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Laporan Semua Data</a></li>
            <li><a href="#">Laporan Peminjaman</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>