<!-- Page Header Start -->
<div
      class="ou mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
    <img src="<?php echo base_url()?>assets/img/adopsi.jpg">
</div>
<div class="container-xxl py-5">
    <div class="container">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
            <h1>ADOPSI</h1>
            <p>Ingin mengadopsi Hewan Konservasi Kami? Silahkan Pilih Sesuai Pilihanmu.</p>
        </div>
    </div>
</div>
<div class="container-xxl py-2">
        <div class="row gy-3 gx-4">
            <?php foreach ($hewan as $b) : ?>
                <div class="card mb-3 ms-3 wow fadeInUp" data-wow-delay="0.3s" style="width: 18rem;">
				<img src="<?php echo base_url().'/assets/img/upload/'.$b->image ?>" class="card-img-top" alt="...">
				<div class="card-body" align="left">
					<h5 class="card-title"><?php echo $b->nama_hewan ?></h5>
					<p> <?php echo "Jenis Kelamin : "; echo $b->jenis_kelamin ?> </p>
					<p> <?php echo "ID Species : "; echo $b->id_species?> </p>
                    <p> <?php echo "Tanggal Lahir : "; echo $b->tanggal_lahir ?> </p>
					<?php echo anchor('user/adopsiHewan/' .$b->id, '<div class="button-green mb-3 mt-3"> Adopsi Sekarang </div>') ?>
				</div>
			</div>
		    <?php endforeach ?>
        </div>
</div>