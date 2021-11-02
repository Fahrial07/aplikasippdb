<?php

class M_auth extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function biodata($biodata)
    {
        $this->db->insert('biodata_santri', $biodata);
    }

    public function orangtua($biodata_orangtua)
    {
        $this->db->insert('biodata_orangtua', $biodata_orangtua);
    }

    public function wali($bio_wali)
    {
        $this->db->insert('biodata_wali', $bio_wali);
    }
    public function sekolah($sekolah)
    {
        $this->db->insert('sekolah_asal', $sekolah);
    }

    //update

    public function Ubiodata($Ubiodata)
    {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->set($Ubiodata);
        $this->db->update('biodata_santri');
    }

    public function Uorangtua($Ubiodata_orangtua)
    {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->set($Ubiodata_orangtua);
        $this->db->update('biodata_orangtua');
    }

    public function Uwali($Ubio_wali)
    {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->set($Ubio_wali);
        $this->db->update('biodata_wali');
    }
    public function Usekolah($Usekolah)
    {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->set($Usekolah);
        $this->db->update('sekolah_asal');
    }

    //get ses

    public function getB()
    {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        return $this->db->get('biodata_santri')->row_array();
    }

    public function getBO()
    {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        return $this->db->get('biodata_orangtua')->row_array();
    }

    public function getBW()
    {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        return $this->db->get('biodata_wali')->row_array();
    }

    public function getSA()
    {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        return $this->db->get('sekolah_asal')->row_array();
    }

    public function getUsession()
    {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        return $this->db->get('user')->row_array();
    }

    public function userUpdate($data)
    {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->set($data);
        $this->db->update('user');
    }

    public function updatePassword($dp)
    {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->set($dp);
        $this->db->update('user');
    }

    public function biodatapdf()
    {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        return $this->db->get('biodata_santri')->result();
    }
    public function orangtuapdf()
    {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        return $this->db->get('biodata_orangtua')->result();
    }
    public function walipdf()
    {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        return $this->db->get('biodata_wali')->result();
    }
    public function asalpdf()
    {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        return $this->db->get('sekolah_asal')->result();
    }

    public function ceklulus()
    {
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->where('role_id', 2);
        return $this->db->get('user')->result();
    }
}
