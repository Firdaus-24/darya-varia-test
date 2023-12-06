<?php

class Manager extends Controller
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
        $data['title'] = "Manager";
        $data['karyawan'] = $this->model('ManagerModel')->getAllKaryawan();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('manager/index', $data);
        $this->view('templates/footer', $data);
    }

    public function approve($id)
    {
        if ($this->model('ManagerModel')->approve($id) > 0) {
            Flasher::setMessage('Berhasil', 'approve', 'success');
            header('location: ' . base_url . '/manager');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'approve', 'danger');
            header('location: ' . base_url . '/manager');
            exit;
        }
    }
    public function unapprove($id)
    {
        if ($this->model('ManagerModel')->unapprove($id) > 0) {
            Flasher::setMessage('Berhasil', 'reject approve', 'success');
            header('location: ' . base_url . '/manager');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'reject approve', 'danger');
            header('location: ' . base_url . '/manager');
            exit;
        }
    }
}
