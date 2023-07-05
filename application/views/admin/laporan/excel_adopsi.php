<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3><center>Laporan Data Adopsi BSI Foundation</center></h3>
        <br/>
        <table class="table-data">
        <thead>
                            <tr>
                                <th>ID ADOPSI</th>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>NOMOR TELEPON</th>
                                <th>NAMA HEWAN</th>
                                <th>ID SPECIES</th>
                                <th>TANGGAL ADOPSI</th>
                                <th>BATAS ADOPSI</th>
                                <th>HARGA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach ($adopsi as $m) : ?>
                            <tr>
                                <td><?php echo $m->id ?></td>
                                <td><?php echo $m->nama ?></td>
                                <td><?php echo $m->alamat ?></td>
                                <td><?php echo $m->no_telepon ?></td>
                                <td><?php echo $m->nama_hewan ?></td>
                                <td><?php echo $m->id_species ?></td>
                                <td><?php echo $m->tgl_adopsi ?></td>
                                <td><?php echo $m->batas_adopsi ?></td>
                                <td><?php echo $m->harga ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
        </table>