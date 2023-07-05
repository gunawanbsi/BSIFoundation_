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
        <h3><center>Laporan Data Pemesanan Barang BSI Foundation</center></h3>
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
    </body>
</html>