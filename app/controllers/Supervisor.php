<?php

class Supervisor extends Controller
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
        $data['title'] = "Supervisor";
        $data['karyawan'] = $this->model('SupervisorModel')->getAllKaryawan();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('supervisor/index', $data);
        $this->view('templates/footer', $data);
    }

    public function approve($id)
    {
        if ($this->model('SupervisorModel')->approve($id) > 0) {
            Flasher::setMessage('Berhasil', 'approve', 'success');
            header('location: ' . base_url . '/supervisor');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'approve', 'danger');
            header('location: ' . base_url . '/supervisor');
            exit;
        }
    }
    public function unapprove($id)
    {
        if ($this->model('SupervisorModel')->unapprove($id) > 0) {
            Flasher::setMessage('Berhasil', 'reject approve', 'success');
            header('location: ' . base_url . '/supervisor');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'reject approve', 'danger');
            header('location: ' . base_url . '/supervisor');
            exit;
        }
    }
}
