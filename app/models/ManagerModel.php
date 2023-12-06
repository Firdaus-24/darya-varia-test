<?php
class ManagerModel
{
    private $db;
    private $table = 'karyawan';
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKaryawan()
    {
        $this->db->query("SELECT * FROM Karyawan where app_1 = 'Y' and app_2 = '' order by batch,nama");
        return $this->db->resultSet();
    }

    public function approve($id)
    {
        $this->db->query('UPDATE ' . $this->table . ' SET app_2 = "Y" WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function unapprove($id)
    {
        $this->db->query('UPDATE ' . $this->table . ' SET app_2 = "N" WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
