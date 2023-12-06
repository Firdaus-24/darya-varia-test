<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Register
                </div>
                <div class="card-body">
                    <div class="col-sm-12">
                        <?php
                        Flasher::Message();
                        ?>
                    </div>
                    <form action="<?= base_url ?>/register/simpanUser" method="post">
                        <div class="form-group mb-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" autocomplete="off" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="register">Save</button>
                    </form>
                    <small>sudah punya akun <a href="./">Login</a></small>
                </div>
            </div>
        </div>
    </div>
</div>