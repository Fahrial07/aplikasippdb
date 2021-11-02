<?php

class M_welcome extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function register($register)
    {
        $this->db->insert('user', $register);
    }

    public function Login($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('user')->row_array();
    }

    public function log($log)
    {
        $this->db->insert('aktivitas', $log);
    }

    public function gel()
    {
        date_default_timezone_set("Asia/Jakarta");
        $this->db->where('is_active_gel', 1);
        return $this->db->get('gelombang')->result();
    }
}
