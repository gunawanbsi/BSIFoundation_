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
                            foreach ($member as $i) : ?>
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
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>