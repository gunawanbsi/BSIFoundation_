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