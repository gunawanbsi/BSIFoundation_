<div id="layoutSidenav_content">
    <main>
        <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Laporan Data Relawan
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                    <a href="<?= base_url('laporan/cetak_laporan_relawan'); ?>" class="btn btn-primary me-2 mb-3"><i class="fas fa-print"></i> Print </a>
                    <a href="<?= base_url('laporan/pdf_relawan'); ?>" class="btn btn-warning me-2 mb-3"><i class="far fa-file-pdf"></i> Download PDF</a>
                    <a href="<?= base_url('laporan/excel_relawan'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
                        <thead>
                            <tr>
                                <th>ID RELAWAN</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>ALAMAT</th>
                                <th>NOMOR TELEPON</th>
                                <th>TANGGAL LAHIR</th>
                                <th>STATUS</th>
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
                                <td><?php echo $m->tanggal_lahir ?></td>
                                <td><?php echo $m->status_relawan ?></td>
                                
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </main>
</div>
</div>