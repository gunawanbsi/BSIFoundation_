<div id="layoutSidenav_content">
    <main>
        <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data User BSI Foundation
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>ALAMAT</th>
                                <th>NOMOR TELEPON</th>
                                <th>LAMA AKTIF</th>
                                <th colspan="2">AKSI</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach ($member as $i) : ?>
                            <tr>
                                <td><?php echo $i->id ?></td>
                                <td><?php echo $i->nama ?></td>
                                <td><?php echo $i->email ?></td>
                                <td><?php echo $i->alamat ?></td>
                                <td><?php echo $i->no_telepon ?></td>
                                <td><?php echo date('d F Y', $i->tanggal_input); ?></td>
                                <td><?php echo anchor('admin/detailUser/' .$i->id,'<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>')?></td>
                                <td><?php echo anchor('admin/hapusUser/' .$i->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </main>
</div>
</div>