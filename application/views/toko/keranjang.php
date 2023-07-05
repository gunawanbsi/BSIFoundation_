<div class="container-xxl py-5">
    <div class="container">
        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
            <h1 class>KERANJANG BELANJA</h1>
        </div>
    </div>
</div>
<div class="container-xxl py-5">
    <table class ="table table-bordered table-striped table-hover wow fadeInUp" data-wow-delay="0.3s">
        <tr>
            <th>Nomor</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Subtotal</th>
        </tr>

        <?php $no=1;
        foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $items['name'] ?></td>
                <td><?php echo $items['qty'] ?></td>
                <td>Rp. <?php echo number_format($items['price'], 0, ',', '.') ?></td>
                <td>Rp. <?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
            </tr>
        <?php endforeach ?>
        <tr>
            <td colspan="3"></td>
            <td align="center"> Jumlah Total : </td>
            <td>Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
        </tr>
    </table>
    <div class="row gy-3 gx-4">
        <div class="col-lg-2 wow fadeInUp" data-wow-delay="0.2s">
            <a href = "<?php echo base_url('toko/hapusKeranjang') ?>" class="button"> Hapus Keranjang </a>
        </div>
        <div class="col-lg-2 wow fadeInUp" data-wow-delay="0.2s">
            <a href = "<?php echo base_url('toko') ?>" class="button-blue"> Lanjutkan Belanja </a>
        </div>
        <div class="col-lg-2 wow fadeInUp" data-wow-delay="0.2s">
            <a href = "<?php echo base_url('toko/pembayaran') ?>" class="button-green"> Pembayaran </a>
        </div>
    </div>
    </div>