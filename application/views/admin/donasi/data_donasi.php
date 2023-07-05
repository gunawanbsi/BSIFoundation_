<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 pt-4 pb-4">
            <button type="button" class="button-blue" data-bs-toggle="modal" data-bs-target="#tambahPaketModal"><i class="fas fa-plus fa-sm"></i> Tambah Data Paket Donasi</button>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Donasi pada Konservasi BSI Foundation
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID DONASI</th>
                            <th>PAKET DONASI</th>
                            <th>PENJELASAN PAKET DONASI</th>
                            <th colspan="3">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($donasi as $b) : ?>
                        <tr>
                            <td><?php echo $b->id ?></td>
                            <td>Rp. <?php echo number_format($b->paket_donasi, 0, ',', '.') ?></td>
                            <td><?php echo $b->teks ?></td>
                            <td><?php echo anchor('admin/detailDonasi/' .$b->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
                        <?php endforeach; ?>
                    </tbody>
                </table>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="tambahPaketModal" tabindex="-1" aria-labelledby="tambahPaketModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahPaketModalLabel">Form Input Data Paket Donasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                <form action="<?php echo base_url(). 'admin/inputDonasi'?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Paket Donasi</label>
                        <input type="text" name="paket_donasi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Teks Donasi</label>
                        <input type="text" name="teks" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gambar Pendukung</label>
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