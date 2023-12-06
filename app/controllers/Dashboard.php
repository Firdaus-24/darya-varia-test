<?php

class Dashboard extends Controller
{
    public function __construct()
    {
        if ($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
            header('location: ' . base_url . '/home');
            exit;
        }
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['karyawan'] = $this->model('KaryawanModel')->getApproveKaryawan();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }
}
