<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 pt-4 pb-4">
            <button type="button" class="button-blue" data-bs-toggle="modal" data-bs-target="#tambahHewanModal"><i class="fas fa-plus fa-sm"></i> Tambah Data Hewan</button>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Hewan pada Konservasi BSI Foundation
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA HEWAN</th>
                            <th>JENIS KELAMIN</th>
                            <th>ID SPECIES</th>
                            <th>TANGGAL LAHIR</th>
                            <th>STATUS ADOPSI</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $a = 1;
                        foreach ($hewan as $b) : ?>
                        <tr>
                            <td><?php echo $a++ ?></td>
                            <td><?php echo $b->nama_hewan ?></td>
                            <td><?php echo $b->jenis_kelamin ?></td>
                            <td><?php echo $b->id_species ?></td>
                            <td><?php echo $b->tanggal_lahir ?></td>
                            <td><?php echo $b->status_adopsi ?></td>
                            <td><?php echo anchor('admin/detailHewan/' .$b->id,'<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>')?></td>
                            <td><?php echo anchor('admin/editHewan/' .$b->id,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
                            <td><?php echo anchor('admin/hapusHewan/' .$b->id,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="tambahHewanModal" tabindex="-1" aria-labelledby="tambahHewanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahHewanModalLabel">Form Input Data Hewan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                <form action="<?php echo base_url(). 'admin/inputHewan'?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Hewan</label>
                        <input type="text" name="nama_hewan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin">
                            <option>Jantan</option>
                            <option>Betina</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>ID Species</label>
                        <select class="form-control" name="id_species">
                            <option>1 - Orangutan</option>
                            <option>2 - Komodo</option>
                            <option>3 - Badak Bercula Satu</option>
                            <option>4 - Harimau Sumatera</option>
                            <option>5 - Gajah Sumatera</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" name="tanggal_lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status Adopsi</label>
                        <select class="form-control" name="status_adopsi">
                            <option>BELUM</option>
                            <option>SUDAH</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Foto Hewan</label>
                        <input type="file" name="image" class="form-control">
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