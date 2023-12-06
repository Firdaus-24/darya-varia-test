<?php

class Karyawan extends Controller
{
    public function __construct()
    {
        if ($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
            header('location: ' . base_url . '/');
            exit;
        }
    }

    public function index()
    {
        $data['title'] = "Karyawan";
        $data['karyawan'] = $this->model('KaryawanModel')->getAllKaryawan();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('karyawan/index', $data);
        $this->view('templates/footer');
    }
    public function create()
    {
        $data['title'] = "Form Karyawan";
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('karyawan/create', $data);
        $this->view('templates/footer', $data);
    }

    public function storeKaryawan()
    {
        if ($this->model('KaryawanModel')->storeKaryawan($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/karyawan/create');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/karyawan/create');
            exit;
        }
    }

    public function edit($id)
    {
        $data['title'] = "Update Karyawan";
        $data["karyawan"] = $this->model('KaryawanModel')->getKaryawanId($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('karyawan/edit', $data);
        $this->view('templates/footer', $data);
    }

    public function update($id)
    {

        if ($this->model('KaryawanModel')->updateKaryawan($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . base_url . '/karyawan/edit/' . $id);
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/karyawan/edit/' . $id);
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('KaryawanModel')->deleteKaryawan($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/karyawan');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/karyawan');
            exit;
        }
    }
}
