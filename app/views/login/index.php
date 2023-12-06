<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php
                            Flasher::Message();
                            ?>
                        </div>
                    </div>
                    <form action="<?= base_url; ?>/home/prosesLogin" method="post">
                        <div class="form-group mb-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </form>
                    <small>balum punya akun? <a href="<?= base_url ?>/register">daftar</a></small>
                </div>
            </div>
        </div>
    </div>
</div>