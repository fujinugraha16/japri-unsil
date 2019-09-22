<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Harga extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != 'login') {
            redirect('login');
        }

        // load model
        $this->load->model('harga_model', 'harga');
    }

    public function index()
    {
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "harga";
        // mengambil semua data harga dari db
        $data['harga'] = $this->harga->getAllHarga();

        $this->load->view('template/content', $data);
    }

    public function tambah()
    {
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "harga";
        $data['harga'] = $this->harga->getAllHarga();

        //form validation rules
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric|trim');

        //validasi form
        if ($this->form_validation->run() == false) {
            $this->load->view('template/content', $data);
        } else {
            $this->harga->addHarga();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data harga berhasil ditambahkan</div>');
            redirect('harga');
        }
    }

    public function edit($id)
    {
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "edit_harga";
        $data['harga_id'] = $this->harga->getHargaById($id);
        //form validation rules
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric|trim');

        //validasi form
        if ($this->form_validation->run() == false) {
            $this->load->view('template/content', $data);
        } else {
            $this->harga->editHarga($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data harga berhasil diubah</div>');
            redirect('harga');
        }
    }

    public function hapus($id)
    {
        $this->harga->deleteHarga($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus data harga berhasil!</div>');
        redirect('harga');
    }
}
