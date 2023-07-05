<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $judul ?></title>
    </head>
    <body>
        <style type="text/css">
            .table-data{
                width: 100%;
                border-collapse: ccollapse;
            }

            .table-data tr th,
            .table-data tr td{
                border: 1px solid black;
                font-size: 11pt;
                padding: 10px 10px 10px 10px;
            }
        </style>
        <h3><center>Laporan Data Hewan BSI Foundation</center></h3>
        <br/>
        <table class="table-data">
        <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA HEWAN</th>
                            <th>JENIS KELAMIN</th>
                            <th>ID SPECIES</th>
                            <th>TANGGAL LAHIR</th>
                            <th>STATUS ADOPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $a = 1;
                        foreach ($hewan as $b) : ?>
                        <tr>
                            <td><?php echo $a++ ?></td>
                            <td><?php echo $b->nama_hewan ?></td>
                            <td><?php echo $b->jenis_kelamin ?></td>
                            <td><?php echo $b->id_species ?></td>
                            <td><?php echo $b->tanggal_lahir ?></td>
                            <td><?php echo $b->status_adopsi ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
        </table>
    </body>
</html>