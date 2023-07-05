<div id="layoutSidenav_content">
    <main>
        <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Invoice Pemesanan Produk
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID INVOICE</th>
                                <th>NAMA PEMESAN</th>
                                <th>ALAMAT PENGIRIMAN</th>
                                <th>TANGGAL PEMESANAN</th>
                                <th>BATAS PEMBAYARAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach ($invoice as $i) : ?>
                            <tr>
                                <td><?php echo $i->id ?></td>
                                <td><?php echo $i->nama ?></td>
                                <td><?php echo $i->alamat ?></td>
                                <td><?php echo $i->tgl_pesan ?></td>
                                <td><?php echo $i->batas_bayar ?></td>
                                <td><?php echo anchor('admin/detailInvoice/' .$i->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </main>
</div>
</div>