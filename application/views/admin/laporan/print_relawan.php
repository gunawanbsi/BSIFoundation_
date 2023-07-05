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
    <h3><center>Laporan Data Relawan BSI Foundation</center></h3>
    <br/>
    <table class="table-data">
    <thead>
                            <tr>
                                <th>ID RELAWAN</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>ALAMAT</th>
                                <th>NOMOR TELEPON</th>
                                <th>TANGGAL LAHIR</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach ($relawan as $m) : ?>
                            <tr>
                                <td><?php echo $m->id ?></td>
                                <td><?php echo $m->nama ?></td>
                                <td><?php echo $m->email ?></td>
                                <td><?php echo $m->alamat ?></td>
                                <td><?php echo $m->no_telepon ?></td>
                                <td><?php echo $m->tanggal_lahir ?></td>
                                <td><?php echo $m->status_relawan ?></td>
                                
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
    </table>
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>