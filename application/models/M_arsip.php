<?php

class M_arsip extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //datatbles server side query
    var $table = 'user'; //nama tabel dari database
    var $column_order = array('user.id_user', 'gelombang.id_gel', 'gelombang.tahun', 'gelombang.gelombang', 'gelombang.is_active_gel ', 'user.status_daftar', 'user.nama', 'user.no_kk', 'user.username', 'user.role_id', 'user.is_active', 'user.tgl_daftar', 'user.tgl_update'); //Sesuaikan dengan field
    var $column_search = array('user.nama', 'user.status_daftar', 'user.username', 'user.no_kk'); //field yang diizin untuk pencarian 
    var $order = array('user.id_user' => 'DESC'); // default order 
    var $where = array('user.role_id', '2');

    private function _get_datatables_query()
    {

        $this->db->from($this->table);

        $i = 0;

        foreach ($this->column_search as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                if ($i === 0) // looping awal
                {

                    $this->db->where('user.role_id', '2');
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->where('user.role_id', '2');
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
            $this->db->where('user.role_id', '2');
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $this->db->join('gelombang', 'gelombang.id_gel = user.id_gel');
        $this->db->where('user.role_id', '2');
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->where('user.role_id', '2');
        $this->db->join('gelombang', 'gelombang.id_gel = user.id_gel');
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}
