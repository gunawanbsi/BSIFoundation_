<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-3 ms-3">
            <h3><i class="fas fa-edit"></i>Edit Data Barang</h3>
            <?php foreach($barang as $b) : ?>
                <form method="post" action="<?php echo base_url(). 'admin/updatebarang'?>">
                    <div class="form-group mb-2">
                        <label>Nama Barang</label>
                        <input type="text" name="barang" class="form-control" value="<?php echo $b->barang ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Keterangan</label>
                        <input type="hidden" name="id" class="form-control" value="<?php echo $b->id ?>">
                        <input type="text" name="keterangan" class="form-control" value="<?php echo $b->keterangan ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori">
                            <option> <?php echo $b->kategori ?> </option>
                            <option>Aksesoris</option>
                            <option>Pakaian</option>
                            <option>Barang Bermanfaat</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" value="<?php echo $b->harga ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control" value="<?php echo $b->stok ?>">
                    </div>
                    <button type="submit" class="button-blue"> Simpan </button>
                    <button class="button" onclick="window.history.go(-1)"> Kembali </button>
                </form>
            <?php endforeach ?>
        </div>
    </main>
</div>