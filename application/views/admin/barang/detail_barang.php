<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-3 ms-3">
            <div class="card" style="width: 50rem;">
            <div class="ms-3 mb-3"><h1>Detail Produk</h1></div>
            <div class="card-body">
            <?php foreach ($barang as $b) : ?>
                <div class="row-style">
                    <img src="<?php echo base_url().'/assets/img/upload/'.$b->gambar ?>" class="card-img-top" alt="...">
                    <div class="col-md-x">
                        <table class="tabel ms-5 mt-xx">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?php echo $b->barang ?></strong</td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?php echo $b->keterangan ?></strong</td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?php echo $b->kategori ?></strong</td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><strong><?php echo $b->stok ?></strong</td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><strong>Rp. <?php echo number_format($b->harga, 0, ',', '.') ?></strong</td>
                            </tr>
                        </table>
                        <?php echo anchor('admin/data_barang/', '<div class="button mb-3 mt-3 ms-5"> Kembali </div>') ?>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </main>
</div>
            </div>