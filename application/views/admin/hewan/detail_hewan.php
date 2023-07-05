<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-3 ms-3">
            <div class="card" style="width: 50rem;">
            <div class="ms-3 mb-3"><h1>Detail Hewan</h1></div>
            <div class="card-body">
            <?php foreach ($hewan as $b) : ?>
                <div class="row-style">
                    <img src="<?php echo base_url().'/assets/img/upload/'.$b->image ?>" class="card-img-top" alt="...">
                    <div class="col-md-x">
                        <table class="tabel ms-5 mt-xx">
                            <tr>
                                <td>Nama Hewan</td>
                                <td><strong><?php echo $b->nama_hewan ?></strong></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><strong><?php echo $b->jenis_kelamin ?></strong></td>
                            </tr>
                            <tr>
                                <td>ID Species</td>
                                <td><strong><?php echo $b->id_species ?></strong></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td><strong><?php echo $b->tanggal_lahir?></strong></td>
                            </tr>
                            <tr>
                                <td>Status Adopsi</td>
                                <td><strong><?php echo $b->status_adopsi?></strong></td>
                            </tr>
                            <tr>
                                <td colspan="2"><?php echo anchor('admin/dataHewan/', '<div class="button mb-3 mt-3 ms-5"> Kembali </div>') ?></td>
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