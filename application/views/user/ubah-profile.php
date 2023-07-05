<?= form_open_multipart('user/ubahprofil'); ?>
<div class="container-xxl py-5 mt-3">
      <div class="container">
        <div class="row mt-3">
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                <label for="email" class="text-pad">Email</label>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                <label for="nama" class="text-pad">Nama Lengkap</label>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                <?= form_error('nama', '<small class="danger-text">', '</small>'); ?>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                <label for="alamat" class="text-pad">Alamat</label>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat']; ?>">
                <?= form_error('alamat', '<small class="danger-text">', '</small>'); ?>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                <label for="no_telepon" class="text-pad">Nomor Telepon</label>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?= $user['no_telepon']; ?>">
                <?= form_error('no_telepon', '<small class="danger-text">', '</small>'); ?>
            </div>
        </div>
        <div class="row mt-3 mb-5">
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="text-pad">Gambar</div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="img-border">
                    <img src="<?=base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="">
                </div>
                <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label mt-2" for="image">Pilih file</label>
                        <button type="submit" class="button-green mt-5">Ubah</button>
                        <a class="button" href="<?= base_url('user'); ?>">Kembali</a>
                </div>
            </div>
        </div>
      </div>
</div>