<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3><center>Laporan Data Donatur BSI Foundation</center></h3>
        <br/>
        <table class="table-data">
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