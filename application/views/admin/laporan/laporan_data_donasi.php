<div id="layoutSidenav_content">
    <main>
        <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Laporan Data Donatur
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                    <a href="<?= base_url('laporan/print_donasi'); ?>" class="btn btn-primary me-2 mb-3"><i class="fas fa-print"></i> Print </a>
                    <a href="<?= base_url('laporan/pdf_donasi'); ?>" class="btn btn-warning me-2 mb-3"><i class="far fa-file-pdf"></i> Download PDF</a>
                    <a href="<?= base_url('laporan/excel_donasi'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
                    <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAMA DONATUR</th>
                                <th>ALAMAT DONATUR</th>
                                <th>TELEPON DONATUR</th>
                                <th>JUMLAH DONASI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($detail as $psn) : ?>
                            <tr>
                                <td><?php echo $psn->id ?></td>
                                <td><?php echo $psn->nama?></td>
                                <td><?php echo $psn->alamat ?></td>
                                <td><?php echo $psn->no_telepon ?></td>
                                <td>Rp. <?php echo number_format($psn->paket_donasi, 0, ',', '.') ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </main>
</div>
</div>