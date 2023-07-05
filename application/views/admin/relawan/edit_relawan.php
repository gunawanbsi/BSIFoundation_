<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-3 ms-3">
            <h3><i class="fas fa-edit"></i>Edit Data Relawan</h3>
            <?php foreach($relawan as $b) : ?>
                <form method="post" action="<?php echo base_url(). 'admin/updaterelawan'?>">
                    <div class="form-group mb-2">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $b->nama ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Email</label>
                        <input type="hidden" name="id" class="form-control" value="<?php echo $b->id ?>">
                        <input type="text" name="email" class="form-control" value="<?php echo $b->email ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $b->alamat ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Nomor Telepon</label>
                        <input type="text" name="no_telepon" class="form-control" value="<?php echo $b->no_telepon ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label>Status</label>
                        <select class="form-control" name="status_relawan">
                            <option value="Calon Relawan">Calon Relawan</option>
                            <option value="Relawan Aktif">Relawan Aktif</option>
                        </select>
                    </div>
                    <button type="submit" class="button-blue"> Simpan </button>
                    <button class="button" onclick="window.history.go(-1)"> Kembali </button>
                </form>
            <?php endforeach ?>
        </div>
    </main>
</div>
            </div>