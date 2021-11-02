<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper('url');
        $this->load->model('M_aktivitas');
        $this->load->model('M_admin');
        $this->load->model('M_welcome');
        $this->load->model('M_gel');
        login_admin();
    }
    public function index()
    {
        $data =  array(
            'title' => 'Dashboard Admin',
        );
        $this->load->view('admin/layout/header.php', $data);
        $this->load->view('admin/dashboard.php', $data);
        $this->load->view('admin/layout/footer.php');
    }
    public function pendaftar()
    {
        $data =  array(
            'title' => 'Data Calon Siswa/i Baru',
        );
        $this->load->view('admin/layout/header.php', $data);
        $this->load->view('admin/data_pendaftar.php', $data);
        $this->load->view('admin/layout/footer.php');
    }
    public function getPendaftar()
    {
        error_reporting(0);
        if ($this->input->is_ajax_request() == true) {
            $this->load->model('M_admin', 'pendaftar');
            $list = $this->pendaftar->get_datatables();

            foreach ($list as $data) {
                if ($data->is_active_gel == 0) {
                } else {

                    $data = array();
                    $no = $_POST['start'];
                    foreach ($list as $field) {
                        $no++;
                        $row = array();
                        $row[] = $no;
                        $row[] =
                            '
                <div class="btn-group">
                <a class="btn btn-primary btn-sm" href="' . base_url('Formulir-PPDB/' . $field->id_user) . '" target=" _blank()"><i class="fas fa-print" ></i></a>
                </div>
                ';
                        $row[] =
                            '
                <span style="color:' . ($field->is_active == 1 ? "green" : "red") . '; font-weight:bold;">' . ($field->is_active == 1 ? 'Active' : 'Inactive') . '<span>
                <div class="form-group">
                <div class="btn-group">
                <form action="' . base_url('activated/' . $field->id_user . '?is_active=' . 0) . '" method="post" enctype="multipart/form-data">
                <button class="btn btn-' . ($field->is_active == 0 ? 'danger' : 'light') . ' btn-sm" type="submit">Off</button>
                </form>
                <form action="' . base_url('activated/' . $field->id_user . '?is_active=' . 1) . '" method="post" enctype="multipart/form-data">
                <button class="btn btn-' . ($field->is_active == 1 ? 'success' : 'light') . ' btn-sm" type="submit">On</button>
                </form>
                <div>
                <div>
                
                ';
                        $row[] =
                            ($field->status_daftar == null ? 'Belum di Tentukan' : '' . ($field->status_daftar == 'Diterima' ? '<span style="color:green; font-weight:bold;">' . $field->status_daftar . '</span>' : '<span style="color:red; font-weight:bold;">' . $field->status_daftar . '</span>') . '')
                            .
                            '
                    <br>
                    <div class="btn-group">
                    <form action="' . base_url('dft_update/' . $field->id_user . '?status_daftar=' . 'Diterima') . '" method="post" encypte="multipart/form-data">
                    <button type="submit" class="btn btn-' . ($field->status_daftar == null ? 'info' : ($field->status_daftar == 'Diterima' ? 'success' : 'light')) . ' btn-sm">Terima</button>
                    </form>
                    <form action="' . base_url('dft_update/' . $field->id_user . '?status_daftar=' . 'Tidak di terima') . '" method="post" encypte="multipart/form-data">
                    <button type="submit" class="btn btn-' . ($field->status_daftar == null ? 'warning' : ($field->status_daftar == 'Tidak di terima' ? 'danger' : 'light')) . ' btn-sm">Tidak</button>
                    </form>
                    </div>
                    
                    ';
                        $row[] = $field->id_user;
                        $row[] = $field->nama;
                        $row[] = $field->username;
                        $row[] = $field->no_kk;
                        $row[] =
                            $field->tahun . '<br>' .
                            '<small style="color:red;">' . $field->gelombang . '</small>';
                        $data[] = $row;
                    }

                    $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->pendaftar->count_all(),
                        "recordsFiltered" => $this->pendaftar->count_filtered(),
                        "data" => $data,
                    );
                    //output dalam format JSON
                    $this->output->set_content_type('aplication/json')->set_output(json_encode($output));
                }
            }
        } else {
            exit('Maaf data tidak bisa ditampilkan');
        }
    }
    public function actived($id)
    {
        $act = $this->input->get('is_active');
        $data = array(
            'is_active' => $act
        );
        $this->M_admin->isactive($data, $id);
        $log = array(
            'aktivitas' => 'Admin ' . $this->session->userdata('nama') . ' telah me-' . ($act == 0 ? 'Inactive' : 'Active') . '-kan user dengan id ' . $id . ' pada ' . date('Y/m/d') . ' ',
            'tanggal' => date('Y-m-d H:i:s')
        );
        $this->M_welcome->log($log);
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Status akun user berhasil di update!</div>');
        redirect(base_url('CalonSiswa'));
    }
    public function getAktivitas()
    {
        if ($this->input->is_ajax_request() == true) {
            $this->load->model('M_aktivitas', 'aktivitas');
            $list = $this->aktivitas->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $field) {
                $no++;
                $row = array();
                $row[] = '<input type="checkbox" class="check-item" name="id[]" value="' . $field->id . '">';
                $row[] = $no;
                $row[] = $field->aktivitas;
                $row[] = $field->tanggal;
                $data[] = $row;
            }
            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->aktivitas->count_all(),
                "recordsFiltered" => $this->aktivitas->count_filtered(),
                "data" => $data,
            );
            //output dalam format JSON
            $this->output->set_content_type('aplication/json')->set_output(json_encode($output));
        } else {
            exit('Maaf data tidak bisa ditampilkan');
        }
    }
    public function delAct()
    {
        $id = $this->input->post('id');
        if ($id == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan pilih data aktivitas dahulu !</div>');
            redirect(base_url('DashboardAdmin'), 'refresh');
        } else {
            $this->M_admin->deleteaktivitas($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data aktivitas berhasil di hapus !</div>');
            redirect(base_url('DashboardAdmin'), 'refresh');
        }
    }
    public function gelV()
    {
        $data = array(
            'title' => 'Data Gelombang',
        );
        $this->load->view('admin/layout/header.php', $data);
        $this->load->view('admin/gelombang.php', $data);
        $this->load->view('admin/layout/footer.php');
    }
    public function viewGelombang()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('Y-m-d');
        if ($this->input->is_ajax_request() == true) {
            $this->load->model('M_gel', 'gelombang');
            $list = $this->gelombang->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $field) {

                $no++;
                $row = array();
                if ($field->tgl_buka >= $tgl || $field->is_active_gel != 1) {
                    $row[] =
                        '<input type="checkbox" name="id_gel[]" value="' . $field->id_gel . '" class="check-item">
                    <input type="hidden" name="is" value="' . $field->is_active_gel . '">
                    ';
                } else {
                    $row[] = '<input type="checkbox" name="id_gel[]" value="' . $field->id_gel . '" class="check-item" disabled readonly>';
                }
                $row[] = $no;
                $row[] =
                    '
                <button class="btn btn-warning btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal' . $field->id_gel . '"><i class="fas fa-edit"></i></button>
                
            <div class="modal fade" id="exampleModal' . $field->id_gel . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-lg">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Edit data gelombang
                         </h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         <form action="' . base_url('updateGelombang') . '" method="post" enctype="multipart/form-data">
                             <div class="form-group">
                             <input type="hidden" name="id" value="' . $field->id_gel . '">
                                 <label for="gel">Gelombang</label>
                                 <input type="text" name="gelombang" value="' . $field->gelombang . '" class="form-control" placeholder="Contoh : Gelombang 1" id="gel">
                             </div>
                             <div class="form-group">
                                 <label for="gel">Tahun Ajaran</label>
                                 <input type="text" name="tahun" class="form-control" value="' . $field->tahun . '" id="gel">
                             </div>
                             <div class="form-group">
                                 <label for="tb">Tanggal Buka </label>
                                 <input type="date" name="tgl_buka" value="' . $field->tgl_buka . '" class="form-control" id="b">
                             </div>
                             <div class="form-group">
                                 <label for="tb">Tanggal Tutup </label>
                                 <input type="date" name="tgl_tutup" value="' . $field->tgl_tutup . '" class="form-control" id="b">
                             </div>
                             <div class="btn-group">
                                 <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
                ';
                $row[] =
                    '
                ' . ($field->is_active_gel == 0 ? '<span style="color:red; font-weight:bold">Inactive</span>' : '<span style="color:green; font-weight:bold">Active</span>') . '
                <br>
                <div class="btn-group">
                    <form action="' . base_url('set_gel/' .  $field->id_gel . '?is_active_gel=' . 0) . '" method="post" enctype="multipart/form-data">
                        <button class="btn btn-' . ($field->is_active_gel == 0 ? 'danger' : 'light') . ' btn-sm">Off</button>
                    </form>
                    <form action="' . base_url('set_gel/' .  $field->id_gel . '?is_active_gel=' . 1) . '" method="post" enctype="multipart/form-data">
                        <button class="btn btn-' . ($field->is_active_gel == 1 ? 'success' : 'light') . ' btn-sm">On</button>
                    </form>
                </div>
                ';
                $row[] =
                    '
                ' . ($field->publish == 1 ? '<span style="green; font-weight:bold">Ya</span>' : '<span style="red; font-weight:bold">Tidak</span>') . '
                <br>
                <div class="btn-group">
                    <form action="' . base_url('Publish/' .  $field->id_gel . '?published=' . 0) . '" method="post" enctype="multipart/form-data">
                        <button class="btn btn-' . ($field->publish == 0 ? 'danger' : 'light') . ' btn-sm">Tidak</button>
                    </form>
                    <form action="' . base_url('Publish/' .  $field->id_gel . '?published=' . 1) . '" method="post" enctype="multipart/form-data">
                        <button class="btn btn-' . ($field->publish == 1 ? 'success' : 'light') . ' btn-sm">Ya</button>
                    </form>
                </div>
                ';
                $row[] = $field->gelombang;
                $row[] = $field->tahun;
                $row[] = $field->tgl_buka;
                $row[] = $field->tgl_tutup;
                $row[] =
                    '
                    <small>Input&nbsp:&nbsp;' . $field->tgl_input . '</small><br>
                    <small>Update&nbsp:&nbsp;' . ($field->tgl_update == '0000-00-00 00:00:00' ? '-' : $field->tgl_update)  . '</small>
                ';
                $data[] = $row;
            }
            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->gelombang->count_all(),
                "recordsFiltered" => $this->gelombang->count_filtered(),
                "data" => $data,
            );
            //output dalam format JSON
            $this->output->set_content_type('aplication/json')->set_output(json_encode($output));
        } else {
            exit('Maaf data tidak bisa ditampilkan');
        }
    }
    public function updateGel()
    {
        $id = $this->input->post('id');
        $gel = $this->input->post('gelombang');
        $th = $this->input->post('tahun');
        $tgl_b = $this->input->post('tgl_buka');
        $tgl_t = $this->input->post('tgl_tutup');
        $data = array(
            'gelombang' => $gel,
            'tahun' => $th,
            'tgl_buka' => $tgl_b,
            'tgl_tutup' => $tgl_t,
            'tgl_update' => date('Y-m-d H:i:s')
        );
        $this->M_admin->updateGelombang($data, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data gelombang berhasil di edit !</div>');
        redirect(base_url('Gelombang'), 'refresh');
    }
    public function insertGelombang()
    {
        $gel = $this->input->post('gelombang');
        $th = $this->input->post('tahun');
        $tgl_b = $this->input->post('tgl_buka');
        $tgl_t = $this->input->post('tgl_tutup');
        $p = $this->input->post('publish');
        $ia = $this->input->post('is_active_gel');
        $this->form_validation->set_rules(
            'gelombang',
            'Gelombang',
            'required',
            [
                'required' => 'Data gelombang wajib di isi !'
            ]
        );
        $this->form_validation->set_rules(
            'tahun',
            'Tahun',
            'required',
            [
                'required' => 'Data tahun wajib di isi !'
            ]
        );
        $this->form_validation->set_rules(
            'tgl_buka',
            'Tanggal Buka',
            'required',
            [
                'required' => 'Data tanggal buka wajib di isi !'
            ]
        );
        $this->form_validation->set_rules(
            'tgl_tutup',
            'Tanggal Tutup',
            'required',
            [
                'required' => 'Data tanggal tutup wajib di isi !'
            ]
        );
        $this->form_validation->set_rules(
            'publish',
            'Status Publish',
            'required',
            [
                'required' => 'Status publish wajib di pilih !'
            ]
        );
        $this->form_validation->set_rules(
            'is_active_gel',
            'Status Aktif',
            'required',
            [
                'required' => 'Status aktif wajib di pilih !'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Oppsss.. ada yang salah ! !</div>');
            redirect(base_url('Gelombang'), 'refresh');
        } else {
            $data = array(
                'gelombang' => $gel,
                'tahun' => $th,
                'tgl_buka' => $tgl_b,
                'tgl_tutup' => $tgl_t,
                'publish' => $p,
                'is_active_gel' => $ia,
                'tgl_input' => date('Y-m-d H:i:s')
            );
            if ($this->M_admin->inGelombang($data)) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gelombang gagal di simpan !</div>');
                redirect(base_url('Gelombang'), 'refresh');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data gelombang berhasil di simpan !</div>');
                redirect(base_url('Gelombang'), 'refresh');
            }
        }
    }
    public function delGel()
    {
        $id = $this->input->post('id_gel');
        $s = $this->input->post('is');
        if ($id == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan pilih data gelombnag dahulu !</div>');
            redirect(base_url('Gelombang'), 'refresh');
        } else if ($s == 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Status gelombang masih <b>Active</b> silahkan <b>Inactive kan</b> sebelum menghapus !</div>');
            redirect(base_url('Gelombang'), 'refresh');
        } else {
            $this->M_admin->deleteGelombang($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data gelombang berhasil di hapus !</div>');
            redirect(base_url('Gelombang'), 'refresh');
        }
    }
    public function activegel($id)
    {
        $act = $this->input->get('is_active_gel');
        $data = array(
            'is_active_gel' => $act
        );
        $this->M_admin->is_Active($data, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data  status gelombang berhasil di update !</div>');
        redirect(base_url('Gelombang'), 'refresh');
    }
    public function publishGel($id)
    {
        $p = $this->input->get('published');
        $data = array(
            'publish' => $p
        );
        $this->M_admin->publish($data, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Status publish gelombang berhasil di ubah !</div>');
        redirect(base_url('Gelombang'), 'refresh');
    }
    public function statusdftupdate($id)
    {
        $st = $this->input->get('status_daftar');
        $data = array(
            'status_daftar' => $st
        );
        $this->M_admin->dftst($data, $id);
        $log = array(
            'aktivitas' => 'Admin ' . $this->session->userdata('nama') . ' telah mengubah status pendaftaran menjadi ' . $st . ' '  .  ' pada user id ' . $id . '' . ' pada ' . date('Y/m/d') . ' ',
            'tanggal' => date('Y-m-d H:i:s')
        );
        $this->M_welcome->log($log);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status pendaftran berhasil di update !</div>');
        redirect(base_url('CalonSiswa'), 'refresh');
    }
    public function dataakun()
    {
        $data = array(
            'title' => 'Data akun'
        );
        $this->load->view('admin/layout/header.php', $data);
        $this->load->view('admin/data_akun.php', $data);
        $this->load->view('admin/layout/footer.php');
    }
    public function dataView()
    {
        if ($this->input->is_ajax_request() == true) {
            $this->load->model('M_data', 'data');
            $list = $this->data->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $field) {
                $no++;
                $row = array();
                $row[] = '<input type="checkbox" name="id_user[]" value="' . $field->id_user . '">';
                $row[] = $no;
                $row[] =
                    '
                <div class="btn-group">
                <button class="btn btn-warning btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal' . $field->id_user . '"><i class="fas fa-edit"></i></button>
                
            <div class="modal fade" id="exampleModal' . $field->id_user . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit data gelombang
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="' . base_url('updateAkun') . '" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="' . $field->id_user . '">
                                    <label for="gel">Nama</label>
                                    <input type="text" name="nama" value="' . $field->nama . '" class="form-control" placeholder="Contoh : Gelombang 1" id="gel">
                                </div>
                                <div class="form-group">
                                    <label for="gel">Nomor KK</label>
                                    <input type="text" name="no_kk" class="form-control" value="' . $field->no_kk . '" id="gel">
                                </div>
                                <div class="form-group">
                                    <label for="tb">Username </label>
                                    <input type="text" name="username" value="' . $field->username . '" class="form-control" id="b">
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
                ';
                $row[] =                    '
                <span style="color:' . ($field->is_active == 1 ? "green" : "red") . '; font-weight:bold;">' . ($field->is_active == 1 ? 'Active' : 'Inactive') . '<span>
                <div class="form-group">
                <div class="btn-group">
                <form action="' . base_url('activated_akun/' . $field->id_user . '?is_active=' . 0) . '" method="post" enctype="multipart/form-data">
                <button class="btn btn-' . ($field->is_active == 0 ? 'danger' : 'light') . ' btn-sm" type="submit">Off</button>
                </form>
                <form action="' . base_url('activated_akun/' . $field->id_user . '?is_active=' . 1) . '" method="post" enctype="multipart/form-data">
                <button class="btn btn-' . ($field->is_active == 1 ? 'success' : 'light') . ' btn-sm" type="submit">On</button>
                </form>
                <div>
                <div>
                
                ';
                $row[] = $field->id_user;
                $row[] = $field->nama;
                $row[] = $field->username;
                $row[] = ($field->role_id == 1 ? 'Admin' : 'Siswa/i');
                $row[] = $field->no_kk;
                $row[] =
                    $field->tahun . '<br>' .
                    '<small style="color:red;">' . $field->gelombang . '</small>';
                $row[] = $field->tahun;
                $data[] = $row;
            }

            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->data->count_all(),
                "recordsFiltered" => $this->data->count_filtered(),
                "data" => $data,
            );
            //output dalam format JSON
            $this->output->set_content_type('aplication/json')->set_output(json_encode($output));
        } else {
            exit('Maaf data tidak bisa ditampilkan');
        }
    }
    public function akun($id)
    {
        $a = $this->input->get('is_active');
        $data = array(
            'is_active' => $a
        );
        $this->M_admin->aktiveakun($data, $id);
        $log = array(
            'aktivitas' => 'Admin ' . $this->session->userdata('nama') . ' telah me-' . ($a == 0 ? 'Inactive' : 'Active') . '-kan akun user dengan id ' . $id . ' pada ' . date('Y/m/d') . ' ',
            'tanggal' => date('Y-m-d H:i:s')
        );
        $this->M_welcome->log($log);
        $this->session->set_flashdata('message', '<div class="alert alert-warning">Satus akun user telah anda ubah !</div>');
        redirect(base_url('DataAkun'), 'refresh');
    }

    public function updateakun()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $no = $this->input->post('no_kk');
        $un = $this->input->post('username');

        $data = array(
            'nama' => $nama,
            'no_kk' => $no,
            'username' => $un,
            'tgl_update' => date('Y-m-d H:i:s')
        );
        $this->M_admin->Uakun($data, $id);
        $log = array(
            'aktivitas' => 'Admin ' . $this->session->userdata('nama') . ' telah mengupdate akun user dengan id ' . $id . ' pada ' . date('Y/m/d') . ' ',
            'tanggal' => date('Y-m-d H:i:s')
        );
        $this->M_welcome->log($log);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data akun user berhasil di update !</div>');
        redirect(base_url('DataAkun'), 'refresh');
    }

    public function arsip()
    {
        $data = array(
            'title' => 'Arsip Data PPDB'
        );
        $this->load->view('admin/layout/header.php', $data);
        $this->load->view('admin/arsip.php', $data);
        $this->load->view('admin/layout/footer.php');
    }

    public function arsipdata()
    {
        if ($this->input->is_ajax_request() == true) {
            $this->load->model('M_arsip', 'arsip');
            $list = $this->arsip->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $field) {
                $no++;
                $row = array();
                $row[] = $no;
                $row[] =
                    '
                <div class="btn-group">
                <a class="btn btn-primary btn-sm" href="' . base_url('Formulir-PPDB/' . $field->id_user) . '" target=" _blank()"><i class="fas fa-print" ></i></a>
                </div>
                ';
                $row[] =
                    '
                <span style="color:' . ($field->is_active == 1 ? "green" : "red") . '; font-weight:bold;">' . ($field->is_active == 1 ? 'Active' : 'Inactive') . '<span>
                
                ';
                $row[] =
                    ($field->status_daftar == null ? 'Belum di Tentukan' : '' . ($field->status_daftar == 'Diterima' ? '<span style="color:green; font-weight:bold;">' . $field->status_daftar . '</span>' : '<span style="color:red; font-weight:bold;">' . $field->status_daftar . '</span>') . '');
                $row[] = $field->id_user;
                $row[] = $field->nama;
                $row[] = $field->username;
                $row[] = $field->no_kk;
                $row[] =
                    $field->tahun . '<br>' .
                    '<small style="color:red;">' . $field->gelombang . '</small>';
                $data[] = $row;
            }
            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->arsip->count_all(),
                "recordsFiltered" => $this->arsip->count_filtered(),
                "data" => $data,
            );
            //output dalam format JSON
            $this->output->set_content_type('aplication/json')->set_output(json_encode($output));
        } else {
            exit('Maaf data tidak bisa ditampilkan');
        }
    }

    public function formulir_ppdb($id)
    {
        $data = array(
            'biodata' => $this->M_admin->biodatapdf($id),
            'orangtua' => $this->M_admin->orangtuapdf($id),
            'wali' => $this->M_admin->walipdf($id),
            'asal' => $this->M_admin->asalpdf($id)
        );
        date_default_timezone_set('Asia/Jakarta');
        $log = array(
            'aktivitas' => '' . ($this->session->userdata('role_id') == 1 ? 'Admin' : 'User') . ' dengan nama ' . $this->session->userdata('nama') . ' telah mencetak/print-out Formulir pada ' . date('Y/m/d') . ' ',
            'tanggal' => date('Y-m-d H:i:s')
        );
        $this->M_welcome->log($log);

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = $this->session->userdata('nama') . "-formulir_ppdb.pdf";
        return $this->pdf->load_view('admin/formulir_ppdb', $data);
    }

    public function landing()
    {

        $data = array(
            'title' => 'Setting Landing Pages'
        );

        $this->load->view('admin/layout/header.php', $data);
        $this->load->view('admin/landing.php', $data);
        $this->load->view('admin/layout/footer.php');
    }

    public function tentang()
    {
        $this->form_validation->set_rules(
            'judul',
            'Judul',
            'required',
            [
                'required' => 'Judul harus di isi !'
            ]
        );

        $this->form_validation->set_rules(
            'slogan',
            'Slogan',
            'required',
            [
                'required' => 'Slogan harus di isi !'
            ]
        );

        $this->form_validation->set_rules(
            'isi',
            'Isi Tentang',
            'required',
            [
                'required' => 'Form harus di isi !'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Oooppss.. ada yang salah !</div>');
            redirect(base_url('Setting-Landing-Pages'), 'refresh');
        } else {
            date_default_timezone_set('Asia/Jakarta');
            $j =  $this->input->post('judul');
            $s = $this->input->post('slogan');
            $i = $this->input->post('isi');

            $data = array(
                'judul' => $j,
                'slogan' => $s,
                'isi' => $i,
                'is_active' => 1,
                'tgl_input' => date('Y-m-d H:i:s')
            );

            $this->M_admin->tentang($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data behasil di simpan !</div>');
            redirect(base_url('Setting-Landing-Pages'), 'refresh');
        }
    }

    public function viewTentang()
    {
        if ($this->input->is_ajax_request() == true) {
            $this->load->model('M_tentang', 'tentang');
            $list = $this->tentang->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $field) {
                $no++;
                $row = array();
                $row[] = '<input type="checkbox" name="id_tentang[]" value="' . $field->id_tentang . '" class="check-item">';
                $row[] = $no;
                $row[] =
                    '
                <button class="btn btn-warning btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal' . $field->id_tentang . '"><i class="fas fa-edit" ></i></button>
                
                <!-- Modal -->
                 <div class="modal fade" id="exampleModal' . $field->id_tentang . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Edit data Tentang
                                 </h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                                 <form action="' . base_url('EditTentang/' . $field->id_tentang) . '" method="post" enctype="multipart/form-data">
                                     <div class="form-group">
                                         <label for="gel">Judul</label>
                                         <input type="text" name="judul" value="' . $field->judul . '" class="form-control" id="gel">
                                     </div>
                                     <div class="form-group">
                                         <label for="gel">Slogan</label>
                                         <input type="text" name="slogan" value="' . $field->slogan . '" class="form-control" id="gel">
                                     </div>
                                     <div class="form-group">
                                         <p style="text-align:left;">Isi Tentang</p>
                                         <textarea name="isi" id="editor1' . $field->id_tentang . '" class="form-control editor1"> ' . $field->isi . '</textarea>
                                        <script>
                                            CKEDITOR.replace("editor1' . $field->id_tentang . '",{});
                                        </script>
                                         </div>
                                     <div class="btn-group">
                                         <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- end modal -->
                
                ';
                $row[] = $field->judul;
                $row[] =  $field->slogan;
                $row[] = $field->isi;
                $row[] =
                    '
                ' . ($field->is_active == 1 ? 'Active' : 'Inactive') . '
                <div class="btn-group">
                    <form action="' . base_url('ac_tentang/') . $field->id_tentang . '?is_active=' . 1 . '" method="post">
                        <button class="btn btn-' . ($field->is_active == 1 ? 'success' : 'light') . ' btn-sm" type="submit">On</button>
                    </form>
                    <form action="' . base_url('ac_tentang/') . $field->id_tentang . '?is_active=' . 0 . '" method="post">
                        <button class="btn btn-' . ($field->is_active == 0 ? 'danger' : 'light') . ' btn-sm" type="submit">Off</button>
                    </form>
                </div>
                ';
                $row[] =
                    '<span>
                <small>Input : '  . $field->tgl_input . '</small> 
                <br>
                <small>Update : ' . ($field->tgl_update == '0000-00-00 00:00:00' ? '-' : $field->tgl_update) . '</small>
                </span>';
                $data[] = $row;
            }
            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->tentang->count_all(),
                "recordsFiltered" => $this->tentang->count_filtered(),
                "data" => $data,
            );
            //output dalam format JSON
            $this->output->set_content_type('aplication/json')->set_output(json_encode($output));
        } else {
            exit('Maaf data tidak bisa ditampilkan');
        }
    }
    public function tentang_act($id)
    {
        $a = $this->input->get('is_active');

        $data = array(
            'is_active' => $a
        );

        $this->M_admin->tt($data, $id);
        $this->session->set_userdata('message', '<div class="alert alert-warning" role="alert">Status aktif berhasil di ubah !</div>');

        redirect(base_url('Setting-Landing-Pages'), 'refresh');
    }

    public function deleteTentang()
    {
        $it = $this->input->post('id_tentang');

        if ($this->input->post('id_tentang') == null) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data belum di pilih. Silahkan pilih terlebih dahulu !</div>');
            redirect(base_url('Setting-Landing-Pages'), 'refresh');
        } else {
            $this->M_admin->deleteT($it);
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil di hapus !</div>');
            redirect(base_url('Setting-Landing-Pages'), 'refresh');
        }
    }

    public function uTentang($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $j = $this->input->post('judul');
        $s = $this->input->post('slogan');
        $i = $this->input->post('isi');

        $data = array(
            'judul' => $j,
            'slogan' => $s,
            'isi' => $i,
            'tgl_update' => date('Y-m-d H:i:s')
        );
        $this->M_admin->Utentang($data, $id);
        $this->session->set_userdata('message', '<div class="alert alert-success" role="alert">Data berhasil di update !</div>');
        redirect(base_url('Setting-Landing-Pages'), 'refresh');
    }

    public function alur()
    {
        date_default_timezone_set('Asia/Jakarta');

        $j = $this->input->post('judul');
        $i = $this->input->post('isi_alur');

        $data = array(
            'judul' => $j,
            'isi_alur' => $i,
            'is_active' => 1,
            'tgl_input' => date('Y-m-d H:i:s')
        );

        $this->M_admin->alur($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di simpan !</div>');
        redirect(base_url('Setting-Landing-Pages'), 'refresh');
    }

    public function Valur()
    {
        if ($this->input->is_ajax_request() == true) {
            $this->load->model('M_alur', 'alur');
            $list = $this->alur->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $field) {
                $no++;
                $row = array();
                $row[] = '<input type="checkbox" name="id_alur[]" value="' . $field->id_alur . '" class="check-item">';
                $row[] = $no;
                $row[] =
                    '
                <button class="btn btn-warning btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#alurE' . $field->id_alur . '"><i class="fas fa-edit" ></i></button>
                
                <!-- Modal -->
                 <div class="modal fade" id="alurE' . $field->id_alur . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Edit data alur PPDB
                                 </h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                                 <form action="' . base_url('EditAlur/' . $field->id_alur) . '" method="post" enctype="multipart/form-data">
                                     <div class="form-group">
                                         <label for="gel">Judul</label>
                                         <input type="text" name="judul" value="' . $field->judul . '" class="form-control" id="gel">
                                     </div>
                                     <div class="form-group">
                                         <p style="text-align:left;">Isi Tentang</p>
                                         <textarea name="isi_alur" id="editor2' . $field->id_alur . '" class="form-control editor2"> ' . $field->isi_alur . '</textarea>
                                        <script>
                                            CKEDITOR.replace("editor2' . $field->id_alur . '",{});
                                        </script>
                                         </div>
                                     <div class="btn-group">
                                         <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- end modal -->
                
                ';
                $row[] = $field->judul;
                $row[] = $field->isi_alur;
                $row[] =
                    '
                ' . ($field->is_active == 1 ? 'Active' : 'Inactive') . '
                <div class="btn-group">
                    <form action="' . base_url('ac_alur/') . $field->id_alur . '?is_active=' . 1 . '" method="post">
                        <button class="btn btn-' . ($field->is_active == 1 ? 'success' : 'light') . ' btn-sm" type="submit">On</button>
                    </form>
                    <form action="' . base_url('ac_alur/') . $field->id_alur . '?is_active=' . 0 . '" method="post">
                        <button class="btn btn-' . ($field->is_active == 0 ? 'danger' : 'light') . ' btn-sm" type="submit">Off</button>
                    </form>
                </div>
                ';
                $row[] =
                    '<span>
                <small>Input : '  . $field->tgl_input . '</small> 
                <br>
                <small>Update : ' . ($field->tgl_update == '0000-00-00 00:00:00' ? '-' : $field->tgl_update) . '</small>
                </span>';
                $data[] = $row;
            }
            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->alur->count_all(),
                "recordsFiltered" => $this->alur->count_filtered(),
                "data" => $data,
            );
            //output dalam format JSON
            $this->output->set_content_type('aplication/json')->set_output(json_encode($output));
        } else {
            exit('Maaf data tidak bisa ditampilkan');
        }
    }

    public function alur_ac($id)
    {
        $ac = $this->input->get('is_active');

        $data = array(
            'is_active' => $ac
        );

        $this->M_admin->alur_ac($data, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil di update !</div>');

        redirect(base_url('Setting-Landing-Pages'), 'refresh');
    }

    public function editalur($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $j = $this->input->post('judul');
        $ia = $this->input->post('isi_alur');

        $data = array(
            'judul' => $j,
            'isi_alur' => $ia,
            'tgl_update' => date('Y-m-d H:i:s')
        );
        $this->M_admin->edit_alurppdb($data, $id);
        $this->session->set_userdata('message', '<div class="alert alert-success" role="alert">Data alur berhasil di update</div>');

        redirect(base_url('Setting-Landing-Pages'), 'refresh');
    }
}
