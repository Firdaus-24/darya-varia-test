<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center mb-3 mt-3">
            <h3>SUPERVISOR</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?php
            Flasher::Message();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Batch</th>
                        <th scope="col">Nik</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Aksi</th>
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
                            <td>
                                <a href="<?= base_url; ?>/supervisor/approve/<?= $row['id'] ?>" class="badge bg-warning" onclick="return confirm('approve data?');">Approve</a>
                                <a href="<?= base_url; ?>/supervisor/unapprove/<?= $row['id'] ?>" class="badge bg-danger" onclick="return confirm('reject data?');">Reject</a>
                            </td>
                        </tr>
                    <?php $no++;
                    endforeach; ?>

                </tbody>
            </table>

        </div>
    </div>
</div>