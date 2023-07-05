<form method="post" action="<?= base_url('relawan/dafrel'); ?>">
<section class="v-dafrel wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Daftar Menjadi Relawan</h3>
            <?= $this->session->flashdata('pesan'); ?>
            <div class="form-outline mb-4">
                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name ="nama" value="<?= set_value('nama'); ?>">
                <?= form_error('nama', '<small class="danger-text">', '</small>'); ?>
            </div>
            <div class="form-outline mb-4">
                <input type="text" class="form-control" placeholder="Alamat Email" id="email" name="email" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="danger-text">', '</small>'); ?>
            </div>
            <div class="form-outline mb-4">
                <input type="text" class="form-control" placeholder="Alamat" id="alamat" name="alamat" value="<?= set_value('alamat'); ?>">
                <?= form_error('alamat', '<small class="danger-text">', '</small>'); ?>
            </div>
            <div class="form-outline mb-4">
                <input type="text" class="form-control" placeholder="Nomor Telepon" id="no_telepon" name="no_telepon" value="<?= set_value('no_telepon'); ?>">
                <?= form_error('no_telepon', '<small class="danger-text">', '</small>'); ?>
            </div>
            <div class="form-outline mb-4">
                <input type="text" class="form-control" placeholder="Tanggal Lahir" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>">
                <?= form_error('tanggal_lahir', '<small class="danger-text">', '</small>'); ?>
            </div>
            <!-- Checkbox -->

            <button class="button-green" type="submit">Daftar Menjadi Relawan</button>

            <hr class="my-4">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>