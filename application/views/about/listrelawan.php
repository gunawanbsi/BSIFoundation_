<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="section-title bg-white text-center text-primary px-3">Relawan Kami</h1>
            </div>
            <div class="row g-4">
            <?php foreach ($relawan as $b) : ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="<?php echo base_url().'/assets/img/profile/'.$b->image ?>" alt="">
                        <h5 class="text-center mb-2"><?php  echo $b->nama ?></h5>
                        <p> <?php echo "Email Relawan : "; echo $b->email ?> </p>
                        <p> <?php echo "Alamat : "; echo $b->alamat ?> </p>
                        <p> <?php echo "Nomor Telepon : "; echo $b->no_telepon?> </p>
                        <p> <?php echo "Tanggal Lahir : "; echo $b->tanggal_lahir?> </p>
                        <p><?php echo "Bergabung Sejak : "; echo date('d F Y', $b->tanggal_input); ?></p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            </div>
        </div>
</div>