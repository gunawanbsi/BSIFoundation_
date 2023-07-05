<div id="layoutSidenav_content">
    <?= form_open_multipart('admin/ubahprofil'); ?>
    <div class="rowpro mb-3 mt-3">
        <label for="email" class="text-pad">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
    </div>
    <div class="rowpro mb-3">
            <label for="nama" class="text-pad">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
    </div>
    <?= form_error('nama', '<small class="danger-text">', '</small>'); ?>
    <div class="rowpro mb-3">
        <label for="alamat" class="text-pad">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat']; ?>">
    </div>
    <?= form_error('alamat', '<small class="danger-text">', '</small>'); ?>
    <div class="rowpro mb-3">
        <label for="no_telepon" class="text-pad">Nomor Telepon</label>
        <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?= $user['no_telepon']; ?>">
    </div>
    <?= form_error('no_telepon', '<small class="danger-text">', '</small>'); ?>
    <div class="rowpro mb-3">
        <div class="text-pad">Gambar</div>
        <img src="<?=base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail" alt="">
        <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label"for="image">Pilih file</label>
                <button type="submit" class="button-blue ms-5 mt-5">Ubah</button>
                <button class="button"onclick="window.history.go(-1)">Kembali</button>
        </div>
    </div>
</div>
</div>