<div id="layoutSidenav_content">
    <main>
        <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Laporan Data User
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                    <a href="<?= base_url('laporan/print_user'); ?>" class="btn btn-primary me-2 mb-3"><i class="fas fa-print"></i> Print </a>
                    <a href="<?= base_url('laporan/pdf_user'); ?>" class="btn btn-warning me-2 mb-3"><i class="far fa-file-pdf"></i> Download PDF</a>
                    <a href="<?= base_url('laporan/excel_user'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
                         <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>ALAMAT</th>
                                <th>NOMOR TELEPON</th>
                                <th>LAMA AKTIF</th>
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
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </main>
</div>
</div>