<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-3 ms-3 mb-5">
            <h3><i class="fas fa-edit"></i>Edit Data Species</h3>
            <?php foreach($species as $b) : ?>
                <form method="post" action="<?php echo base_url(). 'admin/updateSpecies'?>">
                    <div class="form-group mb-5">
                        <label>Nama Species</label>
                        <input type="hidden" name="id_species" class="form-control" value="<?php echo $b->id_species ?>">
                        <input type="text" name="species" class="form-control mt-3" value="<?php echo $b->species ?>">
                    </div>
                    <button type="submit" class="button-blue"> Simpan </button>
                    <button class="button" onclick="window.history.go(-1)"> Kembali </button>
                </form>
            <?php endforeach ?>
        </div>
    </main>
</div>