<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		if ($this->session->has_userdata('status')) {
			redirect('dashboard');
		}

		$data['title'] = "Masuk | JAPRI";
		$data['page'] = "login";
		// load view
		$this->load->view('template/content', $data);
	}

	public function aksi_login()
	{
		if ($this->session->userdata('username')) {
			redirect('login');
		}

		//form validation rules
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		//validasi form
		if ($this->form_validation->run() == false) {
			$data['title'] = "Masuk | JAPRI";
			$data['page'] = "login";

			$this->load->view('template/content', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username'); //mengambil data yang diinputkan di login dengan method post dari login.php
		$password = md5($this->input->post('password'));

		$user = $this->db->get_where('admin', ['username' => $username])->row_array(); //menampilkan data sesuai dengan email, nilai yg dikembalikan adalah array. ex: $user[' name '], $user[' email '], $user[' password '], $[' is_active '] dll...

		if ($user) { //jika usernya ada
			//cek passwordnya
			if ($password == $user['pass']) { //cek apakah password yang diinputkan ($password) = password yang ada dalam list data user di database ($user[' password '])

				//menyimpan data dalam session hanya email dan role_id
				$data_session = [
					'nama' => $username,
					'status' => 'login'
				];

				$this->session->set_userdata($data_session); //simpan $data ke dalam session

				// popup login berhasil
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('message', '<div class ="alert alert-danger" role ="alert">Password yang anda masukan salah!</div>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class ="alert alert-danger" role ="alert">Username yang anda masukan salah!</div>');
			redirect('login');
		}
	}

	public function logout()
	{
		// $this->session->unset_userdata('status');
		// $this->session->unset_userdata('nama');
		$this->session->sess_destroy();

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logout Berhasil!</div>');

		redirect('login', 'refresh');
	}
}
