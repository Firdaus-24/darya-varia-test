<?php

class Register extends Controller
{

    public function index()
    {
        $data['title'] = "register";
        $this->view('templates/header', $data);
        $this->view('register/index', $data);
        $this->view('templates/footer');
    }
    public function simpanUser()
    {
        if ($this->model('UserModel')->tambahUser($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/register');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/register');
            exit;
        }
    }
}
