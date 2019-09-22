<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diskon_model extends CI_Model
{
    public function getAllDiskon()
    {
        return $this->db->get('discount')->result_array();
    }

    public function getDiskonById($id)
    {
        return $this->db->get_where('discount', ['id_discount' => $id])->row_array();
    }

    public function addDiskon()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'potongan' => $this->input->post('potongan')
        ];

        $this->db->insert('discount', $data);
    }

    public function editDiskon($id)
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'potongan' => $this->input->post('potongan')
        ];

        $this->db->where('id_discount', $id);
        $this->db->update('discount', $data);
    }

    public function deleteDiskon($id)
    {
        return $this->db->delete('discount', ['id_discount' => $id]);
    }
}
