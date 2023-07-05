<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link" href="<?php echo base_url().'admin'?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Master Data</div>
                            <a class="nav-link" href="<?php echo base_url().'admin/data_user'?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Data User
                            </a>
                            <a class="nav-link" href="<?php echo base_url().'admin/dataHewan'?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-heart"></i></div>
                                Data Hewan
                            </a>
                            <a class="nav-link" href="<?php echo base_url().'admin/dataSpecies'?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-id-card"></i></div>
                                Data Species
                            </a>
                            <a class="nav-link" href="<?php echo base_url().'admin/dataRelawan'?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Data Relawan
                            </a>
                            <div class="sb-sidenav-menu-heading">Tranksaksi</div>
                            <a class="nav-link" href="<?php echo base_url().'admin/dataDonasi'?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-circle-dollar-to-slot"></i></div>
                                Data Donasi
                            </a>
                            <a class="nav-link" href="<?php echo base_url().'admin/dataAdopsi'?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-hippo"></i></div>
                                Data Adopsi
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutstoko" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                                Data Toko
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutstoko" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url().'admin/data_barang'?>">Data Barang</a>
                                    <a class="nav-link" href="<?php echo base_url().'admin/invoice'?>">Data Pemesanan</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Laporan</div>
                            <a class="nav-link" href="<?php echo base_url().'laporan/LaporanDataUser'?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                                Laporan Data User
                            </a>
                            <a class="nav-link" href="<?php echo base_url().'laporan/LaporanDataHewan'?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-heart"></i></div>
                                Laporan Data Hewan
                            </a>
                            <a class="nav-link" href="<?php echo base_url().'laporan/LaporanDataRelawan'?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-id-card"></i></div>
                                Laporan Data Relawan
                            </a>
                            <a class="nav-link" href="<?php echo base_url().'laporan/LaporanDataDonasi'?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-circle-dollar-to-slot"></i></div>
                                Laporan Data Donasi
                            </a>
                            <a class="nav-link" href="<?php echo base_url().'laporan/LaporanDataAdopsi'?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-hippo"></i></div>
                               Laporan Data Adopsi
                            </a>
                            <a class="nav-link" href="<?php echo base_url().'laporan/LaporanDataPemesanan'?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                                Laporan Pemesanan
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?= $user['nama']; ?>
                    </div>
                </nav>
            </div>