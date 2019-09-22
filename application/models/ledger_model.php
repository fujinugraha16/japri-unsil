<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ledger_model extends CI_Model
{
    public function getAllLedger()
    {
        return $this->db->get('ledger')->result_array();
    }

    public function getLedgerById($id)
    {
        return $this->db->get_where('ledger', ['id_ledger' => $id])->row_array();
    }

    public function getLastLedger()
    {
        return $this->db->get('ledger')->last_row('array');
    }


    public function addLedger($keterangan, $debit, $kredit, $saldo)
    {
        $data = [
            'keterangan' => $keterangan,
            'debit' => $debit,
            'kredit' => $kredit,
            'saldo' => $saldo
        ];
        $this->db->set('tanggal', 'NOW()', FALSE);
        $this->db->insert('ledger', $data);
    }
    //
    // public function editLedger($id)
    // {
    //     $data = [
    //         'barang' => $this->input->post('nama'),
    //         'ledger' => $this->input->post('ledger')
    //     ];
    //
    //     $this->db->where('id_ledger', $id);
    //     $this->db->update('ledger', $data);
    // }

}
