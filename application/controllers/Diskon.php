<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diskon extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != 'login') {
            redirect('login');
        }

        //load model diskon
        $this->load->model('diskon_model', 'diskon');
    }

    public function index()
    {

        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "diskon";
        $data['diskon'] = $this->diskon->getAllDiskon();

        $this->load->view('template/content', $data);
    }

    public function tambah()
    {
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "diskon";
        $data['diskon'] = $this->diskon->getAllDiskon();

        //form validation rules
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('potongan', 'Potongan', 'required|numeric|trim');

        //validasi form
        if ($this->form_validation->run() == false) {
            $this->load->view('template/content', $data);
        } else {
            $this->diskon->addDiskon();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data diskon berhasil ditambahkan</div>');
            redirect('diskon');
        }
    }

    public function edit($id)
    {
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "edit_diskon";
        $data['diskon_id'] = $this->diskon->getDiskonById($id);
        //form validation rules
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('potongan', 'potongan', 'required|numeric|trim');

        //validasi form
        if ($this->form_validation->run() == false) {
            $this->load->view('template/content', $data);
        } else {
            $this->diskon->editDiskon($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data diskon berhasil diubah</div>');
            redirect('diskon');
        }
    }

    public function hapus($id)
    {
        $this->diskon->deleteDiskon($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus data diskon berhasil!</div>');
        redirect('diskon');
    }
}
