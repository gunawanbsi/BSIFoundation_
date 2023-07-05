<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3><center>Laporan Data User BSI Foundation</center></h3>
        <br/>
        <table class="table-data">
         <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>ALAMAT</th>
                                <th>NOMOR TELEPON</th>
                                <th>LAMA AKTIF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach ($user as $i) : ?>
                            <tr>
                                <td><?php echo $i->id ?></td>
                                <td><?php echo $i->nama ?></td>
                                <td><?php echo $i->email ?></td>
                                <td><?php echo $i->alamat ?></td>
                                <td><?php echo $i->no_telepon ?></td>
                                <td><?php echo date('d F Y', $i->tanggal_input); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
        </table>