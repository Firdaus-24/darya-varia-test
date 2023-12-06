<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mt-3 mb-3">
            <h3>REPORT KARYAWAN APPROVE</h3>
        </div>
        <div class="row">
            <div class="col-md-2 mb-3">
                <a target="_blank" href="<?= base_url ?>/report/export" class="btn btn-primary">EXPORT KE EXCEL</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Batch</th>
                            <th scope="col">Nik</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
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

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>