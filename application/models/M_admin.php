<?php

class M_admin extends CI_Model
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
                    $this->db->where('gelombang.is_active_gel', 1);
                    $this->db->where('user.role_id', '2');
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->where('gelombang.is_active_gel', 1);
                    $this->db->where('user.role_id', '2');
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i)
                    $this->db->group_end();
                $this->db->where('gelombang.is_active_gel', 1);
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
        $this->db->where('gelombang.is_active_gel', 1);
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
        $this->db->where('gelombang.is_active_gel', 1);
        $this->db->where('user.role_id', '2');
        $this->db->join('gelombang', 'gelombang.id_gel = user.id_gel');
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function isactive($data, $id)
    {
        $this->db->where('id_user', $id);
        $this->db->set($data);
        $this->db->update('user');
    }

    public function deleteaktivitas($id)
    {

        $id_ac = $id;

        for ($i = 0; $i < count($id_ac); $i++) {
            $this->db->where('id', $id[$i]);
            $this->db->delete('aktivitas');
        }
    }

    public function inGelombang($data)
    {
        $this->db->insert('gelombang', $data);
    }

    public function deleteGelombang($id)
    {

        $gel = $id;
        //cek perulanagn untuk mendelete data masal
        for ($a = 0; $a < count($gel); $a++) {
            $this->db->where('is_active_gel', 0);
            $this->db->where('id_gel', $id[$a]);
            $this->db->delete('gelombang');
        }
    }

    public function is_Active($data, $id)
    {
        $this->db->where('id_gel', $id);
        $this->db->set($data);
        $this->db->update('gelombang');
    }

    public function dftst($data, $id)
    {
        $this->db->where('id_user', $id);
        $this->db->set($data);
        $this->db->update('user');
    }

    public function updateGelombang($data, $id)
    {
        $this->db->where('id_gel', $id);
        $this->db->set($data);
        $this->db->update('gelombang');
    }

    public function aktiveakun($data, $id)
    {
        $this->db->where('id_user', $id);
        $this->db->set($data);
        $this->db->update('user');
    }

    public function Uakun($data, $id)
    {
        $this->db->where('id_user', $id);
        $this->db->set($data);
        $this->db->update('user');
    }

    public function publish($data, $id)
    {
        $this->db->where('id_gel', $id);
        $this->db->set($data);
        $this->db->update('gelombang');
    }

    public function getGelombang()
    {
        $this->db->order_by('id_gel', 'DESC');
        $this->db->where('publish', 1);
        return $this->db->get('gelombang')->result();
    }
    public function biodatapdf($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('biodata_santri')->result();
    }
    public function orangtuapdf($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('biodata_orangtua')->result();
    }
    public function walipdf($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('biodata_wali')->result();
    }
    public function asalpdf($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('sekolah_asal')->result();
    }

    public function tentang($data)
    {
        $this->db->insert('tentang', $data);
    }

    public function tt($data, $id)
    {
        $this->db->where('id_tentang', $id);
        $this->db->set($data);
        $this->db->update('tentang');
    }

    public function deleteT($it)
    {
        $id = $it;
        for ($i = 0; $i < count($it); $i++) {
            $this->db->where($it[$id]);
            $this->db->delete('tentang');
        }
    }

    public function Utentang($data, $id)
    {
        $this->db->where('id_tentang', $id);
        $this->db->set($data);
        $this->db->update('tentang');
    }

    public function alur($data)
    {
        $this->db->insert('alur_ppdb', $data);
    }

    public function alur_ac($data, $id)
    {
        $this->db->where('id_alur', $id);
        $this->db->set($data);
        $this->db->update('alur_ppdb');
    }

    public function edit_alurppdb($data, $id)
    {
        $this->db->where('id_alur', $id);
        $this->db->set($data);
        $this->db->update('alur_ppdb');
    }

    public function getDGelombang()
    {
        $this->db->where('is_active_gel', 1);
        return $this->db->get('gelombang')->result();
    }
    public function GetTentang()
    {
        $this->db->where('is_active', 1);
        return $this->db->get('tentang')->result();;
    }

    public function getAlur()
    {
        $this->db->where('is_active', 1);
        return $this->db->get('alur_ppdb')->result();
    }
}
