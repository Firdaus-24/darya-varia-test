<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Login';
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }

    public function prosesLogin()
    {

        if ($row = $this->model('LoginModel')->checkLogin($_POST) > 0) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['session_login'] = 'sudah_login';


            header('location: ' . base_url . '/dashboard');
        } else {
            Flasher::setMessage('Username / Password', 'salah.', 'danger');
            header('location: ' . base_url . '/home');
            exit;
        }
    }
}
