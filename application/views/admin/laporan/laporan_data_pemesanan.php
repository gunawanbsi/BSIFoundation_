<div id="layoutSidenav_content">
    <main>
        <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Laporan Data Pemesanan
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                    <a href="<?= base_url('laporan/print_pemesanan'); ?>" class="btn btn-primary me-2 mb-3"><i class="fas fa-print"></i> Print </a>
                    <a href="<?= base_url('laporan/pdf_pemesanan'); ?>" class="btn btn-warning me-2 mb-3"><i class="far fa-file-pdf"></i> Download PDF</a>
                    <a href="<?= base_url('laporan/excel_pemesanan'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
                         <thead>
                            <tr>
                                <th>#</th>
                                <th>NAMA PEMESAN</th>
                                <th>ALAMAT</th>
                                <th>TANGGAL PESAN</th>
                                <th>ID INVOICE</th>
                                <th>BARANG</th>
                                <th>HARGA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $a = 1;
                            foreach ($pesanan as $i) : ?>
                            <tr>
                                <td><?php echo $a++; ?></td>
                                <td><?php echo $i->nama ?></td>
                                <td><?php echo $i->alamat ?></td>
                                <td><?php echo $i->tgl_pesan ?></td>
                                <td><?php echo $i->id_invoice ?></td>
                                <td><?php echo $i->nama_barang ?></td>
                                <td>Rp. <?php echo number_format($i->harga, 0, ',', '.') ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </main>
</div>
</div>