<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
    public function getAllTransaksi()
    {
        return $this->db->get('transaksi')->result_array();
    }

    public function getTransaksiById($id)
    {
        return $this->db->get_where('transaksi', ['id_transaksi' => $id])->row_array();
    }

    public function getLastTransaksi()
    {
        return $this->db->get('transaksi')->last_row();
    }

    public function addTransaksi($trans)
    {
        $data = [
            'crew'          => $trans['crew'],
            'discount'      => $trans['discount'],
            'admin'         => $trans['admin'],
            'print'         => $trans['print'],
            'ledger'        => $trans['ledger'],
            'jumlah'        => $trans['jumlah'],
            'jilid'         => $trans['jilid'],
            'harga_awal'    => $trans['harga_awal'],
            'harga_diskon'  => $trans['harga_diskon']
        ];
        $this->db->set('tanggal', 'NOW()', FALSE);
        $this->db->insert('transaksi', $data);
    }
}
