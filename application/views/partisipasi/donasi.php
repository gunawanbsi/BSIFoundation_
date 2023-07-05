<!-- Page Header Start -->
<div
      class="ou mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
    <img src="<?php echo base_url()?>assets/img/coverdonasi.jpg">
</div>
<div class="container-xxl py-5">
    <div class="container">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
            <h1>BANTU WUJUDKAN UPAYA KAMI</h1>
            <p>Donasi adalah tulang punggung bagi kegiatan kami.
            Silahkan pilih paket Donasi Anda </p>
        </div>
    </div>
</div>
<div class="container-xxl py-2">
        <div class="row gy-3 gx-4">
            <?php foreach ($donasi as $b) : ?>
                <div class="col-lg-5 text-center cardd me-3 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="<?php echo base_url().'/assets/img/upload/'.$b->image ?>" class="img-thumbnail" alt="...">
                            <h5> Rp. <?php echo number_format($b->paket_donasi, 0, ',', '.') ?></h5>
                            <p> <?php echo $b->teks ?> </p>
                            <?php echo anchor('User/bayarDonasi/' .$b->id, '<div class="button-green mb-3 mt-3">Donasi Sekarang </div>') ?>
                </div>
		    <?php endforeach ?>
        </div>
</div>