<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 pt-4 pb-4">
            <button type="button" class="button-blue" data-bs-toggle="modal" data-bs-target="#tambahBarangModal"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Barang pada Toko BSI Foundation
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA BARANG</th>
                            <th>KETERANGAN</th>
                            <th>KATEGORI</th>
                            <th>HARGA</th>
                            <th>STOK</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $a = 1;
                        foreach ($barang as $b) : ?>
                        <tr>
                            <td><?php echo $a++ ?></td>
                            <td><?php echo $b->barang ?></td>
                            <td><?php echo $b->keterangan ?></td>
                            <td><?php echo $b->kategori ?></td>
                            <td><?php echo $b->harga ?></td>
                            <td><?php echo $b->stok ?></td>
                            <td><?php echo anchor('admin/detailBarang/' .$b->id,'<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>')?></td>
                            <td><?php echo anchor('admin/editbarang/' .$b->id,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
                            <td><?php echo anchor('admin/hapusbarang/' .$b->id,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="tambahBarangModal" tabindex="-1" aria-labelledby="tambahBarangModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahBarangModalLabel">Form Input Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                <form action="<?php echo base_url(). 'admin/input_barang'?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="barang" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori">
                            <option>Aksesoris</option>
                            <option>Pakaian</option>
                            <option>Barang Bermanfaat</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gambar Produk</label>
                        <input type="file" name="gambar" class="form-control">
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