<?php

class UserModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahUser($data)
    {
        $query = "INSERT INTO users (email,password,is_active) VALUES(:email,:password,1)";
        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', md5($data['password']));
        $this->db->execute();

        return $this->db->rowCount();
    }
}
