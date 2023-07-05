<div id="layoutSidenav_content">
    <main>
        <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Laporan Data Hewan
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                    <a href="<?= base_url('laporan/print_hewan'); ?>" class="btn btn-primary me-2 mb-3"><i class="fas fa-print"></i> Print </a>
                    <a href="<?= base_url('laporan/pdf_hewan'); ?>" class="btn btn-warning me-2 mb-3"><i class="far fa-file-pdf"></i> Download PDF</a>
                    <a href="<?= base_url('laporan/excel_hewan'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA HEWAN</th>
                            <th>JENIS KELAMIN</th>
                            <th>ID SPECIES</th>
                            <th>TANGGAL LAHIR</th>
                            <th>STATUS ADOPSI</th>
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
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
        </div>
    </main>
</div>
</div>