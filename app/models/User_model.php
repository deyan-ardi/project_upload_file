<?php
class User_model
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function uploadFile($foto)
    {
        // echo var_dump($data);
        $query = "INSERT INTO upload (up_foto) VALUES 
        (:up_foto)";
        $this->db->query($query);
        $this->db->bind('up_foto', $foto);
        $this->db->execute();
        return $this->db->rowCount();
    }
}