<div class="container-xxl py-5">
    <div class="container">
        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
            <h1 class>DETAIL PRODUK</h1>
        </div>
    </div>
</div>
<div class="container-xxl py-2">
        <div class="row gy-3 gx-4">
            <?php foreach ($barang as $b) : ?>
            <div class="row mt-3">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <img src="<?php echo base_url().'/assets/img/upload/'.$b->gambar ?>" style="width:90%;">
            </div>
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                <table class="table ms-5 mt-xx">
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
                    <?php echo anchor('toko/tambahKeranjang/' .$b->id, '<div class="button-green mb-3 mt-3 ms-5">Tambah ke Keranjang </div>') ?>
                    <?php echo anchor('toko', '<div class="button mb-3 mt-3 ms-5">Kembali </div>') ?>
            </div>
        </div>
	    <?php endforeach ?>
        </div>
</div>
</div>