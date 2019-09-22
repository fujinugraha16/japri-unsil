<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != 'login') {
            redirect('login');
        }

        // load model diskon
        $this->load->model('diskon_model', 'diskon');
        $this->load->model('harga_model', 'harga');
        $this->load->model('admin_model', 'admin');
        $this->load->model('ledger_model', 'ledger');
        $this->load->model('print_model', 'print');
        $this->load->model('crew_model', 'crew');
        $this->load->model('transaksi_model', 'transaksi');
    }

    public function index()
    {
        $data['title']  = "Dashboard | JAPRI";
        $data['page']   = "dashboard";
        $data['sesi']   = "transaksi";
        $this->load->view('template/content', $data);
    }
    public function tambah()
    {
        $data['title']  = "Dashboard | JAPRI";
        $data['page']   = "dashboard";
        $data['sesi']   = "tambah_transaksi";
        $data['diskon'] = $this->diskon->getAllDiskon();
        $data['harga']  = $this->harga->getAllHarga();

        $this->load->view('template/content', $data);
    }

    public function ledger()
    {
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "ledger";
        $this->load->view('template/content', $data);
    }

    public function tambahledger()
    {
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "ledger";

        //form validation rules
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric|trim');


        //validasi form
        if ($this->form_validation->run() == false) {
            $this->load->view('template/content', $data);
        } else {
            $keterangan = $this->input->post('nama');
            $kredit     = $this->input->post('harga');
            $saldo      = $this->ledger->getLastLedger()['saldo'];
            $this->ledger->addLedger($keterangan, 0, $kredit, (int)$saldo - $kredit);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data ledger berhasil ditambahkan</div>');
            redirect('ledger');
        }
    }

    function add()
    {
        // data inputan
        $jns  = $this->input->post('jenis');
        $disk = (int)$this->input->post('diskon');

        //ubah ke data
        $data['nama']     = $this->input->post('nama');
        $data['crew']     = $this->input->post('crew');
        $data['cetakhp']  = (int)$this->input->post('cetakhp');
        $data['cetaksw']  = (int)$this->input->post('cetaksw');
        $data['cetakfw']  = (int)$this->input->post('cetakfw');
        $data['jilid']    = (int)$this->input->post('jilid');

        //get diskon
        $diskon = $this->diskon->getDiskonById($disk);
        $data['iddiskon'] = $diskon['id_discount'];
        $data['ndiskon']  = $diskon['nama'];
        $data['vdiskon']  = $diskon['potongan'];

        //get harga
        $harga = $this->harga->getAllHarga();
        $data['hp'] = $harga[0]['harga'];
        $data['sw'] = $harga[1]['harga'];
        $data['fw'] = $harga[2]['harga'];
        $data['jl'] = $harga[3]['harga'];

        //get admin
        $nlogin = $this->session->userdata("nama");
        $admin = $this->admin->getAdminByNama($nlogin);
        $data['admin'] = $admin['nama'];

        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "sukses";

        $this->load->view('template/content', $data);
    }

    function badmin($jbarang, $jilid)
    {
        return ($jbarang *  50) + ($jilid * 1000);
    }

    function all()
    {
        $nama       = $this->input->post('namapb');
        $admin      = $this->input->post('admin');
        $iddiskon   = $this->input->post('iddiskon');
        $crew       = $this->input->post('crew');
        $bayar      = (int)$this->input->post('bayar');
        $jkertas    = (int)$this->input->post('jkertas');
        $jilid      = (int)$this->input->post('jilid');
        $bonuscrew  = (int)$this->input->post('hawal') * 0.3;
        $hawal      = (int)$this->input->post('hawal');
        $hdiskon    = (int)$this->input->post('hdiskon');
        $bonusadmin = $this->badmin($jkertas, $jilid);

        $data['nama'] = $nama;

        $lLedger    = $this->ledger->getLastLedger();
        $lLedger['saldo'] != NULL ? $saldo = $lLedger['saldo'] : $saldo = 0;
        $nlogin = $this->session->userdata("nama");
        $qAdmin     = $this->admin->getAdminByNama($nlogin);
        $bnsadmin   = $qAdmin['bonus'];
        $idadmin    = $qAdmin['id_admin'];

        $qCrew      = $this->crew->getCrewByNama($crew);
        $idcrew     = $qCrew['id_crew'];
        $bagihasil  = $qCrew['bagihasil'];
        $piutang    = $qCrew['piutang'];

        if ($bayar !== 'yes') {
            $this->crew->addPiutang($idcrew, $piutang);
            $this->ledger->addLedger("PIUTANG PRINT " . strtoupper($crew), 0, $hdiskon, (int)($saldo));
        } else {
            $this->ledger->addLedger("PENDAPATAN PRINT", $hdiskon, 0, (int)($saldo));
        }

        $this->crew->addBagiHasil($idcrew, (int)$bagihasil + $bonuscrew);
        $this->print->addPrint($nama, $hdiskon);
        $this->admin->bonusadmin($idadmin, (int)$bnsadmin + $bonusadmin);

        $data['bonuscrew']  =  $hawal * 0.3;
        $data['bonusadmin'] = $bonusadmin;
        $data['crew']       = $crew;

        $lLedger      = $this->ledger->getLastLedger();
        $idledger     = $lLedger['id_ledger'];
        $lPrint       = $this->print->getLastPrint();
        $idprint      = $lPrint['id_print'];

        $trans = [
            'crew'          => $idcrew,
            'discount'      => $iddiskon,
            'admin'         => $idadmin,
            'print'         => $idprint,
            'ledger'        => $idledger,
            'jumlah'        => $jkertas,
            'jilid'         => $jilid,
            'harga_awal'    => $hawal,
            'harga_diskon'  => $hdiskon
        ];
        $this->transaksi->addTransaksi($trans);

        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "trans_sukses";
        $this->load->view('template/content', $data);
    }
}
