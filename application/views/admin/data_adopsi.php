<div id="layoutSidenav_content">
    <main>
        <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Adopsi Hewan
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID ADOPSI</th>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>NOMOR TELEPON</th>
                                <th>NAMA HEWAN</th>
                                <th>ID SPECIES</th>
                                <th>TANGGAL ADOPSI</th>
                                <th>BATAS ADOPSI</th>
                                <th>HARGA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach ($adopsi as $m) : ?>
                            <tr>
                                <td><?php echo $m->id ?></td>
                                <td><?php echo $m->nama ?></td>
                                <td><?php echo $m->alamat ?></td>
                                <td><?php echo $m->no_telepon ?></td>
                                <td><?php echo $m->nama_hewan ?></td>
                                <td><?php echo $m->id_species ?></td>
                                <td><?php echo $m->tgl_adopsi ?></td>
                                <td><?php echo $m->batas_adopsi ?></td>
                                <td><?php echo $m->harga ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </main>
</div>
</div>