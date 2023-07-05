<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?php echo $judul; ?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Selamat Datang Kembali, Admin <?= $user['nama']; ?> </li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Jumlah User<br></div>
                                    <div class="col-auto"><i class="fas fa-user"></i>
                                        <div class="text-col"><?=$this->ModelUser->getUserWhere(['role_id' => 2])->num_rows(); ?></div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url().'admin/data_user'?>">Selengkapnya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Jumlah Hewan di Konservasi</div>
                                    <div class="col-auto"><i class="fas fa-heart"></i>
                                        <div class="text-col"><?=$this->ModelHewan->getHewan('id')->num_rows(); ?></div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url().'admin/dataHewan'?>">Selengkapnya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Jumlah Relawan</div>
                                    <div class="col-auto"><i class="fas fa-users"></i>
                                        <div class="text-col"><?=$this->ModelRelawan->cekData('id')->num_rows(); ?></div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url().'admin/dataRelawan'?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Species di Konservasi</div>
                                    <div class="col-auto"><i class="fas fa-id-card"></i>
                                        <div class="text-col"><?=$this->ModelHewan->getSpecies('id')->num_rows(); ?></div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url().'admin/dataSpecies'?>">Selengkapnya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Daftar Hewan yang berada di Konservasi Kami
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Gambar</th>
                                            <th>Nama Hewan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>ID Species</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Status Adopsi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Gambar</th>
                                            <th>Nama Hewan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>ID Species</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Status Adopsi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $a = 1;
                                        foreach ($hewan as $h) { ?>
                                        <tr>
                                            <th scope="row"><?= $a++; ?></th>
                                            <td>
                                                <img class="img-fluid" src="<?= base_url('assets/img/upload/') . $h['image']; ?>">
                                            </td>
                                            <td><?= $h['nama_hewan']; ?></td>
                                            <td><?= $h['jenis_kelamin']; ?></td>
                                            <td><?= $h['id_species']; ?></td>
                                            <td><?= $h['tanggal_lahir']; ?></td>
                                            <td><?= $h['status_adopsi']; ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
