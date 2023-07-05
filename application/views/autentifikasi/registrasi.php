<form method="post" action="<?= base_url('autentifikasi/registrasi'); ?>">
<section class="v-registrasi wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-4">Daftar Menjadi User</h3>
            <div class="form-outline mb-3">
              <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name ="nama" value="<?= set_value('nama'); ?>">
              <?= form_error('nama', '<small class="danger-text">', '</small>'); ?>
            </div>
            <div class="form-outline mb-3">
              <input type="text" class="form-control" placeholder="Alamat Email" id="email" name="email" value="<?= set_value('email'); ?>">
              <?= form_error('email', '<small class="danger-text">', '</small>'); ?>
            </div>
            <div class="form-outline mb-3">
              <input type="text" class="form-control" placeholder="Alamat" id="alamat" name="alamat" value="<?= set_value('alamat'); ?>">
              <?= form_error('alamat', '<small class="danger-text">', '</small>'); ?>
            </div>
            <div class="form-outline mb-3">
              <input type="text" class="form-control" placeholder="Nomor Telepon" id="no_telepon" name="no_telepon" value="<?= set_value('no_telepon'); ?>">
              <?= form_error('no_telepon', '<small class="danger-text">', '</small>'); ?>
            </div>
            <div class="form-outline mb-3">
              <input type="password" class="form-control" id="passsword1" name="password1" placeholder="Password">
              <?= form_error('password1', '<small class="danger-text">', '</small>'); ?>
            </div>
            <div class="form-outline mb-3">
              <input type="password" class="form-control" id="password2" name="password2" placeholder="Ulangi Password">
              <?= form_error('password2', '<small class="danger-text">', '</small>'); ?>
            </div>
            <!-- Checkbox -->

            <button class="button-green" type="submit">Daftar</button>
            <hr class="my-4">
            <p><center>Sudah jadi Member? <a href="<?php echo base_url().'autentifikasi'?>">Login</a></center></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>