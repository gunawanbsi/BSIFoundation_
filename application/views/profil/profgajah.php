<div
      class="ou mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
    <img src="<?php echo base_url()?>assets/img/gajah2.png">
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row gy-5 gx-4">
                <?php foreach ($hewan as $h) : ?>
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="<?php echo base_url().'/assets/img/upload/'.$h->image ?>" alt="">
                        </div>
                        <div class="service-text p-5 pt-0" align="left">
                            <div class="service-icon">
                                <img class="img-fluidd rounded-circle" src="<?php echo base_url().'/assets/img/upload/'.$h->image ?>" alt="">
                            </div>
                            <h5 class="mb-3"><?php echo "Nama Hewan : "; echo $h->nama_hewan ?></h5 >
                            <p> <?php echo "Jenis Kelamin : "; echo $h->jenis_kelamin ?> </p>
                            <p> <?php echo "Kategori Hewan : "; echo $h->id_species ?> </p>
                            <p> <?php echo "Tanggal Lahir : "; echo $h->tanggal_lahir?> </p>
                            <p> <?php echo "Status Adopsi : "; echo $h->status_adopsi?> </p>
                        </div>
                    </div>
                </div>
				<?php endforeach ?>
        </div>
    </div>
</div>