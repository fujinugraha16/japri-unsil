<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Harga_model extends CI_Model
{
    public function getAllHarga()
    {
        return $this->db->get('harga')->result_array();
    }

    public function getHargaById($id)
    {
        return $this->db->get_where('harga', ['id_harga' => $id])->row_array();
    }

    public function addHarga()
    {
        $data = [
            'barang' => $this->input->post('nama'),
            'harga' => $this->input->post('harga')
        ];

        $this->db->insert('harga', $data);
    }

    public function editHarga($id)
    {
        $data = [
            'barang' => $this->input->post('nama'),
            'harga' => $this->input->post('harga')
        ];

        $this->db->where('id_harga', $id);
        $this->db->update('harga', $data);
    }

    public function deleteHarga($id)
    {
        return $this->db->delete('harga', ['id_harga' => $id]);
    }
}
