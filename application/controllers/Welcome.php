<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
		$this->load->library('form_validation');
		$this->load->helper('captcha');
		$this->load->model('M_welcome');
		$this->load->model('M_admin');
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
		$data = array(
			'title' => 'PPDB MI Terpadu Kita',
			'tahun' => $this->M_admin->getDGelombang(),
			'tentang' => $this->M_admin->getTentang(),
			'alur' => $this->M_admin->getAlur()
		);

		$this->load->view('landing/header/header.php', $data);
		$this->load->view('landing/main.php', $data);
		$this->load->view('landing/footer/footer.php');
	}


	//captcha
	public function captcha()
	{
		$kata = '1234567890';
		$word = substr(str_shuffle($kata), 0, 6);
		$vals = array(
			'word'          => $word,
			'img_path'      => './assets/captcha_img/',
			'img_url'       => base_url('./assets/captcha_img/'),
			'font_path'     => './path/to/fonts/texb.ttf',
			'img_width'     => '140',
			'img_height'    => 30,
			'expiration'    => 7200,
			'word_length'   => 8,
			'font_size'     => 25,
			'img_id'        => 'Imageid',
			'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

			// White background and border, black text and red grid
			'colors'        => array(
				'background' => array(255, 255, 255),
				'border' => array(255, 255, 255),
				'text' => array(0, 0, 0),
				'grid' => array(255, 40, 40)
			)
		);

		$cap = create_captcha($vals);

		$set_session = array(
			'captcha' => $cap['word']
		);
		$this->session->set_userdata($set_session);

		$captcha = $cap['image'] = isset($cap['image']) ? $cap['image'] : "";
		return $captcha;
	}

	//landing daftar
	public function daftar()
	{

		date_default_timezone_set('Asia/Jakarta');
		error_reporting(0);

		$data = array(
			'captcha' => $this->captcha(),
			'title' => 'Daftar PPDB',
			'gel' => $this->M_welcome->gel(),
			'tgl' => date('Y-m-d'),
			'gelombang' => $this->M_admin->getGelombang()
		);
		$this->load->view('landing/daftar.php', $data);
	}

	public function register()
	{
		$this->form_validation->set_rules(
			'nama',
			'Nama',
			'required|max_length[30]|min_length[2]',
			[
				'required' => 'Nama lengkap wajib di isi !',
				'min_length' => 'Nama Minimal 5 karakter',
				'max_length' => 'Nama Maksimal 30 karakter !'
			]
		);
		$this->form_validation->set_rules(
			'no_kk',
			'Nomor KK',
			'required|max_length[16]|min_length[16]|trim|integer|numeric',
			[
				'required' => 'Nomor KK wajib di isi !',
				'min_length' => 'Nomor KK Minimal 10 Karakter !',
				'max_length' => 'Nomor KK Maksimal 10 Karakter !'
			]
		);
		$this->form_validation->set_rules(
			'username',
			'Username',
			'required|min_length[5]|max_length[10]',
			[
				'required' => 'Username wajib di isi !',
				'min_length' => 'Username Minimal 5 karakter !',
				'max_length' => 'Username Maksimak 10 karakter !'
			]
		);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|min_length[8]',
			[
				'required' => 'Password harus di isi !',
				'min_length' => 'Password minimal 8 karakter !'
			]
		);

		$this->form_validation->set_rules(
			'captcha_isi',
			'Kode Keamanan',
			'required',
			[
				'required' => 'Kode keamanan harus di isi !'
			]
		);

		if ($this->form_validation->run() == FALSE) {
			$this->daftar();
		} else {
			$this->_run_daftar();
		}
	}

	private function _run_daftar()
	{
		date_default_timezone_set("Asia/Jakarta");
		$gel = $this->input->post('id_gel');
		$nama = $this->input->post('nama');
		$kk = $this->input->post('no_kk');
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$c = $this->input->post('captcha_isi');

		if ($gel == null) {
			$this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Gelombang pendaftaran belum di buka !</div>');
			redirect(base_url('DaftarUser'), 'refresh');
		} else {

			$register = array(
				'id_gel' => $gel,
				'nama' => $nama,
				'no_kk' => $kk,
				'username' => $username,
				'password' => password_hash($pass, PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'tgl_daftar' => date('Y-m-d H:i:s')
			);


			$log = array(
				'aktivitas' => $nama . ' Mendaftar pada ' . date('Y/m/d'),
				'tanggal' => date('Y-m-d H:i:s')
			);

			if ($this->session->userdata('captcha') != $c) {
				$this->session->set_flashdata('message', '<div class="alert alert-warning text-center" role="alert">Maaf, Kode keamanan salah !</div>');
				redirect(base_url('DaftarUser'), 'refresh');
			} else {
				$this->M_welcome->register($register);
				$this->M_welcome->log($log);
				$this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Pendaftaran berhasil, silahkan untuk login !</div>');
				redirect(base_url('DaftarUser'), 'refresh');
			}
		}
	}

	public function login()
	{
		$data = array(
			'title' => 'Masuk PPDB',
			'captcha' => $this->captcha(),
			'gelombang' => $this->M_admin->getGelombang()
		);
		$this->load->view('landing/masuk.php', $data);
	}

	public function cek()
	{
		$this->form_validation->set_rules(
			'username',
			'Username',
			'required',
			[
				'required' => 'Username tidak boleh kososng !'
			]
		);

		$this->form_validation->set_rules(
			'password',
			'Password',
			'required',
			[
				'required' => 'Password tidak boleh kosong !'
			]
		);

		$this->form_validation->set_rules(
			'captcha_isi',
			'Kode Keamanan',
			'required',
			[
				'required' => 'Kode keamanan tidak boleh kosong !'
			]
		);

		if ($this->form_validation->run() == FALSE) {
			$this->login();
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		date_default_timezone_set('Asia/Jakarta');

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cap = $this->input->post('captcha_isi');

		$data = $this->M_welcome->Login($username);

		//cek email
		if ($data['username']) {
			//cekcaptcha
			if ($cap == $this->session->userdata('captcha')) {
				//cek sandi
				if (password_verify($password, $data['password'])) {
					//activ
					if ($data['is_active'] == 1) {
						$set = array(
							'id_user' => $data['id_user'],
							'nama' => $data['nama'],
							'username' => $data['username'],
							'nokk' => $data['no_kk'],
							'tgl' => $data['tgl_daftar'],
							'status' => 'Login',
							'role_id' => $data['role_id'],
							'token' => random_bytes(32)
						);
						$this->session->set_userdata($set);
						$log = array(
							'aktivitas' => '' . ($data['role_id'] == 1 ? 'Admin' : 'User') . ' dengan nama ' . $data['nama'] . ' telah login pada ' . date('Y/m/d') . ' ',
							'tanggal' => date('Y-m-d H:i:s')
						);
						$this->M_welcome->log($log);
						if ($data['role_id'] == 2) {
							redirect(base_url('Dashboard'));
						} else {
							redirect(base_url('DashboardAdmin'));
						}
					} else {
						//tidak aktif
						$this->session->set_flashdata('message', '<div class="alert alert-info text-center" role="alert">Akun anda <b>tidak aktif..!</b> Silahkan hubungi admin untuk mengaktifkan.</div>');
						redirect(base_url('MasukUser'));
					}
				} else {
					//pass salah
					$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Password anda salah !</div>');
					redirect(base_url('MasukUser'));
				}
			} else {
				//captcah salah
				$this->session->set_flashdata('message', '<div class="alert alert-warning text-center" role="alert">Kode keamanan tidak sama !</div>');
				redirect(base_url('MasukUser'));
			}
		} else {
			//email salah
			$this->session->set_flashdata('message', '<div class="alert alert-warning text-center" role="alert">username anda salah !</div>');
			redirect(base_url('MasukUser'));
		}
	}

	public function logout()
	{
		$log = array(
			'aktivitas' => '' . ($this->session->userdata('role_id') == 1 ? 'Admin' : 'User') . ' dengan nama ' . $this->session->userdata('nama') . ' telah logout pada ' . date('Y/m/d') . ' ',
			'tanggal' => date('Y-m-d H:i:s')
		);
		$this->M_welcome->log($log);
		session_destroy();
		$this->session->unset_userdata('id_user');
		$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Anda telah keluar dari aplikai !</div>');
		redirect(base_url('MasukUser'), 'refresh');
	}

	public function gelView()
	{
		if ($this->input->is_ajax_request() == true) {
			$this->load->model('M_viewGel', 'gelombang');
			$list = $this->gelombang->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $field) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $field->gelombang;
				$row[] =
					'
				<small style="color:green; !important">Buka : ' . $field->tgl_buka . '</small>
				<br>	
				<small>Tutup : ' . $field->tgl_tutup . '</small>
				';
				$row[] = $field->tahun;
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
}
