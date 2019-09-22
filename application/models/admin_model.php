<?php
class Admin_model extends CI_Model
{
    public function getAllAdmin()
    {
        return $this->db->order_by('nama', 'ASC')->get('admin')->result_array();
    }

    public function getAdminById($id)
    {
        return $this->db->get_where('admin', ['id_admin' => $id])->row_array();
    }

    public function getAdminByNama($nama)
    {
        return $this->db->get_where('admin', ['username' => $nama])->row_array();
    }
    public function addAdmin()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'pass' => md5($this->input->post('password')),
        ];

        $this->db->insert('admin', $data);
    }
    public function bayarBonus($id)
    {

        $crew = $this->getAdminById($id);
        $bagihasil = $crew['bonus'] ;
        $bayar = $this->input->post('potongan');

        $data = [
            'bonus' => (int)($bagihasil - $bayar)
        ];

        $this->db->where('id_admin', $id);
        $this->db->update('admin', $data);

        $png = $this->db->query("SELECT * FROM `ledger`");
        $row = $png->last_row();
        $saldo = $row->saldo;

        $data = array(
            'keterangan' => 'PENGAMBILAN BONUS ADMIN '.strtoupper($this->input->post('nama')),
            'debit' => 0,
            'kredit' => $bayar,
            'saldo' => $saldo-$bayar,
        );

        $this->db->set('tanggal', 'NOW()', FALSE);
        $this->db->insert('ledger', $data);
    }
    public function bonusAdmin($id, $bonus)
    {
        $data = [
            'bonus' => $bonus
        ];

        $this->db->where('id_admin', $id);
        $this->db->update('admin', $data);
    }

    public function editAdmin($id)
    {
        $data = [
            'nama' => $this->input->post('nama'),
        ];

        $this->db->where('id_admin', $id);
        $this->db->update('admin', $data);
    }

    public function deleteAdmin($id)
    {
        return $this->db->delete('admin', ['id_admin' => $id]);
    }

    function search_admin($title)
    {
        $this->db->like('nama', $title, 'both');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit(10);
        return $this->db->get('admin')->result();
    }
}
