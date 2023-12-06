<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Karyawan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php
                            Flasher::Message();
                            ?>
                        </div>
                    </div>
                    <form action="<?= base_url ?>/karyawan/storeKaryawan" method="post" onsubmit="return confirm('apa anda sudah yakin?')">
                        <div class="form-group mb-3">
                            <label for="batch">Batch</label>
                            <input type="text" class="form-control" id="batch" name="batch" maxlength="5" autocomplete="off" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nik">NIK</label>
                            <input type="number" class="form-control" id="nik" name="nik" autocomplete="off" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" maxlength="255" autocomplete="off" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nilai">Nilai</label>
                            <input type="number" class="form-control" id="nilai" name="nilai" min="1" max="100" autocomplete="off" required>
                        </div>
                        <button type="button" class="btn btn-danger" onclick="window.location='<?= base_url ?>/karyawan'">Kembali</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>