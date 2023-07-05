<!DOCTYPE html>
<html>
<head>
    <title> <?php echo $judul ?> </title>
</head>
<body>
    <style type="text/css">
    .table-data{
    width: 100%;
    border-collapse: collapse;
    }
    .table-data tr th,
    .table-data tr td{
    border:1px solid black;
    font-size: 11pt;
    font-family:Verdana;
    padding: 10px 10px 10px 10px;
    }
    h3{
    font-family:Verdana;
    }
    </style>
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
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>