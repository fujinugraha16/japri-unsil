<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Print_model extends CI_Model
{
    public function getAllPrint()
    {
        return $this->db->get('detil_print')->result_array();
    }

    public function getPrintById($id)
    {
        return $this->db->get_where('detil_print', ['id_print' => $id])->row_array();
    }

    public function getLastPrint()
    {
        return $this->db->get('detil_print')->last_row('array');
    }

    public function addPrint($nama, $harga)
    {
        $data = [
            'nama' => $nama,
            'harga' => $harga,
        ];
        $this->db->set('tanggal', 'NOW()', FALSE);
        $this->db->insert('detil_print', $data);
    }
}
