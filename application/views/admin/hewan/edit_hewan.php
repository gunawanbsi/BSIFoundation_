<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-3 ms-3">
            <h3><i class="fas fa-edit"></i>Edit Data Hewan</h3>
            <?php foreach($hewan as $b) : ?>
                <form method="post" action="<?php echo base_url(). 'admin/updateHewan'?>">
                    <div class="form-group mb-2">
                        <label>Nama Hewan</label>
                        <input type="text" name="nama_hewan" class="form-control" value="<?php echo $b->nama_hewan ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Jenis Kelamin</label>
                        <input type="hidden" name="id" class="form-control" value="<?php echo $b->id ?>">
                        <select class="form-control" name="jenis_kelamin">
                            <option><?php echo $b->jenis_kelamin ?></option>
                            <option value="Jantan">Jantan</option>
                            <option value="Betina">Betina</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label>ID Species</label>
                        <input type="text" name="id_species" class="form-control" value="<?php echo $b->id_species ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Tanggal Lahir</label>
                        <input type="text" name="tanggal_lahir" class="form-control" value="<?php echo $b->tanggal_lahir ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label>Status Adopsi</label>
                        <select class="form-control" name="status_adopsi">
                            <option><?php echo $b->status_adopsi ?></option>
                            <option value="SUDAH">SUDAH</option>
                            <option value="BELUM">BELUM</option>
                        </select>
                    </div>
                    <button type="submit" class="button-blue"> Simpan </button>
                    <button class="button" onclick="window.history.go(-1)"> Kembali </button>
                </form>
            <?php endforeach ?>
        </div>
    </main>
</div>