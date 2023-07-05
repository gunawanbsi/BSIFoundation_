<div id="layoutSidenav_content">
    <main>
        <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Detail Pesanan <div class="btn btn-sm btn-success ms-2">No. Invoice : <?php echo $invoice->id ?></div>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID BARANG</th>
                                <th>NAMA PRODUK</th>
                                <th>JUMLAH PESANAN</th>
                                <th>HARGA SATUAN</th>
                                <th>SUB-TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            foreach ($pesanan as $psn) :
                                $subtotal = $psn->jumlah * $psn->harga;
                                $total += $subtotal ?>
                            <tr>
                                <td><?php echo $psn->id_barang ?></td>
                                <td><?php echo $psn->nama_barang ?></td>
                                <td><?php echo $psn->jumlah ?></td>
                                <td>Rp. <?php echo number_format($psn->harga, 0, ',', '.') ?></td>
                                <td>Rp. <?php echo number_format($subtotal, 0, ',', '.') ?></td>
                            </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total Harga</td>
                                <td>Rp. <?php echo number_format($total, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <td colspan="5"><a href="<?php echo base_url('admin/invoice') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a></td>
                        </tbody>
                    </table>
                </div>
        </div>
    </main>
</div>
</div>