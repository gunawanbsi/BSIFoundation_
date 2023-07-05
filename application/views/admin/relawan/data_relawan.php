<div id="layoutSidenav_content">
    <main>
        <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Relawan
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID RELAWAN</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>ALAMAT</th>
                                <th>NOMOR TELEPON</th>
                                <th>STATUS</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach ($relawan as $m) : ?>
                            <tr>
                                <td><?php echo $m->id ?></td>
                                <td><?php echo $m->nama ?></td>
                                <td><?php echo $m->email ?></td>
                                <td><?php echo $m->alamat ?></td>
                                <td><?php echo $m->no_telepon ?></td>
                                <td><?php echo $m->status_relawan ?></td>
                                <?php if ($m->status_relawan == "Calon Relawan") { ?>
                                    <td><?php echo anchor('admin/editRelawan/' .$m->id,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
                                    <td><?php echo anchor('admin/hapusRelawan/' .$m->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
                                <?php } else {?>
                                    <td><?php echo anchor('admin/detailRelawan/' .$m->id,'<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>')?></td>
                                    <td><?php echo anchor('admin/hapusRelawan/' .$m->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
                                    <?php } ?>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </main>
</div>
</div>