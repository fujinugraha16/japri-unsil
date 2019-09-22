<?php
class Crew_model extends CI_Model
{
    public function getAllCrew()
    {
        return $this->db->order_by('nama', 'ASC')->get('crew')->result_array();
    }

    public function getCrewById($id)
    {
        return $this->db->get_where('crew', ['id_crew' => $id])->row_array();
    }

    public function getCrewByNama($nama)
    {
        return $this->db->get_where('crew', ['nama' => $nama])->row_array();
    }

    public function addCrew()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'piutang' => $this->input->post('piutang'),
            'bagihasil' => $this->input->post('bagihasil'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->db->insert('crew', $data);
    }

    public function addPiutang($id, $piutang){
      $data = [
          'piutang' => $piutang
      ];
      $this->db->where('id_crew', $id);
      $this->db->update('crew', $data);
    }

    public function addBagiHasil($id, $bagihasil){
      $data = [
          'bagihasil' => $bagihasil
      ];
      $this->db->where('id_crew', $id);
      $this->db->update('crew', $data);
    }

    public function bayarPiutang($id)
    {

        $png = $this->db->query("SELECT piutang AS utang FROM `crew` WHERE id_crew = ".$id);
        $row = $png->row();
        $piutangawal = $row->utang ;
        $piutangbayar = $this->input->post('potongan');

        $data = [
            'nama' => $this->input->post('nama'),
            'piutang' => (int)($piutangawal - $piutangbayar)
        ];

        $this->db->where('id_crew', $id);
        $this->db->update('crew', $data);

        $png = $this->db->query("SELECT * FROM `ledger`");
        $row = $png->last_row();
        $saldo = $row->saldo;

        $data = array(
            'keterangan' => 'PENDAPATAN PRINT '.strtoupper($this->input->post('nama')),
            'debit' => $piutangbayar,
            'saldo' => $saldo+$piutangbayar,
        );

        $this->db->set('tanggal', 'NOW()', FALSE);
        $this->db->insert('ledger', $data);
    }

    public function bayarBonus($id)
    {

        $crew = $this->getCrewById($id);
        $bagihasil = $crew['bagihasil'] ;
        $bayar = $this->input->post('potongan');

        $data = [
            'nama' => $this->input->post('nama'),
            'bagihasil' => (int)($bagihasil - $bayar)
        ];

        $this->db->where('id_crew', $id);
        $this->db->update('crew', $data);

        $png = $this->db->query("SELECT * FROM `ledger`");
        $row = $png->last_row();
        $saldo = $row->saldo;

        $data = array(
            'keterangan' => 'PENGAMBILAN BAGI HASIL'.strtoupper($this->input->post('nama')),
            'debit' => 0,
            'kredit' => $bayar,
            'saldo' => $saldo-$bayar,
        );

        $this->db->set('tanggal', 'NOW()', FALSE);
        $this->db->insert('ledger', $data);
    }
    public function editCrew($id)
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'piutang' => $this->input->post('piutang'),
            'bagihasil' => $this->input->post('bagihasil'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->db->where('id_crew', $id);
        $this->db->update('crew', $data);
    }

    public function deleteCrew($id)
    {
        return $this->db->delete('crew', ['id_crew' => $id]);
    }

    function search_crew($title)
    {
        $this->db->like('nama', $title, 'both');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit(10);
        return $this->db->get('crew')->result();
    }
}
