<?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=$title.xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    ?>

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

    <h3><center>Laporan Data Buku Perpustakaan Online</center></h3>
    <br/>

    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Tgl Pinjam</th>
                <th>Tgl Kembali</th>
                <th>Tgl Pengembalian</th>
                <th>Total Denda</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $no = 1;
        foreach($laporan as $l){
        ?>
        <tr>
            <td scope="row"><?= $no++; ?></td>
            <td><?= $l['nama']; ?></td>
            <td><?= $l['judul_buku']; ?></td>
            <td><?= $l['tgl_pinjam']; ?></td>
            <td><?= $l['tgl_kembali']; ?></td>
            <td><?= $l['tgl_pengembalian']; ?></td>
            <td><?= $l['total_denda']; ?></td>
            <td><?= $l['status']; ?></td>
        </tr>
        <?php
    }
    ?>

        </tbody>

   

</table>