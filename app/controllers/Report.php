<?php

class Report extends Controller
{
    public function index()
    {
        $data['title'] = "Report";
        $data['karyawan'] = $this->model('KaryawanModel')->getKaryawanApprove();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('report/index', $data);
        $this->view('templates/footer');
    }
    public function export()
    {
        $data['title'] = "export";
        $data['karyawan'] = $this->model('KaryawanModel')->getKaryawanApprove();
        $this->view('templates/header', $data);
        $this->view('report/export', $data);
        $this->view('templates/footer');
    }
}
