<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crew extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != 'login') {
            redirect('login');
        }
        $this->load->model('crew_model', 'crew');
    }

    public function index()
    {
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "crew";
        $data['crew'] = $this->crew->getAllCrew();
        $this->load->view('template/content', $data);
    }

    public function tambah()
    {
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "crew";
        $data['crew'] = $this->crew->getAllCrew();

        //form validation rules
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat lahir', 'required|trim');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

        //validasi form
        if ($this->form_validation->run() == false) {
            $this->load->view('template/content', $data);
        } else {
            $this->crew->addCrew();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data crew berhasil ditambahkan</div>');
            redirect('crew');
        }
    }
    public function potongan($id)
    {
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "edit_potongan";
        $data['crew_id'] = $this->crew->getCrewById($id);

        //form validation rules
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('potongan', 'potongan', 'required|numeric|trim');

        //validasi form
        if ($this->form_validation->run() == false) {
            $this->load->view('template/content', $data);
        } else {
            $this->crew->bayarPiutang($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Bayar piutang berhasil</div>');
            redirect('crew');
        }
    }

    public function bagihasil($id)
    {
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "edit_bagihasil";
        $data['crew_id'] = $this->crew->getCrewById($id);

        //form validation rules
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('potongan', 'potongan', 'required|numeric|trim');

        //validasi form
        if ($this->form_validation->run() == false) {
            $this->load->view('template/content', $data);
        } else {
            $this->crew->bayarBonus($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Bagi hasil dengan crew berhasil</div>');
            redirect('crew');
        }
    }

    public function edit($id)
    {
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "edit_crew";
        $data['crew_id'] = $this->crew->getCrewById($id);

        //form validation rules
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat lahir', 'required|trim');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('piutang', 'Piutang', 'required|numeric|trim');
        $this->form_validation->set_rules('bagihasil', 'Bagi Hasil', 'required|numeric|trim');

        //validasi form
        if ($this->form_validation->run() == false) {
            $this->load->view('template/content', $data);
        } else {
            $this->crew->editCrew($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data crew berhasil diubah</div>');
            redirect('crew');
        }
    }


    public function hapus($id)
    {
        $this->crew->deleteCrew($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus data crew berhasil!</div>');
        redirect('crew');
    }

    function get_autocomplete()
    {
        if (isset($_GET['term'])) {
            $result = $this->crew->search_crew($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $arr_result[] = $row->nama;
                echo json_encode($arr_result);
            }
        }
    }
}
