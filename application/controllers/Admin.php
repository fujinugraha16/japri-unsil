<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != 'login') {
            redirect('login');
        }
        $this->load->model('admin_model', 'admin');
    }
    public function tambah()
    {
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "admin";

        //form validation rules
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        //validasi form
        if ($this->form_validation->run() == false) {
            $this->load->view('template/content', $data);
        } else {
            $this->admin->addAdmin();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data admin berhasil ditambahkan</div>');
            redirect('admin');
        }
    }

    public function bonus($id)
    {
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "edit_bonusadmin";
        $data['admin_id'] = $this->admin->getAdminById($id);

        //form validation rules
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('potongan', 'potongan', 'required|numeric|trim');

        //validasi form
        if ($this->form_validation->run() == false) {
            $this->load->view('template/content', $data);
        } else {
            $this->admin->bayarBonus($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Bonus Admin berhasil diambil</div>');
            redirect('admin');
        }
    }

    public function index()
    {
        $data['data'] = $this->admin->getAllAdmin();
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "admin";
        $this->load->view('template/content', $data);
    }
    public function e404()
    {
        $data['title'] = "Not Found 404";
        $this->load->view('errors/html/error_404', $data);
    }
}
