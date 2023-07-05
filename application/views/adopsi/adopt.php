<div
      class="ou mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
    <img src="<?php echo base_url()?>assets/img/adopsi.jpg">
</div>
<div class="container-xxl">
    <div class="container">
        <div class="button mb-3 wow fadeIn" data-wow-delay="0.1s">
            <?php foreach ($adopsi as $d) : ?>
            <?php echo "Total Biaya Adopsi Anda Adalah : Rp. 2.000.000";?>
        </div>
        <h2 class="mb-5">Input Data Adopsi</h2>
        <form method="post" action="<?php echo base_url() ?>user/prosesAdopsi">
            <div class="row g-5 mb-3">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                    <label class="text-pad">Nama Lengkap</label>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap">
                </div>
                <input type="hidden" class="form-control" name="id_donasi" value="<?php echo $d->id; ?>">
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
                    <input type="hidden" class="form-control" name="nama_hewan" value="<?php echo $d->nama_hewan; ?>">
                    <input type="hidden" class="form-control" name="id_species" value="<?php echo $d->id_species; ?>">
                    <input type="hidden" class="form-control" name="harga" value="Rp. 2.000.000">
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
            <button type="submit" class="button-green"> Adopsi Sekarang </button>
            <?php endforeach ?>
        </form>
    </div>
</div>