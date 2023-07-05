<div id="layoutSidenav_content">
    <main>
        <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Detail Donasi <div class="btn btn-sm btn-success ms-2">Paket Donasi : <?php echo $donasi->id ?></div>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAMA DONATUR</th>
                                <th>ALAMAT DONATUR</th>
                                <th>NOMOR TELEPON DONATUR</th>
                                <th>SUB-TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($detail as $psn) :
                                $subtotal = $donasi->paket_donasi; ?>
                            <tr>
                                <td><?php echo $psn->id ?></td>
                                <td><?php echo $psn->nama?></td>
                                <td><?php echo $psn->alamat ?></td>
                                <td><?php echo $psn->no_telepon ?></td>
                                <td>Rp. <?php echo number_format($subtotal, 0, ',', '.') ?></td>
                            </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="5"><a href="<?php echo base_url('admin/dataDonasi') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a></td>
                        </tbody>
                    </table>
                </div>
        </div>
    </main>
</div>
</div>