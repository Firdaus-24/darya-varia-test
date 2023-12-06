<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center mt-3 mb-3">
            <h3>MASTER KARYAWAN</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 mb-3">
            <button class="btn btn-primary" type="button" onclick="window.location='<?= base_url ?>/karyawan/create'">Tambah</button>
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
                                <a href="<?= base_url; ?>/karyawan/edit/<?= $row['id'] ?>" class="badge bg-info">Edit</a>
                                <a href="<?= base_url; ?>/karyawan/hapus/<?= $row['id'] ?>" class="badge bg-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                            </td>
                        </tr>
                    <?php $no++;
                    endforeach; ?>

                </tbody>
            </table>

        </div>
    </div>
</div>