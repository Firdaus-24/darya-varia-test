<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url ?>/dashboard">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= base_url ?>/karyawan">Karyawan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= base_url ?>/supervisor">Supervisor </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= base_url ?>/manager">Manager</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= base_url ?>/report">Report</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link d-flex justify-end ms-auto" aria-current="page" href="<?= base_url ?>/logout">Logout</a>
        </li>
      </ul>
    </div>
  </div>

</nav>