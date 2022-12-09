<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('AdminControl/dashboard'); ?>">
                <div class="sidebar-brand-icon">
                        <!-- <img class="img-profile rounded-circle " src="<?= base_url('assets/img/profile/') . $user['image']; ?>"> -->
                        <i class="fas fa-fw fa-city"></i>
                </div>
                <div class="sidebar-brand-text mx-3">CLUSTER ANDALUS</div>
        </a>
        <?php if ($session['role_id'] == 1) { ?>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Nav Item - Dashboard -->
                <div class="sidebar-heading">
                        PELANGGAN
                </div>
                <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('AdminControl/daftar_pelanggan'); ?>">
                                <span>Daftar Pelanggan</span></a>
                </li>
                <hr class="sidebar-divider">
                <div class="sidebar-heading">
                        TRANSAKSI
                </div>
                <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('AdminControl/pembayaran_manual'); ?>">
                                <span>Pembayaran Manual</span></a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('AdminControl/validasi'); ?>">
                                <span>Validasi Pembayaran Transfer</span></a>
                </li>
                <div class="sidebar-heading">
                        <hr class="sidebar-divider">
                        TRANSAKSI KAS
                </div>
                <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('AdminControl/pencatatan_kas'); ?>">
                                <span>Pencatatan Kas<span></a>
                        <div class="sidebar-heading">
                                <hr class="sidebar-divider">
                                LAPORAN
                        </div>
                <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('AdminControl/tagihan_bulanan'); ?>">
                                <span>Tagihan Bulanan</span></a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('AdminControl/arus_kas'); ?>">
                                <span>Arus Kas</span></a>
                </li>
                <!-- 
                <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('AdminControl/form_tagihan'); ?>">
                                <i class="fas fa-fw fa-envelope"></i>
                                <span>Form Tagihan Pelanggan</span></a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('AdminControl/form_himbauan'); ?>">
                                <i class="fas fa-fw fa-envelope"></i>
                                <span>Form Himbauan Pelanggan</span></a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('AdminControl/keluhan_pelanggan'); ?>">
                                <i class="fas fa-fw fa-envelope"></i>
                                <span>Keluhan Pelanggan</span></a>
                </li> -->

        <?php } else { ?>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('MemberControl/upload_bukti_tf'); ?>">
                                <i class="fas fa-fw fa-upload"></i>
                                <span>Upload Bukti Transfer</span>
                        </a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('MemberControl/info_tagihan'); ?>">
                                <i class="fas fa-fw fa-file"></i>
                                <span>Info Tagihan Anda</span>
                        </a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('MemberControl/info_himbauan'); ?>">
                                <i class="fas fa-fw fa-bullhorn"></i>
                                <span>Info Himbauan</span>
                        </a>
                </li>

        <?php  } ?>
        <!-- Divider -->
        <!-- <hr class="sidebar-divider d-none d-md-block">

        <li class="nav-item">
                <a class="nav-link" href="<?= base_url('MainControl/logout'); ?>">
                        <i class="fas fa-fw fa-sign-out-alt"></i>
                        <span>Log Out</span></a>
        </li> -->
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
</ul>
<!-- End of Sidebar -->