<style type="text/css">
    body {
        font-family: sans-serif;
    }

    table {
        margin: 20px auto;
        border-collapse: collapse;
    }

    table th,
    table td {
        border: 1px solid #3c3c3c;
        padding: 3px 8px;

    }

    a {
        background: blue;
        color: #fff;
        padding: 8px 10px;
        text-decoration: none;
        border-radius: 2px;
    }
</style>

<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data karyawan.xls");
?>

<center>
    <h3>DATA KARYAWAN APPROVE</h3>
</center>

<table border="1">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Batch</th>
        <th scope="col">Nik</th>
        <th scope="col">Nama</th>
        <th scope="col">Nilai</th>
    </tr>
    <?php $no = 1; ?>
    <?php foreach ($data['karyawan'] as $row) : ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row['batch']; ?></td>
            <td><?= $row['nik']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['nilai']; ?></td>

        </tr>
    <?php $no++;
    endforeach; ?>

</table>