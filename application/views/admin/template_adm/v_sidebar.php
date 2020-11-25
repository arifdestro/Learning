    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="<?= base_url(); ?>assets/dist/img/PA02.jpg" alt="PA Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-bold text-uppercase"><b> Preneur Academy </b></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                    <!-- MENU -->

                    <!-- ini menu yang ga ada sub menunya -->
                    <!-- kalo ngopy codingan menunya dari sini -->
                    <li class="nav-item">
                        <a href="<?= base_url('admin/dashboard'); ?>" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <!-- <span class="right badge badge-danger">New</span> -->
                            </p>
                        </a>
                    </li>
                    <!-- akhir ngopy sampai sini -->

                    <!-- Ini menu yang ada submenunya -->
                    <!-- kalo ngopy codingan menunya dari sini -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Profil
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <!-- ini submenunya -->
                        <ul class="nav nav-treeview">
                            <!-- kalo ngopy sub menu dari sini -->
                            <li class="nav-item">
                                <a href="<?= base_url('admin/profile'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Konfigurasi Profil</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-header">Transaksi</li>

                    <li class="nav-item">
                        <a href="<?= base_url('admin/#'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-receipt"></i>
                            <p>
                                Transaksi
                                <span class="badge badge-info right">2</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/#'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-history"></i>
                            <p>
                                Histori
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">Kelas</li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fab fa-leanpub"></i>
                            <p>
                                Manajemen Kelas
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('admin/listkelas'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Buat Materi Kelas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/#'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pengumpulan Tugas</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-header">Website</li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-blog"></i>
                            <p>
                                Manajemen Blog
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('admin/blog'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blog</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/kategori'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kategori</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/tags'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tags</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Setting Website
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('admin/navigasi'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Navigasi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/website'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Website</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/medsos'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Media Sosial</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/kebijakan'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kebijakan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/key'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Key API</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-header">Master</li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-database"></i>
                            <p>
                                Data Master
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('admin/peserta'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Peserta</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/kelas'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Kelas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/ktgkelas'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kategori Kelas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/diskon'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Diskon</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/#'); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Notifikasi</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

                <ul class="nav nav-pills bg-danger nav-sidebar flex-column mt-4 mb-4" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-sm">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>