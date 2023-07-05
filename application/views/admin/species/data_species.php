<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 pt-4 pb-4">
            <button type="button" class="button-blue" data-bs-toggle="modal" data-bs-target="#tambahSpeciesModal"><i class="fas fa-plus fa-sm"></i> Tambah Data Species</button>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Species pada Konservasi BSI Foundation
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID SPECIES</th>
                            <th>NAMA SPECIES</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($species as $b) : ?>
                        <tr>
                            <td><?php echo $b->id_species ?></td>
                            <td><?php echo $b->species ?></td>
                            <td><?php echo anchor('admin/editSpecies/' .$b->id_species,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
                            <td><?php echo anchor('admin/hapusSpecies/' .$b->id_species,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="tambahSpeciesModal" tabindex="-1" aria-labelledby="tambahSpeciesModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahSpeciesModalLabel">Form Input Data Species</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                <form action="<?php echo base_url(). 'admin/inputSpecies'?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Species</label>
                        <input type="text" name="species" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>