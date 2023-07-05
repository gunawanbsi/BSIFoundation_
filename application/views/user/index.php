<div class="container-xxl py-5 mt-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <?= $this->session->flashdata('pesan'); ?>
          <h2><?= $user['nama']; ?></h2><br>
                        <p>Email : <?= $user['email']; ?></p><br>
                        <p>Alamat : <?= $user['alamat'];?></p><br>
                        <p>No Telepon : <?= $user['no_telepon'];?></p><br>
                        <p>Jadi member sejak: <br><b><?= date('d F Y', $user['tanggal_input']); ?></b></p>
                        <br>
                        <a href="<?= base_url('user/ubahprofil'); ?>"class="button-green"> Ubah Profil</a>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="img-border">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>