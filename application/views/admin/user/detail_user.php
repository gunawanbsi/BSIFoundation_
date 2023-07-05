<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-3 ms-3">
            <div class="card" style="width: 40rem;">
            <div class="ms-3 mb-3"><h1>Detail User</h1></div>
            <div class="card-body">
            <?php foreach ($member as $b) : ?>
                <div class="row-style">
                    <img src="<?php echo base_url().'/assets/img/profile/'.$b->image ?>" class="card-img-top-rel" alt="...">
                    <div class="col-md-x">
                        <table class="tabel ms-5 mt-xx">
                            <tr>
                                <td>Nama User</td>
                                <td><strong><?php echo $b->nama ?></strong></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><strong><?php echo $b->email ?></strong></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><strong><?php echo $b->alamat ?></strong></td>
                            </tr>
                            <tr>
                                <td>Nomor Telepon</td>
                                <td><strong><?php echo $b->no_telepon?></strong></td>
                            </tr>
                            <tr>
                                <td>Jadi User Sejak</td>
                                <td><strong><?php echo date('d F Y', $b->tanggal_input); ?></strong></td>
                            </tr>
                            <tr>
                                <td colspan="2"><?php echo anchor('admin/data_user/', '<div class="button mb-3 mt-3 ms-5"> Kembali </div>') ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </main>
</div>
            </div>