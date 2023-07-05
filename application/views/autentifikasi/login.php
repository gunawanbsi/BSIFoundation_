<form method="post" action="<?= base_url('autentifikasi'); ?>">
<section class="v-login wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Login</h3>
            <?= $this->session->flashdata('pesan'); ?>
            <p>Pengguna Baru? <a href="<?php echo base_url().'autentifikasi/registrasi'?>">Buat Akun Baru</a></p>
            <div class="form-outline mb-4">
              <input type="email" value ="<?= set_value('email');?>" id="email" placeholder="Alamat Email" name ="email" class="form-control" />
              <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-outline mb-4">
              <input type="password" placeholder="Password" id="password" name="password" class="form-control" />
              <?= form_error('password', '<small class="text-danger">', '<small>'); ?>
            </div>
            <!-- Checkbox -->

            <button class="button-green" type="submit">LOGIN</button>

            <hr class="my-4">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>