<?php

class KaryawanModel extends Controller
{
    private $db;
    private $table = 'karyawan';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKaryawan()
    {
        $this->db->query("SELECT * FROM Karyawan order by batch,nama ASC");
        return $this->db->resultSet();
    }

    public function storeKaryawan($data)
    {
        $ckresult = "SELECT * FROM karyawan WHERE batch = :batch and nik = :nik";
        $this->db->query($ckresult);
        $this->db->bind('batch', $data['batch']);
        $this->db->bind('nik', $data['nik']);

        $this->db->execute();
        $ck = $this->db->rowCount();

        if ($ck > 0) {
            Flasher::setMessage('error', 'data sudah terdaftar.', 'danger');
            header('location: ' . base_url . '/karyawan/create');
            exit;
        }
        $query = "INSERT INTO karyawan (batch, nik, nama, nilai, app_1, app_2) VALUES(:batch, :nik, :nama, :nilai, :app_1, :app_2 )";
        $this->db->query($query);
        $this->db->bind('batch', $data['batch']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nilai', $data['nilai']);
        $this->db->bind('app_1', '');
        $this->db->bind('app_2', '');
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function getKaryawanId($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function updateKaryawan($data)
    {
        $ckresult = "SELECT * FROM karyawan WHERE batch = :batch and nik = :nik and id != :id";
        $this->db->query($ckresult);
        $this->db->bind('id', $data['id']);
        $this->db->bind('batch', $data['batch']);
        $this->db->bind('nik', $data['nik']);

        $this->db->execute();
        $ck = $this->db->rowCount();

        if ($ck > 0) {
            Flasher::setMessage('error', 'data sudah terdaftar.', 'danger');
            header('location: ' . base_url . '/karyawan/edit/' . $data['id']);
            exit;
        }
        $query = "UPDATE karyawan SET batch = :batch, nik = :nik, nama = :nama, nilai = :nilai where id = :id ";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('batch', $data['batch']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nilai', $data['nilai']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteKaryawan($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getApproveKaryawan()
    {
        $this->db->query("SELECT * FROM Karyawan where app_1 = 'Y' and app_2 = 'Y'");
        return $this->db->resultSet();
    }

    public function getKaryawanApprove()
    {
        $this->db->query("SELECT * FROM Karyawan WHERE app_1 = 'Y' and app_1 = 'Y' order by batch,nama ASC");
        return $this->db->resultSet();
    }
}
