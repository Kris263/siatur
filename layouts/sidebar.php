<aside class="main-sidebar sidebar-dark-primary bg-blue elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link bg-blue">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text text-light">Net Sun Power</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block text-light">ADMIN</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2 ">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/siatur/index.php" class="nav-link">
                        <ion-icon name="clipboard-outline" class="far nav-icon"></ion-icon>
                        <p class="text-light">Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <ion-icon name="archive-outline" class="far nav-icon"></ion-icon>
                        <p class="text-light">
                            Gudang
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/siatur/admin/gudang/barangmasuk.php" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p class="text-light">Barang Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/siatur/admin/gudang/barangkeluar.php" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p class="text-light">Barang Keluar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <ion-icon name="code-working-outline" class="far nav-icon"></ion-icon>
                        <p class="text-light">
                            Order Pekerjaan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/siatur/admin/pekerjaan/psb.php" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p class="text-light">Pemasangan Baru</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/siatur/admin/pekerjaan/perbaikan.php" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p class="text-light">Perbaikan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/siatur/admin/pekerjaan/odp.php" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p class="text-light">Pemasangan ODP Baru</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <ion-icon name="people-outline" class="far nav-icon"></ion-icon>
                        <p class="text-light">
                            Karyawan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/siatur/admin/karyawan/datakaryawan.php" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p class="text-light">Data Karyawan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/siatur/admin/karyawan/absen.php" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p class="text-light">Data Absen</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <ion-icon name="document-text-outline" class="far nav-icon"></ion-icon>
                        <p class="text-light">
                            Laporan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/siatur/admin/laporan/barang.php" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p class="text-light">Laporan Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/siatur/admin/laporan/pekerjaan.php" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p class="text-light">Laporan Perkerjaan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/siatur/admin/laporan/karyawan.php" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>Laporan Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/siatur/admin/laporan/absen-karyawan.php" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p class="text-light">Laporan Absen Pegawai</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                        <ion-icon class="far nav-icon" name="log-out-outline"></ion-icon>
                        <p class="text-light">Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>