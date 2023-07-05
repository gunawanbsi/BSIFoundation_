
<div class="container-xxl py-5">
    <div class="container">
        <div class="button mb-3 wow fadeIn" data-wow-delay="0.1s">
        <?php $grand_total = 0;
        if ($keranjang = $this->cart->contents())
        {
            foreach ($keranjang as $item)
            {
                $grand_total = $grand_total + $item['subtotal'];
            }
        echo "Total Belanja Anda : Rp. " .number_format($grand_total, 0, ',', '.');
        ?>
        </div>
        <h2 class="mb-5">Input Alamat Pengiriman dan Pembayaran</h2>
        <form method="post" action="<?php echo base_url() ?>toko/prosesPesanan">
            <div class="row g-5 mb-3">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                    <label class="text-pad">Nama Lengkap</label>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap">
                </div>
            </div>
            <div class="row g-5 mb-3">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                    <label class="text-pad">Alamat Lengkap</label>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Lengkap">
                </div>
            </div>
            <div class="row g-5 mb-3">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                    <label class="text-pad">Nomor Telepon</label>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <input type="text" class="form-control" name="no_telepon" placeholder="Masukan Nomor Telepon">
                </div>
            </div>
            <div class="row g-5 mb-3">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                    <label class="text-pad">Jasa Pengiriman</label>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <select class="form-control">
                        <option>JNE</option>
                        <option>TIKI</option>
                        <option>Pos Indonesia</option>
                        <option>Gojek</option>
                        <option>Grab</option>
                    </select>
                </div>
            </div>
            <div class="row g-5 mb-3">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                    <label class="text-pad">Pilih Bank</label>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <select class="form-control">
                        <option>BCA - XXXXXXXXXX</option>
                        <option>BNI - XXXXXXXXXX</option>
                        <option>BRI - XXXXXXXXXX</option>
                        <option>MANDIRI - XXXXXXXXXX</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="button-green"> Pesan </button>
        </form>
        <?php }
        else {
            echo "Keranjang Belanja Anda Masih Kosong"; 
        } ?>
    </div>
</div>