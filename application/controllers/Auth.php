<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        cek_Login();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper('url');
        $this->load->model('M_auth');
        $this->load->model('M_welcome');
        date_default_timezone_set('Asia/Jakarta');
        // $this->load->helper('login_helper');
    }

    public function index()
    {
        error_reporting(0);


        $bios = $this->M_auth->getB();
        $bioo =  $this->M_auth->getBO();
        $biow = $this->M_auth->getBW();
        $sa = $this->M_auth->getSA();
        if ($this->session->userdata('id_user') == $bios['id_user'] || $bios['id_user'] != null) {
            $get = array(
                'id_biodata' => $bios['id_biodata'],
                'buser' => $bios['id_user'],
                //biodata orangtua
                'bouser' => $bioo['id_user'],
                //biodata wali
                'wiuser' => $biow['id_user'],
                //sekolah_asal
                'saiuser' => $sa['id_user'],
            );
            $this->session->set_userdata($get);
            $data = array(
                'title' => 'Dashboard PPDB ONLINE',
                'lulus' => $this->M_auth->ceklulus()
            );
            $this->load->view('layout/header.php', $data);
            $this->load->view('content/dashboard.php', $data);
            $this->load->view('layout/footer.php');
        } else {
            $data = array(
                'title' => 'Dashboard PPDB ONLINE',
                'lulus' => $this->M_auth->ceklulus()
            );
            $this->load->view('layout/header.php', $data);
            $this->load->view('content/dashboard.php', $data);
            $this->load->view('layout/footer.php');
        }
    }

    public function formulir()
    {

        error_reporting(0);

        $bios = $this->M_auth->getB();
        $bioo =  $this->M_auth->getBO();
        $biow = $this->M_auth->getBW();
        $sa = $this->M_auth->getSA();

        if ($this->session->userdata('id_user') == $bios['id_user'] || $bios['id_user'] != null) {
            $get = array(
                'id_biodata' => $bios['id_biodata'],
                'buser' => $bios['id_user'],
                'namal' => $bios['nama'],
                'nama_panggilan' => $bios['nama_panggilan'],
                'kelamin' => $bios['kelamin'],
                'ttl' => $bios['ttl'],
                'nik' => $bios['nik'],
                'agama' => $bios['agama'],
                'warganegara' => $bios['warganegara'],
                'saudara_kandung' => $bios['saudara_kandung'],
                'saudara_tiri' => $bios['saudara_tiri'],
                'saudara_angkat' => $bios['saudara_angkat'],
                'anak_ke' => $bios['anak_ke'],
                'bb' => $bios['bb'],
                'tinggi' => $bios['tinggi'],
                'gol_darah' => $bios['gol_darah'],
                'alamat_rumah' => $bios['alamat_rumah'],
                'kodepos' => $bios['kodepos'],
                'telp_wa' => $bios['telp_wa'],
                'tempat_tinggal' => $bios['tempat_tinggal'],
                'jarak_dari_sekolah' => $bios['jarak_dari_sekolah'],
                //biodata orangtua
                'bouser' => $bioo['id_user'],
                'nama_ayah' => $bioo['nama_ayah'],
                'pendidikan-ayah' => $bioo['pendidikan_ayah'],
                'penghasilan_ayah' => $bioo['penghasilan_ayah'],
                'nama_ibu' => $bioo['nama_ibu'],
                'pendidikan_ibu' => $bioo['pendidikan_ibu'],
                'penghasilan_ibu' => $bioo['penghasilan_ibu'],
                //biodata wali
                'wiuser' => $biow['id_user'],
                'nama_wali' => $biow['nama_wali'],
                'pendidikan_wali' => $biow['pendidikan_wali'],
                'penghasilan_wali' => $biow['penghasilan_wali'],
                'hubungan_keluarga' => $biow['hubungan_keluarga'],
                //sekolah_asal
                'saiuser' => $sa['id_user'],
                'nama_sekolah' => $sa['nama_sekolah'],
                'alamat_sekolah' => $sa['alamat_sekolah']


            );
            $this->session->set_userdata($get);
            $data = array(
                'title' => 'Formulir Pendaftaran PPDB'
            );
            $this->load->view('layout/header.php', $data);
            $this->load->view('content/formulir.php');
            $this->load->view('layout/footer.php');
        } else {
            $data = array(
                'title' => 'Formulir Pendaftaran PPDB'
            );
            $this->load->view('layout/header.php', $data);
            $this->load->view('content/formulir.php');
            $this->load->view('layout/footer.php');
        }
    }

    public function insert()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama Lengkap',
            'required|max_length[50]',
            [
                'required' => 'Nama lengkap harus di isi !',
                'max_length' => 'Nama lengkap maksimal 50 karakter !'
            ]
        );

        $this->form_validation->set_rules(
            'nama_panggilan',
            'Nama Panggilan',
            'required|max_length[20]',
            [
                'required' => 'Nama panggilan harus di isi !',
                'max_length' => 'Nama panggilan maksimal 20 karakter !'
            ]
        );

        $this->form_validation->set_rules(
            'kelamin',
            'Jenis Kelamin',
            'required',
            [
                'required' => 'Jenis kelamin harus di isi !'
            ]
        );

        $this->form_validation->set_rules(
            'ttl',
            'Tempat tanggal lahir',
            'required|max_length[20]',
            [
                'required' => 'Tempat tanggal lahir harus di isi !',
                'max_length' => 'Tempat tanggal lahir maksimal 20 karakter !'
            ]
        );

        $this->form_validation->set_rules(
            'nik',
            'NIK',
            'required|min_length[16]|max_length[16]',
            [
                'required' => 'NIK harus di isi !',
                'min_length' => 'NIK minimal 16 karakter !',
                'max_length' => 'NIK maksimal 16 karakter !'
            ]
        );

        $this->form_validation->set_rules(
            'agama',
            'Agama',
            'required',
            [
                'required' => 'Agama harus di pilih !',
            ]
        );

        $this->form_validation->set_rules(
            'warganegara',
            'Warganegara',
            'required',
            [
                'required' => 'Warganegara harus di pilih !',
            ]
        );

        $this->form_validation->set_rules(
            'saudara_kandung',
            'Saudara Kandung',
            'required|min_length[1]|max_length[2]',
            [
                'required' => 'Saudara kandung harus di isi !',
                'min_length' => 'Saudara kandung minimal 1 karakter !',
                'max_length' => 'Saudara kandung maksimal 2 karakter !'
            ]
        );


        $this->form_validation->set_rules(
            'saudara_tiri',
            'Saudara tiri',
            'required|min_length[1]|max_length[2]',
            [
                'required' => 'Saudara tiri harus di isi !',
                'min_length' => 'Saudara tiri minimal 1 karakter !',
                'max_length' => 'Saudara tiri maksimal 2 karakter !'
            ]
        );

        $this->form_validation->set_rules(
            'saudara_angkat',
            'Saudara Angkat',
            'required|min_length[1]|max_length[2]',
            [
                'required' => 'Saudara angkat harus di isi !',
                'min_length' => 'Saudara angkat minimal 1 karakter !',
                'max_length' => 'Saudara angkat maksimal 2 karakter !'
            ]
        );
        $this->form_validation->set_rules(
            'anak_ke',
            'Anak Ke',
            'required|min_length[1]|max_length[2]',
            [
                'required' => 'Anak ke harus di isi !',
                'min_length' => 'Anak ke minimal 1 karakter !',
                'max_length' => 'Anak ke maksimal 2 karakter !'
            ]
        );

        $this->form_validation->set_rules(
            'bb',
            'Berat Badan',
            'required|min_length[1]|max_length[5]',
            [
                'required' => 'Berat badan harus di isi !',
                'min_length' => 'Berat badan minimal 1 karakter !',
                'max_length' => 'Berat badan maksimal 5 karakter !'
            ]
        );

        $this->form_validation->set_rules(
            'tiggi',
            'Tinggi Badan',
            'required|min_length[1]|max_length[5]',
            [
                'required' => 'Tinggi badan harus di isi !',
                'min_length' => 'Tinggi badan minimal 1 karakter !',
                'max_length' => 'Tinggi badan maksimal 5 karakter !'
            ]
        );

        $this->form_validation->set_rules(
            'gol_darah',
            'Golongan Darah',
            'required',
            [
                'required' => 'Golongan darah harus di pilih !',
            ]
        );

        $this->form_validation->set_rules(
            'alamat_rumah',
            'Alamat Rumah',
            'required|min_length[10]|max_length[225]',
            [
                'required' => 'Alamat rumah harus di pilih !',
                'min_length' => 'Alamat rumah minimal 10 karakter',
                'max_length' => 'Alamat rumah maksimal 225 karakter'
            ]
        );

        $this->form_validation->set_rules(
            'kodepos',
            'Kode Pos',
            'required|min_length[4]|max_length[8]',
            [
                'required' => 'Kode pos harus di isi !',
                'min_length' => 'Kode pos minimal 4 karakter !',
                'max_length' => 'Kode pos maksimal 8 karakter !'
            ]
        );

        $this->form_validation->set_rules(
            'telp_wa',
            'Nomor Telepon / WA',
            'required|min_length[12]|max_length[13]',
            [
                'required' => 'Nomor telepon / WA harus di isi !',
                'min_length' => 'Nomor telepon / WA minimal 12 karakter !',
                'max_length' => 'Nomor telepon / WA maksimal 13 karakter !'
            ]
        );

        $this->form_validation->set_rules(
            'tempat_tinggal',
            'Tempat Tinggal',
            'required|min_length[10]|max_length[225]',
            [
                'required' => 'Tempat tinggal harus di isi !',
                'min_length' => 'Tempat tinggal minimal 10 karakter !',
                'max_length' => 'Tempat tinggal maksimal 225 karakter !'
            ]
        );

        $this->form_validation->set_rules(
            'jarak_dari_sekolah',
            'Jarak Rumah dari Sekolah',
            'required|min_length[1]|max_length[10]',
            [
                'required' => 'Jarak rumah dari sekolah harus di isi !',
                'min_length' => 'Jarak rumah dari sekolah minimal 1 karakter !',
                'max_length' => 'Jarak rumah dari sekolah maksimal  10 karakter !'
            ]
        );

        // //validasi biodata orangtua

        // $this->form_validation->set_rules(
        //     'nama_ayah',
        //     'Nama Ayah',
        //     'required|max_length[50]',
        //     [
        //         'required' => 'Nama ayah harus di isi',
        //         'max_length' => 'Nama ayah maksimal 50 karakter !'
        //     ]
        // );

        // $this->form_validation->set_rules(
        //     'pendidikan_ayah',
        //     'Pendidikan Ayah',
        //     'required',
        //     [
        //         'required' => 'Pendidikan ayah harus di pilih'
        //     ]
        // );

        // $this->form_validation->set_rules(
        //     'penghasilan_ayah',
        //     'Penghasilan Ayah',
        //     'required',
        //     [
        //         'required' => 'Penghasilan ayah harus di isi !'
        //     ]
        // );

        // $this->form_validation->set_rules(
        //     'nama_ibu',
        //     'Nama Ibu',
        //     'required|max_length[50]',
        //     [
        //         'required' => 'Nama ibu harus di isi',
        //         'max_length' => 'Nama ibu maksimal 50 karakter !'
        //     ]
        // );

        // $this->form_validation->set_rules(
        //     'pendidikan_ibu',
        //     'Pendidikan Ibu',
        //     'required',
        //     [
        //         'required' => 'Pendidikan ibu harus di pilih'
        //     ]
        // );

        // $this->form_validation->set_rules(
        //     'penghasilan_ibu',
        //     'Penghasilan Ibu',
        //     'required',
        //     [
        //         'required' => 'Penghasilan ibu harus di isi !'
        //     ]
        // );

        // //biodata wali

        // $this->form_validation->set_rules(
        //     'nama_wali',
        //     'Nama Wali',
        //     'required|max_length[50]',
        //     [
        //         'required' => 'Nama wali harus di isi !',
        //         'max_length' => 'Nama wali maksimal 50 karakter !'
        //     ]
        // );

        // $this->form_validation->set_rules(
        //     'pendidikan_wali',
        //     'Pendidikan Wali',
        //     'required',
        //     [
        //         'required' => 'Pendidikan wali harus di pilih !'
        //     ]
        // );

        // $this->form_validation->set_rules(
        //     'pekerjaan_wali',
        //     'Pekerjaan Wali',
        //     'required',
        //     [
        //         'required' => 'Pekejaan wali harus di isi !'
        //     ]
        // );

        // $this->form_validation->set_rules(
        //     'penghasilan_wali',
        //     'Penghasilan Wali',
        //     'required',
        //     [
        //         'required' => 'Penghasilan wali harus di isi !'
        //     ]
        // );

        // $this->form_validation->set_rules(
        //     'hubungan_keluarga',
        //     'Hubungan Keluarga',
        //     'required|max_length[20]',
        //     [
        //         'required' => 'Hubungan keluarga harus di isi !',
        //         'max_length' => 'Maksimal 20 karakter !'
        //     ]
        // );

        // //fv asal sekolah

        // $this->form_validation->set_rules(
        //     'nama_sekolah',
        //     'Nama Sekolah Asal',
        //     'required|max_length[50]',
        //     [
        //         'required' => 'Nama sekolah asal harus di isi !',
        //         'max_length' => 'Nama sekolah  asal maksimal 50 karakter !'
        //     ]
        // );

        // $this->form_validation->set_rules(
        //     'alamat_sekolah',
        //     'Alamat Sekolah Asal',
        //     'required|min_length[5]|max_length[225]',
        //     [
        //         'required' => 'Alamat sekolah asal harus di isi !',
        //         'min_length' => 'Alamat sekolah asal minimal 5 karakter !',
        //         'max_length' => 'Alamat sekolah  asal maksimal 225 karakter !'
        //     ]
        // );

        // if ($this->form_validation->run() == FALSE) {
        //     $this->session->set_flashdata('message', '<div class="alert alert-warning text-center" role="alert">Ooppss.. ada yang salah, silahkan cek data di form kembali !</div>');
        //     $this->formulir();
        // } else {
        $this->_inputData();
        // }
    }

    private function _inputData()
    {
        error_reporting(0);
        if ($this->session->userdata('buser') !== $this->session->userdata('id_user')) {
            date_default_timezone_set("Asia/Jakarta");
            $id = $this->session->userdata('id_user');
            $nama = $this->input->post('nama');
            $panggilan = $this->input->post('nama_panggilan');
            $kelamin = $this->input->post('kelamin');
            $ttl = $this->input->post('ttl');
            $nik = $this->input->post('nik');
            $agama = $this->input->post('agama');
            $warga = $this->input->post('warganegara');
            $sk = $this->input->post('saudara_kandung');
            $st = $this->input->post('saudara_tiri');
            $sa = $this->input->post('saudara_angkat');
            $ak = $this->input->post('anak_ke');
            $bb = $this->input->post('bb');
            $tb = $this->input->post('tinggi');
            $gol_d = $this->input->post('gol_darah');
            $alamat = $this->input->post('alamat_rumah');
            $kodepos = $this->input->post('kodepos');
            $tel = $this->input->post('telp_wa');
            $tt = $this->input->post('tempat_tinggal');
            $jarak = $this->input->post('jarak_dari_sekolah');
            $tgl = date('Y-m-d H:i:s');

            $biodata = array(
                'id_user' => $id,
                'nama' => $nama,
                'nama_panggilan' => $panggilan,
                'kelamin' => $kelamin,
                'ttl' => $ttl,
                'nik' => $nik,
                'agama' => $agama,
                'warganegara' => $warga,
                'saudara_kandung' => $sk,
                'saudara_tiri' => $st,
                'saudara_angkat' => $sa,
                'anak_ke' => $ak,
                'bb' => $bb,
                'tinggi' => $tb,
                'gol_darah' => $gol_d,
                'alamat_rumah' => $alamat,
                'kodepos' => $kodepos,
                'telp_wa' => $tel,
                'tempat_tinggal' => $tt,
                'jarak_dari_sekolah' => $jarak,
                'tgl_input' => $tgl
            );

            $nama_ayah = $this->input->post('nama_ayah');
            $pa = $this->input->post('pendidikan_ayah');;
            $penghasilan_a = $this->input->post('penghasilan_ayah');;
            $nama_ibu = $this->input->post('nama_ibu');
            $pi = $this->input->post('pendidikan_ibu');;
            $penghasilan_i = $this->input->post('penghasilan_ibu');;


            $biodata_orangtua = array(
                'id_user' => $id,
                'nama_ayah' => $nama_ayah,
                'pendidikan_ayah' => $pa,
                'penghasilan_ayah' => $penghasilan_a,
                'nama_ibu' => $nama_ibu,
                'pendidikan_ibu' => $pi,
                'penghasilan_ibu' => $penghasilan_i,
                'tgl_input' => $tgl
            );

            $nama_wali = $this->input->post('nama_wali');
            $pend_wali = $this->input->post('pendidikan_wali');;
            $peng_wali = $this->input->post('penghasilan_wali');;
            $hub_kel = $this->input->post('hubungan_keluarga');

            $bio_wali = array(
                'id_user' => $id,
                'nama_wali' => $nama_wali,
                'pendidikan_wali' => $pend_wali,
                'penghasilan_wali' => $peng_wali,
                'hubungan_keluarga' => $hub_kel,
                'tgl_input' => $tgl
            );

            $nama_s = $this->input->post('nama_sekolah');
            $alamat_s = $this->input->post('alamat_sekolah');

            $sekolah = array(
                'id_user' => $id,
                'nama_sekolah' => $nama_s,
                'alamat_sekolah' => $alamat_s,
                'tgl_input' => $tgl
            );


            $this->M_auth->biodata($biodata);
            $this->M_auth->orangtua($biodata_orangtua);
            $this->M_auth->wali($bio_wali);
            $this->M_auth->sekolah($sekolah);
            $log = array(
                'aktivitas' => '' . ($this->session->userdata('role_id') == 1 ? 'Admin' : 'User') . ' dengan nama ' . $this->session->userdata('nama') . ' telah melengkapi formulir pada ' . date('Y/m/d') . ' ',
                'tanggal' => date('Y-m-d H:i:s')
            );
            $this->M_welcome->log($log);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Data berhasil di simpan !</div>');
            redirect(base_url('Formulir'), 'refresh');
        } else {
            date_default_timezone_set("Asia/Jakarta");
            $id = $this->session->userdata('id_user');
            $nama = $this->input->post('nama');
            $panggilan = $this->input->post('nama_panggilan');
            $kelamin = $this->input->post('kelamin');
            $ttl = $this->input->post('ttl');
            $nik = $this->input->post('nik');
            $agama = $this->input->post('agama');
            $warga = $this->input->post('warganegara');
            $sk = $this->input->post('saudara_kandung');
            $st = $this->input->post('saudara_tiri');
            $sa = $this->input->post('saudara_angkat');
            $ak = $this->input->post('anak_ke');
            $bb = $this->input->post('bb');
            $tb = $this->input->post('tinggi');
            $gol_d = $this->input->post('gol_darah');
            $alamat = $this->input->post('alamat_rumah');
            $kodepos = $this->input->post('kodepos');
            $tel = $this->input->post('telp_wa');
            $tt = $this->input->post('tempat_tinggal');
            $jarak = $this->input->post('jarak_dari_sekolah');
            $tgl = date('Y-m-d H:i:s');

            $Ubiodata = array(
                'id_user' => $id,
                'nama' => $nama,
                'nama_panggilan' => $panggilan,
                'kelamin' => $kelamin,
                'ttl' => $ttl,
                'nik' => $nik,
                'agama' => $agama,
                'warganegara' => $warga,
                'saudara_kandung' => $sk,
                'saudara_tiri' => $st,
                'saudara_angkat' => $sa,
                'anak_ke' => $ak,
                'bb' => $bb,
                'tinggi' => $tb,
                'gol_darah' => $gol_d,
                'alamat_rumah' => $alamat,
                'kodepos' => $kodepos,
                'telp_wa' => $tel,
                'tempat_tinggal' => $tt,
                'jarak_dari_sekolah' => $jarak,
                'tgl_update' => $tgl
            );

            $nama_ayah = $this->input->post('nama_ayah');
            $pa = $this->input->post('pendidikan_ayah');;
            $penghasilan_a = $this->input->post('penghasilan_ayah');;
            $nama_ibu = $this->input->post('nama_ibu');
            $pi = $this->input->post('pendidikan_ibu');;
            $penghasilan_i = $this->input->post('penghasilan_ibu');;

            $Ubiodata_orangtua = array(
                'id_user' => $id,
                'nama_ayah' => $nama_ayah,
                'pendidikan_ayah' => $pa,
                'penghasilan_ayah' => $penghasilan_a,
                'nama_ibu' => $nama_ibu,
                'pendidikan_ibu' => $pi,
                'penghasilan_ibu' => $penghasilan_i,
                'tgl_update' => $tgl
            );

            $nama_wali = $this->input->post('nama_wali');
            $pend_wali = $this->input->post('pendidikan_wali');;
            $peng_wali = $this->input->post('penghasilan_wali');;
            $hub_kel = $this->input->post('hubungan_keluarga');

            $Ubio_wali = array(
                'id_user' => $id,
                'nama_wali' => $nama_wali,
                'pendidikan_wali' => $pend_wali,
                'penghasilan_wali' => $peng_wali,
                'hubungan_keluarga' => $hub_kel,
                'tgl_update' => $tgl
            );

            $nama_s = $this->input->post('nama_sekolah');
            $alamat_s = $this->input->post('alamat_sekolah');

            $Usekolah = array(
                'id_user' => $id,
                'nama_sekolah' => $nama_s,
                'alamat_sekolah' => $alamat_s,
                'tgl_update' => $tgl
            );


            $this->M_auth->Ubiodata($Ubiodata);
            $this->M_auth->Uorangtua($Ubiodata_orangtua);
            $this->M_auth->Uwali($Ubio_wali);
            $this->M_auth->Usekolah($Usekolah);
            $log = array(
                'aktivitas' => '' . ($this->session->userdata('role_id') == 1 ? 'Admin' : 'User') . ' dengan nama ' . $this->session->userdata('nama') . ' telah mengupdate formulir pada ' . date('Y/m/d') . ' ',
                'tanggal' => date('Y-m-d H:i:s')
            );
            $this->M_welcome->log($log);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Data berhasil di update !</div>');
            redirect(base_url('Formulir'), 'refresh');
        }
    }

    public function setting()
    {

        $d = $this->M_auth->getUSession();

        $ds = array(
            'nama2' => $d['nama'],
            'nokk2' => $d['no_kk'],
            'username2' => $d['username']
        );

        $this->session->set_userdata($ds);

        $data = array(
            'title' => 'Pengaturan Akun PPDB',
        );
        $this->load->view('layout/header.php', $data);
        $this->load->view('content/seting.php', $data);
        $this->load->view('layout/footer.php');
    }

    public function updateData()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama Lengkap',
            'required|max_length[50]',
            [
                'required' => 'Nama lengkap harus di isi !',
                'max_length' => 'Nama lengkap maksimal 50 karaktr !'
            ]
        );

        $this->form_validation->set_rules(
            'no_kk',
            'Nomor KK',
            'required|min_length[16]|max_length[16]',
            [
                'required' => 'Nomor KK harus di isi !',
                'min_length' => 'Nomor KK minimal 16 karakter !',
                'max_length' => 'Nomor KK maksimal 16 karakter !'
            ]
        );

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|min_length[5]|max_length[12]',
            [
                'required' => 'Username harus di isi !',
                'min_length' => 'Username minimal 5 karkter',
                'max_length' => 'Username maksimal 12 karakter'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Ooopss.. Form harus di lengkapi !</div>');
            $this->setting();
        } else {
            $this->_updateD();
        }
    }

    private function _updateD()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->input->post('nama');
        $kk = $this->input->post('no_kk');
        $username = $this->input->post('username');
        $tgl = date('Y-m-d H:i:s');

        $data = array(
            'nama' => $nama,
            'no_kk' => $kk,
            'username' => $username,
            'tgl_update' => $tgl
        );
        $this->M_auth->userUpdate($data);
        $log = array(
            'aktivitas' => '' . ($this->session->userdata('role_id') == 1 ? 'Admin' : 'User') . ' dengan nama ' . $this->session->userdata('nama') . ' telah mengupdate data profile pada ' . date('Y/m/d') . ' ',
            'tanggal' => date('Y-m-d H:i:s')
        );
        $this->M_welcome->log($log);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data profile berhasil di update !</div>');
        redirect(base_url('PengaturanAkun'), 'refresh');
    }

    public function uPassword()
    {
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|min_length[8]',
            [
                'required' => 'Password harus di isi !',
                'min_length' => 'Password minimal 8 karakter !'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message1', '<div class="alert alert-warning" role="alert">Ooopss.. Form harus di lengkapi !</div>');
            $this->setting();
        } else {
            $this->_uPassword();
        }
    }

    private function _uPassword()
    {
        $pn = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $dp = array(
            'password' => $pn
        );
        $this->M_auth->updatePassword($dp);
        $log = array(
            'aktivitas' => '' . ($this->session->userdata('role_id') == 1 ? 'Admin' : 'User') . ' dengan nama ' . $this->session->userdata('nama') . ' telah mengubah Password pada ' . date('Y/m/d') . ' ',
            'tanggal' => date('Y-m-d H:i:s')
        );
        $this->M_welcome->log($log);
        $this->session->set_flashdata('message1', '<div class="alert alert-success" role="alert">Password berhasil di update !</div>');
        redirect(base_url('PengaturanAkun'), 'refresh');
    }

    public function cetak_formulir()
    {
        $log = array(
            'aktivitas' => '' . ($this->session->userdata('role_id') == 1 ? 'Admin' : 'User') . ' dengan nama ' . $this->session->userdata('nama') . ' telah mencetak/print-out Formulir pada ' . date('Y/m/d') . ' ',
            'tanggal' => date('Y-m-d H:i:s')
        );
        $this->M_welcome->log($log);
        $data = array(
            'biodata' => $this->M_auth->biodatapdf(),
            'orangtua' => $this->M_auth->orangtuapdf(),
            'wali' => $this->M_auth->walipdf(),
            'asal' => $this->M_auth->asalpdf()
        );

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = $this->session->userdata('nama') . "-formulir_ppdb.pdf";
        return $this->pdf->load_view('content/cetak_formulir', $data);
    }
}
